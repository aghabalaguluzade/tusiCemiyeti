<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monuments extends Model
{
    use HasFactory;

    protected $table = "monuments";
    protected $guarded = [];
}