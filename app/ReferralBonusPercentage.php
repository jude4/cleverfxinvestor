<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReferralBonusPercentage extends Model
{
    protected $guarded = [];

    public function miniPercentage()
    {
        return ReferralBonusPercentage::findOrFail(1)->percentage;
    }

    public function standardPercentage()
    {
        return ReferralBonusPercentage::findOrFail(2)->percentage;;
    }

    public function premiumPercentage()
    {
        return ReferralBonusPercentage::findOrFail(3)->percentage;;
    }

    public function premiumProPercentage()
    {
        return ReferralBonusPercentage::findOrFail(4)->percentage;
    }
}