<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mylist extends Model
{
    use HasFactory;
    protected $table ='myList';
    protected $primaryKey = 'id';
    protected $fillable = ['userId', 'movies', 'created_at', 'updated_at'];
}
