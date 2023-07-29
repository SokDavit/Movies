<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $table ='genre';
    protected $primaryKey = 'genre_id';
    protected $fillable = ['genre_type', 'created_at', 'updated_at'];
}
