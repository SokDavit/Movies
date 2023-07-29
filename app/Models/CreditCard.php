<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditCard extends Model
{
    use HasFactory;
    protected $table= 'creditcard';
    protected $primaryKey = 'id';
    protected $fillable = ['cardnumber', 'expiration_date', 'cvv', 'cardHolderName'];
}
