<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamousPeople extends Model
{
    use HasFactory;
    
    protected $table = "famous_people";
    protected $guarded = [];
}
