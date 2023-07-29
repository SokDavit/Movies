<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table= 'user';
    protected $primaryKey= 'id';
    protected $fillable = ['email', 'password', 'mobilePhone' , 'subscription' , 'active' , 'remember_token', 'created_at', 'updated_at'];
}
