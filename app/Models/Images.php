<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Photo;

class Images extends Model
{
    use HasFactory;

    protected $table = "images";
    protected $guarded = [];

    public function photos() {
        return $this->belongsTo(Photo::class);
    }
}