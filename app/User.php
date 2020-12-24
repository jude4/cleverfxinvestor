<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
        'name',
        'role_id',
        'email',
        'email_verified_at',
        'profile_pic',
        'driving_license',
        'card_no',
        'status',
        'phone_no',
        'next_of_kins',
        'address',
        'parent_id',
        'beneficiary',
        'level'
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'role_id' => 'integer',
        'referrer_by' => 'integer',
        'no_of_refs' => 'integer',
        'ref_level_id' => 'integer',
        'email' => 'string',
        'email_verified_at' => 'datetime',
        'profile_pic' => 'string',
        'referrer_link' => 'string',
        'balance' => 'string',
        'status' => 'boolean',
        'phone_no' => 'string',
        'password' => 'string',
        'parent_id',
        'remember_token' => 'string'
    ];


    public function referrals()
    {
        return $this->hasMany('App\User');
    }

    public function transactions()
    {
        return $this->hasMany('App\User');
    }

    public function investment_wallets()
    {
        return $this->hasMany(InvestmentWallet::class);
    }

    public function parent()
    {
        return $this->belongsTo(User::class);
    }

    public function children()
    {
        return $this->hasMany(User::class, 'parent_id');
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
            ->get()->filter(function ($item) use ($user) {
                return $item->id != $user->id;
            });
    }
 
    public function totalCloseSiblings($user)
    {
        // return the total count of the close siblings of a particular user
        return $this->closeSiblings($user)->count();
    }
}