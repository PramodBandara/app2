<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'name', 'email', 'phone', 'street', 'zipcode', 'province','additionalnote' ,'orderoption',
    ];
}
