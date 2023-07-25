<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TV_Show extends Model
{
    use HasFactory;
    protected $table= 'movie';
    protected $primaryKey= 'id';
    protected $fillable = ['title', 'sesonNumber', 'year', 'age' , 'quality', 'description' , 'rating' , 'poster' ];
}

