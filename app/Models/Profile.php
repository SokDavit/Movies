<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table = "userProfile";
    protected $primaryKey ='id';
    protected $fillable = ['userId', 'nickname', 'avatar', 'created_at', 'updated_at'];

    // Example of a relationship to another model (assuming the foreign key is id)

}
