<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DepositoType extends Model
{
    protected $fillable = ['name', 'yearly_return'];
    
    public function accounts() {
        return $this->hasMany(Account::class);
    }
}
