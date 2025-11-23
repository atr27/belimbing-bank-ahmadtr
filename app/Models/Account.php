<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = ['customer_id', 'deposito_type_id', 'balance', 'transaction_date'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function depositoType()
    {
        return $this->belongsTo(DepositoType::class);
    }
}
