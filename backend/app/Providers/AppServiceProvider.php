<?php

namespace App\Providers;

use App\Models\Contact;
use App\Models\Member;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $members = Member::latest('created_at')->where('read','0')->count();
        $contacts = Contact::latest('created_at')->where('read','0')->count();
        view()->share('membersCount',$members);
        view()->share('contactsCount',$contacts);
    }
}
