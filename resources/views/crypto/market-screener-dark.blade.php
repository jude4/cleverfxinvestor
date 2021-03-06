@extends('layouts.main')

@section('content')


  <div class="container-fluid mtb15">
    <div class="row">
      <div class="col-md-12">
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
          <div class="tradingview-widget-container__widget"></div>
          <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js"
            async>
              {
                "width": "100%",
                  "height": 900,
                    "defaultColumn": "overview",
                      "defaultScreen": "general",
                        "market": "crypto",
                          "showToolbar": true,
                            "colorTheme": "dark",
                              "locale": "en"
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
  <script src="assets/js/custom.js"></script>
@endsection
