
@extends('layouts.main')

@section('content')


  <div class="markets ptb70">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="markets-container">
            <div class="markets-content">
              <h2>BTC Index</h2>
              <p>7340.65</p>
              <span class="green">+0.45%</span>
            </div>
            <div class="markets-chart">
              <div id="marketsChartBtcDark"></div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="markets-container">
            <div class="markets-content">
              <h2>ETH Index</h2>
              <p>146.58</p>
              <span class="red">-5.09%</span>
            </div>
            <div class="markets-chart">
              <div id="marketsChartEthDark"></div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="markets-container">
            <div class="markets-content">
              <h2>LTC Index</h2>
              <p>44.49</p>
              <span class="green">+2.14%</span>
            </div>
            <div class="markets-chart">
              <div id="marketsChartLtcDark"></div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="markets-pair-list">
            <ul class="nav nav-pills" id="pills-tab" role="tablist">

              <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#STAR" role="tab" aria-selected="false"><i
                    class="icon ion-md-star"></i> Favorites</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" data-toggle="pill" href="#BTC" role="tab" aria-selected="true">BTC</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#KCS" role="tab" aria-selected="true">KCS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#USDT" role="tab" aria-selected="true">USDT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#ALTS" role="tab" aria-selected="true">ALTS</a>
              </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane fade show" id="STAR" role="tabpanel">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Pairs</th>
                      <th>Coin</th>
                      <th>Last Price</th>
                      <th>Change (24H)</th>
                      <th>High (24H)</th>
                      <th>Low (24h)</th>
                      <th>Volume (24h)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> ETH/BTC</td>
                      <td><img src="assets/img/icon/1.png" alt="eth"> ETH</td>
                      <td>7394.06</td>
                      <td class="green">+0.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.77</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> EOS/BTC</td>
                      <td><img src="assets/img/icon/2.png" alt="vid"> EOS</td>
                      <td>6984.06</td>
                      <td class="red">-1.65%</td>
                      <td>6554.91</td>
                      <td>6548.06</td>
                      <td>431,684,298.45</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> LTC/BTC</td>
                      <td><img src="assets/img/icon/3.png" alt="bitcoin"> LTC</td>
                      <td>4582.06</td>
                      <td class="green">+2.62%</td>
                      <td>7444.91</td>
                      <td>4646.06</td>
                      <td>431,687,258.23</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> KCS/BTC</td>
                      <td><img src="assets/img/icon/4.png" alt="bitcoin"> KCS</td>
                      <td>7394.06</td>
                      <td class="red">-0.94%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.33</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> COTI/BTC</td>
                      <td><img src="assets/img/icon/5.png" alt="bitcoin"> COTI</td>
                      <td>7394.06</td>
                      <td class="green">+0.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.53</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> TRX/BTC</td>
                      <td><img src="assets/img/icon/6.png" alt="bitcoin"> TRX</td>
                      <td>7394.06</td>
                      <td class="green">+0.71%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.53</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> XMR/BTC</td>
                      <td><img src="assets/img/icon/7.png" alt="bitcoin"> XMR</td>
                      <td>7394.06</td>
                      <td class="red">-0.73%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.77</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> ADA/BTC</td>
                      <td><img src="assets/img/icon/8.png" alt="bitcoin"> ADA</td>
                      <td>7394.06</td>
                      <td class="red">-1.20%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.35</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> BNB/BTC</td>
                      <td><img src="assets/img/icon/9.png" alt="bitcoin"> BNB</td>
                      <td>7394.06</td>
                      <td class="green">+0.74%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.23</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> NEO/BTC</td>
                      <td><img src="assets/img/icon/10.png" alt="bitcoin"> NEO</td>
                      <td>7394.06</td>
                      <td class="red">-0.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.77</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="tab-pane fade show active" id="BTC" role="tabpanel">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Pairs</th>
                      <th>Coin</th>
                      <th>Last Price</th>
                      <th>Change (24H)</th>
                      <th>High (24H)</th>
                      <th>Low (24h)</th>
                      <th>Volume (24h)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> ETH/BTC</td>
                      <td><img src="assets/img/icon/1.png" alt="eth"> ETH</td>
                      <td>7394.06</td>
                      <td class="green">+0.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.77</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> EOS/BTC</td>
                      <td><img src="assets/img/icon/2.png" alt="vid"> EOS</td>
                      <td>6984.06</td>
                      <td class="red">-1.65%</td>
                      <td>6554.91</td>
                      <td>6548.06</td>
                      <td>431,684,298.45</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> LTC/BTC</td>
                      <td><img src="assets/img/icon/3.png" alt="bitcoin"> LTC</td>
                      <td>4582.06</td>
                      <td class="green">+2.62%</td>
                      <td>7444.91</td>
                      <td>4646.06</td>
                      <td>431,687,258.23</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> KCS/BTC</td>
                      <td><img src="assets/img/icon/4.png" alt="bitcoin"> KCS</td>
                      <td>7394.06</td>
                      <td class="red">-0.94%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.33</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> COTI/BTC</td>
                      <td><img src="assets/img/icon/5.png" alt="bitcoin"> COTI</td>
                      <td>7394.06</td>
                      <td class="green">+0.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.53</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> TRX/BTC</td>
                      <td><img src="assets/img/icon/6.png" alt="bitcoin"> TRX</td>
                      <td>7394.06</td>
                      <td class="green">+0.71%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.53</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> XMR/BTC</td>
                      <td><img src="assets/img/icon/7.png" alt="bitcoin"> XMR</td>
                      <td>7394.06</td>
                      <td class="red">-0.73%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.77</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> ADA/BTC</td>
                      <td><img src="assets/img/icon/8.png" alt="bitcoin"> ADA</td>
                      <td>7394.06</td>
                      <td class="red">-1.20%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.35</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> BNB/BTC</td>
                      <td><img src="assets/img/icon/9.png" alt="bitcoin"> BNB</td>
                      <td>7394.06</td>
                      <td class="green">+0.74%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.23</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> NEO/BTC</td>
                      <td><img src="assets/img/icon/10.png" alt="bitcoin"> NEO</td>
                      <td>7394.06</td>
                      <td class="red">-0.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.77</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> TOMO/BTC</td>
                      <td><img src="assets/img/icon/11.png" alt="bitcoin"> TOMO</td>
                      <td>7394.06</td>
                      <td class="red">-4.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.33</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> MKR/BTC</td>
                      <td><img src="assets/img/icon/12.png" alt="bitcoin"> MKR</td>
                      <td>7394.06</td>
                      <td class="green">+0.32%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.14</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> ZEC/BTC</td>
                      <td><img src="assets/img/icon/13.png" alt="bitcoin"> ZEC</td>
                      <td>7394.06</td>
                      <td class="green">+5.53%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.22</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> VSYS/BTC</td>
                      <td><img src="assets/img/icon/14.png" alt="bitcoin"> VSYS</td>
                      <td>7394.06</td>
                      <td class="red">-3.52%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.35</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> ATOM/BTC</td>
                      <td><img src="assets/img/icon/15.png" alt="bitcoin"> ATOM</td>
                      <td>7394.06</td>
                      <td class="red">-2.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.21</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> MTV/BTC</td>
                      <td><img src="assets/img/icon/16.png" alt="bitcoin"> MTV</td>
                      <td>7394.06</td>
                      <td class="green">+1.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.32</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> XTZ/BTC</td>
                      <td><img src="assets/img/icon/17.png" alt="bitcoin"> XTZ</td>
                      <td>7394.06</td>
                      <td class="red">-3.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.25</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="tab-pane fade show" id="KCS" role="tabpanel">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Pairs</th>
                      <th>Coin</th>
                      <th>Last Price</th>
                      <th>Change (24H)</th>
                      <th>High (24H)</th>
                      <th>Low (24h)</th>
                      <th>Volume (24h)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> ETH/KCS</td>
                      <td><img src="assets/img/icon/1.png" alt="eth"> ETH</td>
                      <td>7394.06</td>
                      <td class="green">+0.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.77</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> EOS/KCS</td>
                      <td><img src="assets/img/icon/2.png" alt="vid"> EOS</td>
                      <td>6984.06</td>
                      <td class="red">-1.65%</td>
                      <td>6554.91</td>
                      <td>6548.06</td>
                      <td>431,684,298.45</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> LTC/KCS</td>
                      <td><img src="assets/img/icon/3.png" alt="bitcoin"> LTC</td>
                      <td>4582.06</td>
                      <td class="green">+2.62%</td>
                      <td>7444.91</td>
                      <td>4646.06</td>
                      <td>431,687,258.23</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> KCS/KCS</td>
                      <td><img src="assets/img/icon/4.png" alt="bitcoin"> KCS</td>
                      <td>7394.06</td>
                      <td class="red">-0.94%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.33</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> COTI/KCS</td>
                      <td><img src="assets/img/icon/5.png" alt="bitcoin"> COTI</td>
                      <td>7394.06</td>
                      <td class="green">+0.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.53</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> TRX/KCS</td>
                      <td><img src="assets/img/icon/6.png" alt="bitcoin"> TRX</td>
                      <td>7394.06</td>
                      <td class="green">+0.71%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.53</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> XMR/KCS</td>
                      <td><img src="assets/img/icon/7.png" alt="bitcoin"> XMR</td>
                      <td>7394.06</td>
                      <td class="red">-0.73%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.77</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> ADA/KCS</td>
                      <td><img src="assets/img/icon/8.png" alt="bitcoin"> ADA</td>
                      <td>7394.06</td>
                      <td class="red">-1.20%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.35</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> BNB/KCS</td>
                      <td><img src="assets/img/icon/9.png" alt="bitcoin"> BNB</td>
                      <td>7394.06</td>
                      <td class="green">+0.74%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.23</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> NEO/KCS</td>
                      <td><img src="assets/img/icon/10.png" alt="bitcoin"> NEO</td>
                      <td>7394.06</td>
                      <td class="red">-0.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.77</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> TOMO/KCS</td>
                      <td><img src="assets/img/icon/11.png" alt="bitcoin"> TOMO</td>
                      <td>7394.06</td>
                      <td class="red">-4.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.33</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> MKR/KCS</td>
                      <td><img src="assets/img/icon/12.png" alt="bitcoin"> MKR</td>
                      <td>7394.06</td>
                      <td class="green">+0.32%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.14</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> ZEC/KCS</td>
                      <td><img src="assets/img/icon/13.png" alt="bitcoin"> ZEC</td>
                      <td>7394.06</td>
                      <td class="green">+5.53%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.22</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> VSYS/KCS</td>
                      <td><img src="assets/img/icon/14.png" alt="bitcoin"> VSYS</td>
                      <td>7394.06</td>
                      <td class="red">-3.52%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.35</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> ATOM/KCS</td>
                      <td><img src="assets/img/icon/15.png" alt="bitcoin"> ATOM</td>
                      <td>7394.06</td>
                      <td class="red">-2.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.21</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> MTV/KCS</td>
                      <td><img src="assets/img/icon/16.png" alt="bitcoin"> MTV</td>
                      <td>7394.06</td>
                      <td class="green">+1.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.32</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> XTZ/KCS</td>
                      <td><img src="assets/img/icon/17.png" alt="bitcoin"> XTZ</td>
                      <td>7394.06</td>
                      <td class="red">-3.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.25</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="tab-pane fade show" id="USDT" role="tabpanel">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Pairs</th>
                      <th>Coin</th>
                      <th>Last Price</th>
                      <th>Change (24H)</th>
                      <th>High (24H)</th>
                      <th>Low (24h)</th>
                      <th>Volume (24h)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> ETH/USDT</td>
                      <td><img src="assets/img/icon/1.png" alt="eth"> ETH</td>
                      <td>7394.06</td>
                      <td class="green">+0.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.77</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> EOS/USDT</td>
                      <td><img src="assets/img/icon/2.png" alt="vid"> EOS</td>
                      <td>6984.06</td>
                      <td class="red">-1.65%</td>
                      <td>6554.91</td>
                      <td>6548.06</td>
                      <td>431,684,298.45</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> LTC/USDT</td>
                      <td><img src="assets/img/icon/3.png" alt="bitcoin"> LTC</td>
                      <td>4582.06</td>
                      <td class="green">+2.62%</td>
                      <td>7444.91</td>
                      <td>4646.06</td>
                      <td>431,687,258.23</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> USDT/USDT</td>
                      <td><img src="assets/img/icon/4.png" alt="bitcoin"> USDT</td>
                      <td>7394.06</td>
                      <td class="red">-0.94%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.33</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> COTI/USDT</td>
                      <td><img src="assets/img/icon/5.png" alt="bitcoin"> COTI</td>
                      <td>7394.06</td>
                      <td class="green">+0.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.53</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> TRX/USDT</td>
                      <td><img src="assets/img/icon/6.png" alt="bitcoin"> TRX</td>
                      <td>7394.06</td>
                      <td class="green">+0.71%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.53</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> XMR/USDT</td>
                      <td><img src="assets/img/icon/7.png" alt="bitcoin"> XMR</td>
                      <td>7394.06</td>
                      <td class="red">-0.73%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.77</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> ADA/USDT</td>
                      <td><img src="assets/img/icon/8.png" alt="bitcoin"> ADA</td>
                      <td>7394.06</td>
                      <td class="red">-1.20%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.35</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> BNB/USDT</td>
                      <td><img src="assets/img/icon/9.png" alt="bitcoin"> BNB</td>
                      <td>7394.06</td>
                      <td class="green">+0.74%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.23</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> NEO/USDT</td>
                      <td><img src="assets/img/icon/10.png" alt="bitcoin"> NEO</td>
                      <td>7394.06</td>
                      <td class="red">-0.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.77</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> TOMO/USDT</td>
                      <td><img src="assets/img/icon/11.png" alt="bitcoin"> TOMO</td>
                      <td>7394.06</td>
                      <td class="red">-4.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.33</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> MKR/USDT</td>
                      <td><img src="assets/img/icon/12.png" alt="bitcoin"> MKR</td>
                      <td>7394.06</td>
                      <td class="green">+0.32%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.14</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> ZEC/USDT</td>
                      <td><img src="assets/img/icon/13.png" alt="bitcoin"> ZEC</td>
                      <td>7394.06</td>
                      <td class="green">+5.53%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.22</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> VSYS/USDT</td>
                      <td><img src="assets/img/icon/14.png" alt="bitcoin"> VSYS</td>
                      <td>7394.06</td>
                      <td class="red">-3.52%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.35</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> ATOM/USDT</td>
                      <td><img src="assets/img/icon/15.png" alt="bitcoin"> ATOM</td>
                      <td>7394.06</td>
                      <td class="red">-2.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.21</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> MTV/USDT</td>
                      <td><img src="assets/img/icon/16.png" alt="bitcoin"> MTV</td>
                      <td>7394.06</td>
                      <td class="green">+1.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.32</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> XTZ/USDT</td>
                      <td><img src="assets/img/icon/17.png" alt="bitcoin"> XTZ</td>
                      <td>7394.06</td>
                      <td class="red">-3.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.25</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="tab-pane fade show" id="ALTS" role="tabpanel">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Pairs</th>
                      <th>Coin</th>
                      <th>Last Price</th>
                      <th>Change (24H)</th>
                      <th>High (24H)</th>
                      <th>Low (24h)</th>
                      <th>Volume (24h)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> ETH/ALTS</td>
                      <td><img src="assets/img/icon/1.png" alt="eth"> ETH</td>
                      <td>7394.06</td>
                      <td class="green">+0.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.77</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> EOS/ALTS</td>
                      <td><img src="assets/img/icon/2.png" alt="vid"> EOS</td>
                      <td>6984.06</td>
                      <td class="red">-1.65%</td>
                      <td>6554.91</td>
                      <td>6548.06</td>
                      <td>431,684,298.45</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> LTC/ALTS</td>
                      <td><img src="assets/img/icon/3.png" alt="bitcoin"> LTC</td>
                      <td>4582.06</td>
                      <td class="green">+2.62%</td>
                      <td>7444.91</td>
                      <td>4646.06</td>
                      <td>431,687,258.23</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> ALTS/ALTS</td>
                      <td><img src="assets/img/icon/4.png" alt="bitcoin"> ALTS</td>
                      <td>7394.06</td>
                      <td class="red">-0.94%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.33</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> COTI/ALTS</td>
                      <td><img src="assets/img/icon/5.png" alt="bitcoin"> COTI</td>
                      <td>7394.06</td>
                      <td class="green">+0.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.53</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> TRX/ALTS</td>
                      <td><img src="assets/img/icon/6.png" alt="bitcoin"> TRX</td>
                      <td>7394.06</td>
                      <td class="green">+0.71%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.53</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> XMR/ALTS</td>
                      <td><img src="assets/img/icon/7.png" alt="bitcoin"> XMR</td>
                      <td>7394.06</td>
                      <td class="red">-0.73%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.77</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> ADA/ALTS</td>
                      <td><img src="assets/img/icon/8.png" alt="bitcoin"> ADA</td>
                      <td>7394.06</td>
                      <td class="red">-1.20%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.35</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> BNB/ALTS</td>
                      <td><img src="assets/img/icon/9.png" alt="bitcoin"> BNB</td>
                      <td>7394.06</td>
                      <td class="green">+0.74%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.23</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> NEO/ALTS</td>
                      <td><img src="assets/img/icon/10.png" alt="bitcoin"> NEO</td>
                      <td>7394.06</td>
                      <td class="red">-0.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.77</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> TOMO/ALTS</td>
                      <td><img src="assets/img/icon/11.png" alt="bitcoin"> TOMO</td>
                      <td>7394.06</td>
                      <td class="red">-4.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.33</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> MKR/ALTS</td>
                      <td><img src="assets/img/icon/12.png" alt="bitcoin"> MKR</td>
                      <td>7394.06</td>
                      <td class="green">+0.32%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.14</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> ZEC/ALTS</td>
                      <td><img src="assets/img/icon/13.png" alt="bitcoin"> ZEC</td>
                      <td>7394.06</td>
                      <td class="green">+5.53%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.22</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> VSYS/ALTS</td>
                      <td><img src="assets/img/icon/14.png" alt="bitcoin"> VSYS</td>
                      <td>7394.06</td>
                      <td class="red">-3.52%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.35</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> ATOM/ALTS</td>
                      <td><img src="assets/img/icon/15.png" alt="bitcoin"> ATOM</td>
                      <td>7394.06</td>
                      <td class="red">-2.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.21</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> MTV/ALTS</td>
                      <td><img src="assets/img/icon/16.png" alt="bitcoin"> MTV</td>
                      <td>7394.06</td>
                      <td class="green">+1.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.32</td>
                    </tr>
                    <tr data-href="exchange-dark.html">
                      <td><i class="icon ion-md-star"></i> XTZ/ALTS</td>
                      <td><img src="assets/img/icon/17.png" alt="bitcoin"> XTZ</td>
                      <td>7394.06</td>
                      <td class="red">-3.78%</td>
                      <td>7444.91</td>
                      <td>7267.06</td>
                      <td>431,687,258.25</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="text-center">
              <a href="#" class="load-more btn">Load More <i class="icon ion-md-arrow-down"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection


@section('script')
  <script src="assets/js/jquery-3.4.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/amcharts-core.min.js"></script>
  <script src="assets/js/amcharts.min.js"></script>
  <script src="assets/js/custom.js"></script>
@endsection
