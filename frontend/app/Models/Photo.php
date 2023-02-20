<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Images;

class Photo extends Model
{
    use HasFactory;

    protected $table = "photos";
    protected $guarded = [];

    public function images() {
        return $this->hasMany(Images::class);
    }
}