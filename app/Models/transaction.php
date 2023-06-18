<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    use HasFactory;
    protected $table = 'transaction';
    protected $primaryKey = 'transaction_id';
    protected $fillable = ['transaction_type', 'transaction_amount', 'transaction_date', 'inventory_id', 'transaction_quantity'];
}