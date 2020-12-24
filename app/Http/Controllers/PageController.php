<?php

namespace App\Http\Controllers;

use App\AnnualProfit;
use App\Gallery;
use Flash;
use App\Models\FAQ;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use App\PhoneNumber;
use App\Referral;
use App\ReferralBonusPercentage;
use App\Review;
use Illuminate\Support\Facades\Mail;
use App\TermsAndConditions;
use App\Video;
use Illuminate\Support\Facades\App;
use Stichoza\GoogleTranslate\GoogleTranslate;

class PageController extends Controller
{
    public function home()
    {
       
       
     
    //    dd( App::setLocale($locale));
        $ukNumber = PhoneNumber::first()->phone_number;
        $arabicNumber = PhoneNumber::all()->last()->phone_number;
        $miniPercentage = ReferralBonusPercentage::findOrFail(1)->percentage;
        $standardPercentage = ReferralBonusPercentage::findOrFail(2)->percentage;
        $premiumPercentage = ReferralBonusPercentage::findOrFail(3)->percentage;
        $premiumProPercentage = ReferralBonusPercentage::findOrFail(4)->percentage;
        $cfiPercentage = ReferralBonusPercentage::findOrFail(5)->percentage;
        
        $miniAnnualPercentage = AnnualProfit::findOrFail(1)->percentage;
        $standardAnnualPercentage = AnnualProfit::findOrFail(2)->percentage;
        $premiumAnnualPercentage = AnnualProfit::findOrFail(3)->percentage;
        $premiumAnnualProPercentage = AnnualProfit::findOrFail(4)->percentage;

        $videos = Video::latest()->get();

        $photos = Gallery::latest()->get();

        $reviews = Review::where('is_published', true)->latest()->get();

        return view('pages.home', compact(
            'miniPercentage',
            'standardPercentage',
            'premiumPercentage',
            'premiumProPercentage',
            'miniAnnualPercentage',
            'standardAnnualPercentage',
            'premiumAnnualPercentage',
            'premiumAnnualProPercentage',
            'cfiPercentage',
            'ukNumber',
            'arabicNumber',
            'videos',
            'photos',
            'reviews'
           
        ));
    }

    public function aboutUs()
    {
        return view('pages.about');
    }

    public function faq()
    {
        $faqs = FAQ::all();
        return view('pages.faq', ['faqs' => $faqs]);
    }

    public function howItWorks()
    {
        return view('pages.how_it_works');
    }

    public function introduction()
    {
        return view('pages.introduction');
    }

    public function beginner()
    {
        return view('pages.beginner');
    }

    public function finacial()
    {
        return view('pages.finacial');
    }

    public function advance()
    {
        return view('pages.advance');
    }

    public function securityOfFund()
    {
        return view('pages.security');
    }

    public function accountType()
    {
        $miniPercentage = ReferralBonusPercentage::findOrFail(1)->percentage;
        $standardPercentage = ReferralBonusPercentage::findOrFail(2)->percentage;
        $premiumPercentage = ReferralBonusPercentage::findOrFail(3)->percentage;
        $premiumProPercentage = ReferralBonusPercentage::findOrFail(4)->percentage;
        $cfiPercentage = ReferralBonusPercentage::findOrFail(5)->percentage;
        
           
        $miniAnnualPercentage = AnnualProfit::findOrFail(1)->percentage;
        $standardAnnualPercentage = AnnualProfit::findOrFail(2)->percentage;
        $premiumAnnualPercentage = AnnualProfit::findOrFail(3)->percentage;
        $premiumAnnualProPercentage = AnnualProfit::findOrFail(4)->percentage;

        return view('pages.account', compact(
            'miniPercentage',
            'standardPercentage',
            'premiumPercentage',
            'premiumProPercentage',
            'miniAnnualPercentage',
            'standardAnnualPercentage',
            'premiumAnnualPercentage',
            'premiumAnnualProPercentage',
            'cfiPercentage'
        ));
    }

    public function awards()
    {
        return view('pages.awards');
    }

    public function contactUs()
    {
        return view('pages.contact');
    }

    public function ourStory()
    {
        return view('pages.our_story');
    }

    public function history()
    {
        return view('pages.history');
    }

    public function riskWarning()
    {
        return view('pages.risk');
    }

    public function whyCFI()
    {
        return view('pages.whyCFI');
    }

    public function sendEmail(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string',
            'message' => 'required|string',
            'name' => 'required|string'
        ]);

        $contact = $request->all();

        Mail::to($contact->email)->send(new ContactMail($contact));

        Flash::success('Email was sent successfully. we will get back to you');

        return redirect()->back();
    }

    public function termsAndConditons()
    {
        $terms = TermsAndConditions::find(2);
        return view('pages.terms', ['terms' => $terms]);
    }
}