<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    public function trader()
    {
        return $this->belongsTo(Trader::class);
    }
}