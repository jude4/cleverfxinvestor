<?php

namespace App\Http\Controllers;

use IlCleme\Cryptocurrencies\Gateways\Cryptocompare\CryptocomparePriceGateway;
use IlCleme\Cryptocurrencies\Gateways\Coinmarketcap\CoinmarketcapGateway;
use Illuminate\Http\Request;

class CryptoController extends Controller
{
   public function ExchangeLifePrice()
   {
       return view('crypto.price');
   }


    public function ExchangeDarkFluid()
    {
        return view('crypto.exchange-dark-fluid');  
    }
    public function ExchangeDarkTicker()
    {
        return view('crypto.exchange-dark-ticker');
    }
    public function ExchangeDark()
    {
        return view('crypto.exchange-dark');
    }
    public function HeartMap()
    {
        return view('crypto.heart-map');
    }
    public function MarketCapitalBsr()
    {
        return view('crypto.market-capital-bsr');
    }
    public function MarketCapitalDark()
    {
        return view('crypto.market-capital-dark');
    }
    public function MarketCryptoDark()
    {
        return view('crypto.market-crypto-dark');
    }
    public function MarketoverviewDark()
    {
        return view('crypto.market-overview-dark');
    }
    public function MarketscreenerDark()
    {
        return view('crypto.market-screener-dark');
    }
    public function MarketDark()
    {
        return view('crypto.markets-dark');
    }
    public function SymbolInfoDark()
    {
        return view('crypto.symbol-info-dark');
    }
    public function TechnicalAnalysisDark()
    {
        return view('crypto.echnical-analysis-dark');
    }
}
