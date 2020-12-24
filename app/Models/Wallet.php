<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Wallet
 * @package App\Models
 * @version April 10, 2020, 3:51 pm UTC
 *
 * @property \App\Models\User user
 * @property integer user_id
 * @property string balance
 * @property string total_withdraw
 */
class Wallet extends Model
{
    use SoftDeletes;

    public $table = 'wallets';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'balance',
        'total_withdraw',
        'investment_plan_id',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'balance' => 'string',
        'total_withdraw' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'balance' => 'required',
        'total_withdraw' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function users()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }

}
