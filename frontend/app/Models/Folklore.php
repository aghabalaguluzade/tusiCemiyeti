<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folklore extends Model
{
    use HasFactory;

    protected $table = "folklores";
    protected $guarded = [];
}