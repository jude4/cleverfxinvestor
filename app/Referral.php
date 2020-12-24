<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{
    protected $fillable = [
                'user_id',
                'referred_by',
                'referral_link'
            ];

    public function users()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}