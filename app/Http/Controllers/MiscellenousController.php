<?php

namespace App\Http\Controllers;

use App\AnnualProfit;
use App\DownlineReferralBonusPercentage;
use App\ReferralBonusPercentage;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class MiscellenousController extends Controller
{
    public function index()
    {

        $miniPercentage = ReferralBonusPercentage::findOrFail(1)->percentage;
        $standardPercentage = ReferralBonusPercentage::findOrFail(2)->percentage;
        $premiumPercentage = ReferralBonusPercentage::findOrFail(3)->percentage;
        $premiumProPercentage = ReferralBonusPercentage::findOrFail(4)->percentage;
        $cfiisPercentage = ReferralBonusPercentage::findOrFail(5)->percentage;

        $miniAnnualPercentage = AnnualProfit::findOrFail(1)->percentage;
        $standardAnnualPercentage = AnnualProfit::findOrFail(2)->percentage;
        $premiumAnnualPercentage = AnnualProfit::findOrFail(3)->percentage;
        $premiumAnnualProPercentage = AnnualProfit::findOrFail(4)->percentage;


        $grandParentPercentage = DownlineReferralBonusPercentage::findOrFail(1)->percentage;

        $firstInstance = DownlineReferralBonusPercentage::findOrFail(2)->percentage;
        $secondInstance = DownlineReferralBonusPercentage::findOrFail(3)->percentage;
        $thirdInstance = DownlineReferralBonusPercentage::findOrFail(4)->percentage;
        $total = DownlineReferralBonusPercentage::findOrFail(5)->percentage;



        return view('miscellenous.index', compact(
            'miniPercentage',
            'standardPercentage',
            'premiumPercentage',
            'premiumProPercentage',
            'miniAnnualPercentage',
            'standardAnnualPercentage',
            'premiumAnnualPercentage',
            'premiumAnnualProPercentage',
            'cfiisPercentage',
            'grandParentPercentage',
            'firstInstance',
            'secondInstance',
            'thirdInstance',
            'total'
        ));
    }

    public function update(Request $request)
    {
        
        if ($request->miniAnnual) {
            $this->validate($request, [
                'miniAnnual' => 'required|numeric|integer',
            ]);
            $this->processAnnualPercentage($request->miniAnnual, 1);

        
        }

        if ($request->standardAnnual) {
            $this->validate($request, [
                'standardAnnual' => 'required|numeric|integer',
            ]);
            $this->processAnnualPercentage($request->standardAnnual, 2);

            
        }

        if ($request->premiumAnnual) {
            $this->validate($request, [
                'premiumAnnual' => 'required|numeric|integer',
            ]);
            $this->processAnnualPercentage($request->premiumAnnual, 3);

        }

        if ($request->premiumProAnnual) {
            $this->validate($request, [
                'premiumProAnnual' => 'required|numeric|integer',
            ]);
            $this->processAnnualPercentage($request->premiumProAnnual, 4);

        }
        
        // if ($request->downline) {

            // $this->validate($request, [
            //     'downline' => 'required|numeric|integer',
            // ]);

        //    dd($request->grandParent);
            $this->processDownlinePercentage($request->grandParent, 1);
            $this->processDownlinePercentage($request->first, 2);
            $this->processDownlinePercentage($request->second, 3);
            $this->processDownlinePercentage($request->third, 4);
            $this->processDownlinePercentage($request->total, 5);

            Flash::success('Update Successful!');

            return back();
        
        // }

            if ($request->mini) {
                $this->validate($request, [
                'mini' => 'required|numeric|integer',
                ]);
                $this->processPercentage($request->mini, 1);
            }

            if ($request->standard) {
                 $this->validate($request, [
                'standard' => 'required|numeric|integer',
                ]);
                $this->processPercentage($request->standard, 2);
            }

            if ($request->premium) {
                 $this->validate($request, [
                     'premium' => 'required|numeric|integer',
                ]);
                $this->processPercentage($request->premium, 3);
            }

            if ($request->premium_pro) {
                 $this->validate($request, [
                     'premium_pro' => 'required|numeric|integer',
                ]);
                $this->processPercentage($request->premium_pro, 4);
            }

            Flash::success('Update was successful!');

            return back();
        
    }

    public function processPercentage($value, $id = null)
    {
        $percentage = ReferralBonusPercentage::find($id);

        $percentage->percentage = $value;

        $percentage->save();
    }

    public function processDownlinePercentage($value, $id = null)
    {
        $percentage = DownlineReferralBonusPercentage::find($id);

        $percentage->percentage = $value;

        $percentage->save();
    }

    public function processAnnualPercentage($value, $id = null)
    {
        $percentage = AnnualProfit::find($id);

        $percentage->percentage = $value;

        $percentage->save();
    }
}