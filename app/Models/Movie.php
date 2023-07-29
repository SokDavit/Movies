<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $table= 'movie';
    protected $primaryKey= 'id';
    protected $fillable = ['title', 'description', 'quality' , 'duration', 'age' , 'poster' , 'year' , 'rating', 'url', 'background', 'genre_id' , 'created_at', 'updated_at'];
}
