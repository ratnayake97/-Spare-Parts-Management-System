<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncomeModel extends Model
{
    use HasFactory;
    
    protected $table = 'income_details';
    protected $primaryKey = 'invoice_number';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = [
        'income_refno',
        'transaction_date',
        'income_amount',
        'income_category',
        'income_discount',
        'income_description',
        'created_at',
        'updated_at',
        
        
    ];

}
