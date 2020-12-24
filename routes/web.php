<?php

use App\Http\Livewire\OtherTransactionHistory;
use Illuminate\Support\Facades\Route;



Route::get('/', 'PageController@home');

Route::post('/email', 'PageController@sendEmail');


Route::get('/about-us', 'PageController@aboutUs');
Route::get('/why-CFI', 'PageController@whyCFI');
Route::get('/abuse-warning', 'PageController@riskWarning');
Route::get('/management', 'PageController@ourStory');
Route::get('/history', 'PageController@history');
Route::get('/contact-us', 'PageController@contactUs');
Route::get('/account-type', 'PageController@accountType');
Route::get('/how-it-works', 'PageController@howItWorks');
Route::get('/security-of-funds', 'PageController@securityOfFund');
Route::get('/frequently-asked-questions', 'PageController@faq')->name('faq');
Route::get('/terms-and-conditions', 'PageController@termsAndConditons');

Route::get('/introduction', 'PageController@introduction')->name('introduction');
Route::get('/beginner-education', 'PageController@beginner')->name('beginner');
Route::get('/finacial-news-analysis', 'PageController@finacial')->name('finacial');
Route::get('/advance-course-and-metatrader4&5-training', 'PageController@advance')->name('advance');
Route::get('/awards', 'PageController@awards');

Route::resource('videos', 'VideoController');
Route::resource('gallery', 'GalleryController');
Route::resource('reviews', 'ReviewController');


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/users/block/{id}', 'UserController@checkBlock');
    Route::post('/users/create-account', 'UserController@createNewAccount');
    Route::get('/users-credentials/confirm/{id}', 'UserCredentialController@confirmCredential');
    Route::resource('users-credentials', 'UserCredentialController');
    Route::resource('credentials', 'CredentialController');
    Route::get('/edit-emails', 'CustomController@editEmails');
    Route::resource('phone-number', 'CompanyPhoneNumberController');
    Route::resource('downlines', 'DownlineController');
    Route::get('/dashboard', 'HomeController@index');
    Route::resource('user_wallets', 'UsersWalletController');
    Route::get('account', 'HomeController@account');
    Route::get('/sent-messages', 'CustomController@sentMessages');
    Route::delete('custom/delete/{id}', 'CustomController@deleteMessage')->name('custom.delete');

    Route::get('users/mini-investors', 'InvestorController@miniInvestor');
    Route::get('users/standard-investors', 'InvestorController@standardInvestor');
    Route::get('users/premium-investors', 'InvestorController@premiumInvestor');
    Route::get('users/premium-pro-investors', 'InvestorController@premiumProInvestor');

    Route::resource('/transfer-funds', 'TransferFundController');
    Route::resource('other-transactions', 'OtherTransactionController');
    Route::get('/newsletter/emails', 'NewsletterController@sendEmail');

    Route::get('sendmail', 'CustomController@index');

    Route::post('/send/custom/mail', 'CustomController@sendCustomMail');

    Route::post('upload_proof/{id?}', 'DepositeController@uploadPaymentProof');

    Route::get('update_profile', 'HomeController@updateProfile');
    Route::post('update_profile/store', 'HomeController@storeUpdatedProfile');

    Route::get('transactions/status/{id}', 'TransactionController@status');
    Route::resource('deposit', 'DepositeController');
    Route::get('wallets', 'WalletController@index');
    Route::post('users/profile', 'UserController@updateProfile');
    Route::resource('users', 'UserController');
    Route::get('referral', 'HomeController@myReferralList');

    Route::resource('transactions', 'TransactionController');

    Route::resource('accounts', 'AccountController');

    Route::get('withdraw', 'HomeController@withdraw');
    Route::post('withdraw/store', 'HomeController@makeWithdraw');
    Route::post('withdraw/bonus', 'HomeController@withdrawBonus');
    Route::resource('fAQS', 'FAQController');
    Route::resource('conditions', 'TermsAndConditionsController');

    Route::post('miscellenous/update', 'MiscellenousController@update');
    Route::resource('miscellenous', 'MiscellenousController');

    Route::post('withdrawal/interval', 'WithdrawalIntervalController@store');
    Route::get('withdrawal-interval', 'WithdrawalIntervalController@index')->name('withdrawal-interval.index');
});



Route::get('/live-price', 'CryptoController@ExchangeLifePrice');
Route::get('/exchange-dark-fluid', 'CryptoController@ExchangeDarkFluid');
Route::get('/exchange-dark-ticker', 'CryptoController@ExchangeDarkTicker');
Route::get('/exchange-dark', 'CryptoController@ExchangeDark');
Route::get('/heart-map', 'CryptoController@HeartMap');
Route::get('/market-capital-bsr', 'CryptoController@MarketCapitalBsr');
Route::get('/market-capital-dark', 'CryptoController@MarketCapitalDark');
Route::get('/market-crypto-dark', 'CryptoController@MarketCryptoDark');
Route::get('/market-overview-dark', 'CryptoController@MarketoverviewDark');
Route::get('/market-screener-dark', 'CryptoController@MarketscreenerDark');
Route::get('/markets-dark', 'CryptoController@MarketDark');
Route::get('/symbol-info-dark', 'CryptoController@SymbolInfoDark');
Route::get('/technical-analysis-dark', 'CryptoController@TechnicalAnalysisDark');


Route::resource('newsletters', 'NewsletterController');

Auth::routes(['verify' => true]);