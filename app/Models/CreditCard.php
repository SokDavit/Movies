<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditCard extends Model
{
    use HasFactory;
    protected $table= 'card';
    protected $primaryKey = 'user_id';
    protected $fillable = ['cardnumber', 'expiration', 'cvv', 'firstname', 'lastname'];
}
