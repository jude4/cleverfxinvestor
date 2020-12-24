<?php

namespace App;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class BonusTransactionHistory extends Model
{
    protected $guarded = [];

    public function users()
    {
        return $this->belongsTo(User::class, 'reciever_id');
    }

    public function payer()
    {
        return $this->belongsTo(User::class, 'payer_id');
    } 
}