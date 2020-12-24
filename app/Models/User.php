<?php

namespace App\Models;

use App\BonusTransactionHistory;
use App\Credential;
use Eloquent as Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class User
 * @package App\Models
 * @version April 6, 2020, 6:10 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection accounts
 * @property \Illuminate\Database\Eloquent\Collection referrals
 * @property \Illuminate\Database\Eloquent\Collection transactions
 * @property \Illuminate\Database\Eloquent\Collection wallets
 * @property string name
 * @property integer role_id
 * @property string email
 * @property string|\Carbon\Carbon email_verified_at
 * @property string profile_pic
 * @property boolean status
 * @property string phone_no
 * @property string password
 * @property string remember_token
 */
class User extends Model
{
    use SoftDeletes, Notifiable;

    public $table = 'users';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at', 'withdraw_until'];



    public $fillable = [
        'name',
        'role_id',
        'email',
        'username',
        'email_verified_at',
        'profile_pic',
        'status',
        'driving_license',
        'card_no',
        'phone_no',
        'password',
        'remember_token',
        'withdraw_until',
        'next_of_kins',
        'address',
        'beneficiary',
        'parent_id',
        'level'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'role_id' => 'integer',
        'email' => 'string',
        'email_verified_at' => 'datetime',
        'profile_pic' => 'string',
        'status' => 'boolean',
        'phone_no' => 'string',
        'password' => 'string',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'role_id' => 'required',
        'email' => 'required',
        'status' => 'required',
        'password' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function accounts()
    {
        return $this->hasMany(\App\Models\Account::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function referrals()
    {
        return $this->hasMany(\App\Referral::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function transactions()
    {
        return $this->hasMany(\App\Models\Transaction::class, 'user_id');
    }

    public function credential()
    {
        return $this->hasOne(Credential::class);
    }

  
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function parent()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    public function children()
    {
        return $this->hasMany(\App\Models\User::class, 'parent_id');
    }

    public function siblings($user)
    {
        // return user siblings  
        return User::where('parent_id', $user->parent_id)
            ->get()->filter(function ($item) use ($user) {
                return $item->id != $user->id;
            });
    }

    public function closeSiblings($user)
    {
        // return user close siblings
        return User::where('parent_id', $user->parent_id)
            ->where('level', $user->level)
            ->get()
            ->filter(function ($item) use ($user) {
                return $item->id != $user->id;
            });

            
    }

    public function position($user)
    {
        return $this->closeSiblings($user)->filter(function ($item) use ($user) {
               return $item->id <= $user->id;
            })->count();
    }

    public function totalCloseSiblings($user)
    {
        // return the total count of the close siblings of a particular user
        return $this->closeSiblings($user)->count();
    }

    public function closeSiblingsPosition($user)
    {
        // return the user sibling position in the level
        return $this->closeSiblings($user)
                     ->filter(function ($item) use ($user) {
                return $item->id != $user->id;
            });
    }

    
    
    public function wallets()
    {
        return $this->hasMany(\App\Models\Wallet::class, 'user_id');
    }

    public function getWithdrawDaysLeftAttribute()
    {
        if ($this->withdraw_until) {
            return 0;
        }

        return now()->diffInDays($this->withdraw_until, false);
    }

     public function investment_wallets()
    {
        return $this->hasMany('App\InvestmentWallet');
    }

    public function otherTransaction()
    {
        return $this->hasMany(BonusTransactionHistory::class);
    }
}