<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Transaction
 * @package App\Models
 * @version April 10, 2020, 3:48 pm UTC
 *
 * @property \App\Models\User user
 * @property integer user_id
 * @property string wallet_address
 * @property string transaction_type
 * @property string amount
 * @property boolean status
 */
class Transaction extends Model
{
    use SoftDeletes;

    public $table = 'transactions';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'wallet_address',
        'transaction_type',
        'investment_plan_id',
        'referral_bonus',
        'amount',
        'payment_proof',
        'withdraw_type',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'wallet_address' => 'string',
        'transaction_type' => 'string',
        'amount' => 'string',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'wallet_address' => 'required',
        'transaction_type' => 'required',
        'amount' => 'required',
        'status' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function users()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }




}
