<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Charitable extends Model
{
    use HasFactory;

    protected $table = "charitables";
    protected $guarded = [];
}