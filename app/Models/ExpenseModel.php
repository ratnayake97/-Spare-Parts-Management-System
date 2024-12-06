<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpenseModel extends Model
{
    use HasFactory;

    protected $table = 'expense_details';
    protected $primaryKey = 'payment_number';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = [
        'expense_refno',
        'transaction_date',
        'expense_amount',
        'expense_category',
        'expense_discount',
        'expense_description',
        'created_at',
        'updated_at',
        
        
    ];
}
