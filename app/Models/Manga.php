<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manga extends Model
{
    protected $table = 'manga';
    protected $fillable =[
        'nama',
        'genre',
        'creator'
    ];
    use HasFactory;
}
