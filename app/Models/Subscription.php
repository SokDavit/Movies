<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
    protected $table = 'subscription';
    protected $primaryKey  = 'id';
    protected $fillable = [ 'subPlanId', 'started_date', 'end_date', 'status'];
}
