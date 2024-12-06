<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'stocks';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'customerName',
        'contactNumber',
        'itemName',
        'model',
        'brand',
        'noofItems',
        'pricePerUnit',
        'paymentDetails',
        'created_at',
        'updated_at'
    ];
}
