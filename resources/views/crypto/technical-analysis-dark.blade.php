
@extends('layouts.main')

@section('content')

  <div class="container-fluid mtb15 technical-analysis">
    <div class="row">
      <div class="col-md-4">
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
          <div class="tradingview-widget-container__widget"></div>
          <script type="text/javascript"
            src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
              {
                "interval": "1m",
                  "width": "100%",
                    "isTransparent": false,
                      "height": 430,
                        "symbol": "COINBASE:BTCUSD",
                          "showIntervalTabs": true,
                            "locale": "en",
                              "colorTheme": "dark"
              }
            </script>
        </div>
        <!-- TradingView Widget END -->
      </div>
      <div class="col-md-4">
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
          <div class="tradingview-widget-container__widget"></div>
          <script type="text/javascript"
            src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
              {
                "interval": "1m",
                  "width": "100%",
                    "isTransparent": false,
                      "height": 430,
                        "symbol": "BINANCE:BTCUSDT",
                          "showIntervalTabs": true,
                            "locale": "en",
                              "colorTheme": "dark"
              }
            </script>
        </div>
        <!-- TradingView Widget END -->
      </div>
      <div class="col-md-4">
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
          <div class="tradingview-widget-container__widget"></div>
          <script type="text/javascript"
            src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
              {
                "interval": "1m",
                  "width": "100%",
                    "isTransparent": false,
                      "height": 430,
                        "symbol": "FX:GBPJPY",
                          "showIntervalTabs": true,
                            "locale": "en",
                              "colorTheme": "dark"
              }
            </script>
        </div>
        <!-- TradingView Widget END -->
      </div>
      <div class="col-md-4">
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
          <div class="tradingview-widget-container__widget"></div>
          <script type="text/javascript"
            src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
              {
                "interval": "1m",
                  "width": "100%",
                    "isTransparent": false,
                      "height": 430,
                        "symbol": "FX:USDCAD",
                          "showIntervalTabs": true,
                            "locale": "en",
                              "colorTheme": "dark"
              }
            </script>
        </div>
        <!-- TradingView Widget END -->
      </div>
      <div class="col-md-4">
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
          <div class="tradingview-widget-container__widget"></div>
          <script type="text/javascript"
            src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
              {
                "interval": "1m",
                  "width": "100%",
                    "isTransparent": false,
                      "height": 430,
                        "symbol": "FX:AUDUSD",
                          "showIntervalTabs": true,
                            "locale": "en",
                              "colorTheme": "dark"
              }
            </script>
        </div>
        <!-- TradingView Widget END -->
      </div>
      <div class="col-md-4">
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
          <div class="tradingview-widget-container__widget"></div>
          <script type="text/javascript"
            src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
              {
                "interval": "1m",
                  "width": "100%",
                    "isTransparent": false,
                      "height": 430,
                        "symbol": "OANDA:GBPUSD",
                          "showIntervalTabs": true,
                            "locale": "en",
                              "colorTheme": "dark"
              }
            </script>
        </div>
        <!-- TradingView Widget END -->
      </div>
      <div class="col-md-4">
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
          <div class="tradingview-widget-container__widget"></div>
          <script type="text/javascript"
            src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
              {
                "interval": "1m",
                  "width": "100%",
                    "isTransparent": false,
                      "height": 430,
                        "symbol": "NASDAQ:AAPL",
                          "showIntervalTabs": true,
                            "locale": "en",
                              "colorTheme": "dark"
              }
            </script>
        </div>
        <!-- TradingView Widget END -->
      </div>
      <div class="col-md-4">
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
          <div class="tradingview-widget-container__widget"></div>
          <script type="text/javascript"
            src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
              {
                "interval": "1m",
                  "width": "100%",
                    "isTransparent": false,
                      "height": 430,
                        "symbol": "FX:USDCHF",
                          "showIntervalTabs": true,
                            "locale": "en",
                              "colorTheme": "dark"
              }
            </script>
        </div>
        <!-- TradingView Widget END -->
      </div>
      <div class="col-md-4">
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
          <div class="tradingview-widget-container__widget"></div>
          <script type="text/javascript"
            src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
              {
                "interval": "1m",
                  "width": "100%",
                    "isTransparent": false,
                      "height": 430,
                        "symbol": "FX:GBPAUD",
                          "showIntervalTabs": true,
                            "locale": "en",
                              "colorTheme": "dark"
              }
            </script>
        </div>
        <!-- TradingView Widget END -->
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
  <script src="assets/js/Chart.bundle.min.js"></script>
  <script src="assets/js/custom.js"></script>
@endsection