<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeWelcome extends Model
{
    use HasFactory;

    protected $fillable = [
        "title", "subtitle", "brand","context","description","logo","image"
    ];
}
