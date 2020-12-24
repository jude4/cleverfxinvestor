<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Credential extends Model
{
    protected $fillable = [
        'name',
        'address',
        'beneficiary',
        'relationship',
        'phone',
        'identity_proof',
        'residence_proof'
    ];
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}