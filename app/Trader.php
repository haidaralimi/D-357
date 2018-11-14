<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trader extends Model
{
    public function item(){
        return $this->hasMany(Item::class);
    }
    public function loan(){
        return $this->hasMany(Loan::class);
    }
}