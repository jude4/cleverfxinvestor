
@extends('layouts.main')

@section('content')

  <div class="container-fluid mtb15 markets-overview">
    <div class="row">
      <div class="col-md-4">
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
          <div class="tradingview-widget-container__widget"></div>
          <script type="text/javascript"
            src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
              {
                "colorTheme": "dark",
                  "dateRange": "1d",
                    "showChart": true,
                      "locale": "en",
                        "largeChartUrl": "",
                          "isTransparent": false,
                            "width": "100%",
                              "height": "660",
                                "plotLineColorGrowing": "rgba(25, 118, 210, 1)",
                                  "plotLineColorFalling": "rgba(25, 118, 210, 1)",
                                    "gridLineColor": "rgba(42, 46, 57, 1)",
                                      "scaleFontColor": "rgba(120, 123, 134, 1)",
                                        "belowLineFillColorGrowing": "rgba(33, 150, 243, 0.12)",
                                          "belowLineFillColorFalling": "rgba(33, 150, 243, 0.12)",
                                            "symbolActiveColor": "rgba(33, 150, 243, 0.12)",
                                              "tabs": [
                                                {
                                                  "title": "Indices",
                                                  "symbols": [
                                                    {
                                                      "s": "FOREXCOM:SPXUSD",
                                                      "d": "S&P 500"
                                                    },
                                                    {
                                                      "s": "FOREXCOM:NSXUSD",
                                                      "d": "Nasdaq 100"
                                                    },
                                                    {
                                                      "s": "FOREXCOM:DJI",
                                                      "d": "Dow 30"
                                                    },
                                                    {
                                                      "s": "INDEX:NKY",
                                                      "d": "Nikkei 225"
                                                    },
                                                    {
                                                      "s": "INDEX:DEU30",
                                                      "d": "DAX Index"
                                                    },
                                                    {
                                                      "s": "FOREXCOM:UKXGBP",
                                                      "d": "FTSE 100"
                                                    }
                                                  ],
                                                  "originalTitle": "Indices"
                                                },
                                                {
                                                  "title": "Commodities",
                                                  "symbols": [
                                                    {
                                                      "s": "CME_MINI:ES1!",
                                                      "d": "E-Mini S&P"
                                                    },
                                                    {
                                                      "s": "CME:6E1!",
                                                      "d": "Euro"
                                                    },
                                                    {
                                                      "s": "COMEX:GC1!",
                                                      "d": "Gold"
                                                    },
                                                    {
                                                      "s": "NYMEX:CL1!",
                                                      "d": "Crude Oil"
                                                    },
                                                    {
                                                      "s": "NYMEX:NG1!",
                                                      "d": "Natural Gas"
                                                    },
                                                    {
                                                      "s": "CBOT:ZC1!",
                                                      "d": "Corn"
                                                    }
                                                  ],
                                                  "originalTitle": "Commodities"
                                                },
                                                {
                                                  "title": "Bonds",
                                                  "symbols": [
                                                    {
                                                      "s": "CME:GE1!",
                                                      "d": "Eurodollar"
                                                    },
                                                    {
                                                      "s": "CBOT:ZB1!",
                                                      "d": "T-Bond"
                                                    },
                                                    {
                                                      "s": "CBOT:UB1!",
                                                      "d": "Ultra T-Bond"
                                                    },
                                                    {
                                                      "s": "EUREX:FGBL1!",
                                                      "d": "Euro Bund"
                                                    },
                                                    {
                                                      "s": "EUREX:FBTP1!",
                                                      "d": "Euro BTP"
                                                    },
                                                    {
                                                      "s": "EUREX:FGBM1!",
                                                      "d": "Euro BOBL"
                                                    }
                                                  ],
                                                  "originalTitle": "Bonds"
                                                },
                                                {
                                                  "title": "Forex",
                                                  "symbols": [
                                                    {
                                                      "s": "FX:EURUSD"
                                                    },
                                                    {
                                                      "s": "FX:GBPUSD"
                                                    },
                                                    {
                                                      "s": "FX:USDJPY"
                                                    },
                                                    {
                                                      "s": "FX:USDCHF"
                                                    },
                                                    {
                                                      "s": "FX:AUDUSD"
                                                    },
                                                    {
                                                      "s": "FX:USDCAD"
                                                    }
                                                  ],
                                                  "originalTitle": "Forex"
                                                }
                                              ]
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
            src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
              {
                "colorTheme": "dark",
                  "dateRange": "1m",
                    "showChart": true,
                      "locale": "en",
                        "largeChartUrl": "",
                          "isTransparent": false,
                            "width": "100%",
                              "height": "660",
                                "plotLineColorGrowing": "rgba(25, 118, 210, 1)",
                                  "plotLineColorFalling": "rgba(25, 118, 210, 1)",
                                    "gridLineColor": "rgba(42, 46, 57, 1)",
                                      "scaleFontColor": "rgba(120, 123, 134, 1)",
                                        "belowLineFillColorGrowing": "rgba(33, 150, 243, 0.12)",
                                          "belowLineFillColorFalling": "rgba(33, 150, 243, 0.12)",
                                            "symbolActiveColor": "rgba(33, 150, 243, 0.12)",
                                              "tabs": [
                                                {
                                                  "title": "Indices",
                                                  "symbols": [
                                                    {
                                                      "s": "FOREXCOM:SPXUSD",
                                                      "d": "S&P 500"
                                                    },
                                                    {
                                                      "s": "FOREXCOM:NSXUSD",
                                                      "d": "Nasdaq 100"
                                                    },
                                                    {
                                                      "s": "FOREXCOM:DJI",
                                                      "d": "Dow 30"
                                                    },
                                                    {
                                                      "s": "INDEX:NKY",
                                                      "d": "Nikkei 225"
                                                    },
                                                    {
                                                      "s": "INDEX:DEU30",
                                                      "d": "DAX Index"
                                                    },
                                                    {
                                                      "s": "FOREXCOM:UKXGBP",
                                                      "d": "FTSE 100"
                                                    }
                                                  ],
                                                  "originalTitle": "Indices"
                                                },
                                                {
                                                  "title": "Commodities",
                                                  "symbols": [
                                                    {
                                                      "s": "CME_MINI:ES1!",
                                                      "d": "E-Mini S&P"
                                                    },
                                                    {
                                                      "s": "CME:6E1!",
                                                      "d": "Euro"
                                                    },
                                                    {
                                                      "s": "COMEX:GC1!",
                                                      "d": "Gold"
                                                    },
                                                    {
                                                      "s": "NYMEX:CL1!",
                                                      "d": "Crude Oil"
                                                    },
                                                    {
                                                      "s": "NYMEX:NG1!",
                                                      "d": "Natural Gas"
                                                    },
                                                    {
                                                      "s": "CBOT:ZC1!",
                                                      "d": "Corn"
                                                    }
                                                  ],
                                                  "originalTitle": "Commodities"
                                                },
                                                {
                                                  "title": "Bonds",
                                                  "symbols": [
                                                    {
                                                      "s": "CME:GE1!",
                                                      "d": "Eurodollar"
                                                    },
                                                    {
                                                      "s": "CBOT:ZB1!",
                                                      "d": "T-Bond"
                                                    },
                                                    {
                                                      "s": "CBOT:UB1!",
                                                      "d": "Ultra T-Bond"
                                                    },
                                                    {
                                                      "s": "EUREX:FGBL1!",
                                                      "d": "Euro Bund"
                                                    },
                                                    {
                                                      "s": "EUREX:FBTP1!",
                                                      "d": "Euro BTP"
                                                    },
                                                    {
                                                      "s": "EUREX:FGBM1!",
                                                      "d": "Euro BOBL"
                                                    }
                                                  ],
                                                  "originalTitle": "Bonds"
                                                },
                                                {
                                                  "title": "Forex",
                                                  "symbols": [
                                                    {
                                                      "s": "FX:EURUSD"
                                                    },
                                                    {
                                                      "s": "FX:GBPUSD"
                                                    },
                                                    {
                                                      "s": "FX:USDJPY"
                                                    },
                                                    {
                                                      "s": "FX:USDCHF"
                                                    },
                                                    {
                                                      "s": "FX:AUDUSD"
                                                    },
                                                    {
                                                      "s": "FX:USDCAD"
                                                    }
                                                  ],
                                                  "originalTitle": "Forex"
                                                }
                                              ]
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
            src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
              {
                "colorTheme": "dark",
                  "dateRange": "3m",
                    "showChart": true,
                      "locale": "en",
                        "largeChartUrl": "",
                          "isTransparent": false,
                            "width": "100%",
                              "height": "660",
                                "plotLineColorGrowing": "rgba(25, 118, 210, 1)",
                                  "plotLineColorFalling": "rgba(25, 118, 210, 1)",
                                    "gridLineColor": "rgba(42, 46, 57, 1)",
                                      "scaleFontColor": "rgba(120, 123, 134, 1)",
                                        "belowLineFillColorGrowing": "rgba(33, 150, 243, 0.12)",
                                          "belowLineFillColorFalling": "rgba(33, 150, 243, 0.12)",
                                            "symbolActiveColor": "rgba(33, 150, 243, 0.12)",
                                              "tabs": [
                                                {
                                                  "title": "Indices",
                                                  "symbols": [
                                                    {
                                                      "s": "FOREXCOM:SPXUSD",
                                                      "d": "S&P 500"
                                                    },
                                                    {
                                                      "s": "FOREXCOM:NSXUSD",
                                                      "d": "Nasdaq 100"
                                                    },
                                                    {
                                                      "s": "FOREXCOM:DJI",
                                                      "d": "Dow 30"
                                                    },
                                                    {
                                                      "s": "INDEX:NKY",
                                                      "d": "Nikkei 225"
                                                    },
                                                    {
                                                      "s": "INDEX:DEU30",
                                                      "d": "DAX Index"
                                                    },
                                                    {
                                                      "s": "FOREXCOM:UKXGBP",
                                                      "d": "FTSE 100"
                                                    }
                                                  ],
                                                  "originalTitle": "Indices"
                                                },
                                                {
                                                  "title": "Commodities",
                                                  "symbols": [
                                                    {
                                                      "s": "CME_MINI:ES1!",
                                                      "d": "E-Mini S&P"
                                                    },
                                                    {
                                                      "s": "CME:6E1!",
                                                      "d": "Euro"
                                                    },
                                                    {
                                                      "s": "COMEX:GC1!",
                                                      "d": "Gold"
                                                    },
                                                    {
                                                      "s": "NYMEX:CL1!",
                                                      "d": "Crude Oil"
                                                    },
                                                    {
                                                      "s": "NYMEX:NG1!",
                                                      "d": "Natural Gas"
                                                    },
                                                    {
                                                      "s": "CBOT:ZC1!",
                                                      "d": "Corn"
                                                    }
                                                  ],
                                                  "originalTitle": "Commodities"
                                                },
                                                {
                                                  "title": "Bonds",
                                                  "symbols": [
                                                    {
                                                      "s": "CME:GE1!",
                                                      "d": "Eurodollar"
                                                    },
                                                    {
                                                      "s": "CBOT:ZB1!",
                                                      "d": "T-Bond"
                                                    },
                                                    {
                                                      "s": "CBOT:UB1!",
                                                      "d": "Ultra T-Bond"
                                                    },
                                                    {
                                                      "s": "EUREX:FGBL1!",
                                                      "d": "Euro Bund"
                                                    },
                                                    {
                                                      "s": "EUREX:FBTP1!",
                                                      "d": "Euro BTP"
                                                    },
                                                    {
                                                      "s": "EUREX:FGBM1!",
                                                      "d": "Euro BOBL"
                                                    }
                                                  ],
                                                  "originalTitle": "Bonds"
                                                },
                                                {
                                                  "title": "Forex",
                                                  "symbols": [
                                                    {
                                                      "s": "FX:EURUSD"
                                                    },
                                                    {
                                                      "s": "FX:GBPUSD"
                                                    },
                                                    {
                                                      "s": "FX:USDJPY"
                                                    },
                                                    {
                                                      "s": "FX:USDCHF"
                                                    },
                                                    {
                                                      "s": "FX:AUDUSD"
                                                    },
                                                    {
                                                      "s": "FX:USDCAD"
                                                    }
                                                  ],
                                                  "originalTitle": "Forex"
                                                }
                                              ]
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
            src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
              {
                "colorTheme": "dark",
                  "dateRange": "12m",
                    "showChart": true,
                      "locale": "en",
                        "largeChartUrl": "",
                          "isTransparent": false,
                            "width": "100%",
                              "height": "660",
                                "plotLineColorGrowing": "rgba(25, 118, 210, 1)",
                                  "plotLineColorFalling": "rgba(25, 118, 210, 1)",
                                    "gridLineColor": "rgba(42, 46, 57, 1)",
                                      "scaleFontColor": "rgba(120, 123, 134, 1)",
                                        "belowLineFillColorGrowing": "rgba(33, 150, 243, 0.12)",
                                          "belowLineFillColorFalling": "rgba(33, 150, 243, 0.12)",
                                            "symbolActiveColor": "rgba(33, 150, 243, 0.12)",
                                              "tabs": [
                                                {
                                                  "title": "Indices",
                                                  "symbols": [
                                                    {
                                                      "s": "FOREXCOM:SPXUSD",
                                                      "d": "S&P 500"
                                                    },
                                                    {
                                                      "s": "FOREXCOM:NSXUSD",
                                                      "d": "Nasdaq 100"
                                                    },
                                                    {
                                                      "s": "FOREXCOM:DJI",
                                                      "d": "Dow 30"
                                                    },
                                                    {
                                                      "s": "INDEX:NKY",
                                                      "d": "Nikkei 225"
                                                    },
                                                    {
                                                      "s": "INDEX:DEU30",
                                                      "d": "DAX Index"
                                                    },
                                                    {
                                                      "s": "FOREXCOM:UKXGBP",
                                                      "d": "FTSE 100"
                                                    }
                                                  ],
                                                  "originalTitle": "Indices"
                                                },
                                                {
                                                  "title": "Commodities",
                                                  "symbols": [
                                                    {
                                                      "s": "CME_MINI:ES1!",
                                                      "d": "E-Mini S&P"
                                                    },
                                                    {
                                                      "s": "CME:6E1!",
                                                      "d": "Euro"
                                                    },
                                                    {
                                                      "s": "COMEX:GC1!",
                                                      "d": "Gold"
                                                    },
                                                    {
                                                      "s": "NYMEX:CL1!",
                                                      "d": "Crude Oil"
                                                    },
                                                    {
                                                      "s": "NYMEX:NG1!",
                                                      "d": "Natural Gas"
                                                    },
                                                    {
                                                      "s": "CBOT:ZC1!",
                                                      "d": "Corn"
                                                    }
                                                  ],
                                                  "originalTitle": "Commodities"
                                                },
                                                {
                                                  "title": "Bonds",
                                                  "symbols": [
                                                    {
                                                      "s": "CME:GE1!",
                                                      "d": "Eurodollar"
                                                    },
                                                    {
                                                      "s": "CBOT:ZB1!",
                                                      "d": "T-Bond"
                                                    },
                                                    {
                                                      "s": "CBOT:UB1!",
                                                      "d": "Ultra T-Bond"
                                                    },
                                                    {
                                                      "s": "EUREX:FGBL1!",
                                                      "d": "Euro Bund"
                                                    },
                                                    {
                                                      "s": "EUREX:FBTP1!",
                                                      "d": "Euro BTP"
                                                    },
                                                    {
                                                      "s": "EUREX:FGBM1!",
                                                      "d": "Euro BOBL"
                                                    }
                                                  ],
                                                  "originalTitle": "Bonds"
                                                },
                                                {
                                                  "title": "Forex",
                                                  "symbols": [
                                                    {
                                                      "s": "FX:EURUSD"
                                                    },
                                                    {
                                                      "s": "FX:GBPUSD"
                                                    },
                                                    {
                                                      "s": "FX:USDJPY"
                                                    },
                                                    {
                                                      "s": "FX:USDCHF"
                                                    },
                                                    {
                                                      "s": "FX:AUDUSD"
                                                    },
                                                    {
                                                      "s": "FX:USDCAD"
                                                    }
                                                  ],
                                                  "originalTitle": "Forex"
                                                }
                                              ]
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
            src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
              {
                "colorTheme": "dark",
                  "dateRange": "60m",
                    "showChart": true,
                      "locale": "en",
                        "largeChartUrl": "",
                          "isTransparent": false,
                            "width": "100%",
                              "height": "660",
                                "plotLineColorGrowing": "rgba(25, 118, 210, 1)",
                                  "plotLineColorFalling": "rgba(25, 118, 210, 1)",
                                    "gridLineColor": "rgba(42, 46, 57, 1)",
                                      "scaleFontColor": "rgba(120, 123, 134, 1)",
                                        "belowLineFillColorGrowing": "rgba(33, 150, 243, 0.12)",
                                          "belowLineFillColorFalling": "rgba(33, 150, 243, 0.12)",
                                            "symbolActiveColor": "rgba(33, 150, 243, 0.12)",
                                              "tabs": [
                                                {
                                                  "title": "Indices",
                                                  "symbols": [
                                                    {
                                                      "s": "FOREXCOM:SPXUSD",
                                                      "d": "S&P 500"
                                                    },
                                                    {
                                                      "s": "FOREXCOM:NSXUSD",
                                                      "d": "Nasdaq 100"
                                                    },
                                                    {
                                                      "s": "FOREXCOM:DJI",
                                                      "d": "Dow 30"
                                                    },
                                                    {
                                                      "s": "INDEX:NKY",
                                                      "d": "Nikkei 225"
                                                    },
                                                    {
                                                      "s": "INDEX:DEU30",
                                                      "d": "DAX Index"
                                                    },
                                                    {
                                                      "s": "FOREXCOM:UKXGBP",
                                                      "d": "FTSE 100"
                                                    }
                                                  ],
                                                  "originalTitle": "Indices"
                                                },
                                                {
                                                  "title": "Commodities",
                                                  "symbols": [
                                                    {
                                                      "s": "CME_MINI:ES1!",
                                                      "d": "E-Mini S&P"
                                                    },
                                                    {
                                                      "s": "CME:6E1!",
                                                      "d": "Euro"
                                                    },
                                                    {
                                                      "s": "COMEX:GC1!",
                                                      "d": "Gold"
                                                    },
                                                    {
                                                      "s": "NYMEX:CL1!",
                                                      "d": "Crude Oil"
                                                    },
                                                    {
                                                      "s": "NYMEX:NG1!",
                                                      "d": "Natural Gas"
                                                    },
                                                    {
                                                      "s": "CBOT:ZC1!",
                                                      "d": "Corn"
                                                    }
                                                  ],
                                                  "originalTitle": "Commodities"
                                                },
                                                {
                                                  "title": "Bonds",
                                                  "symbols": [
                                                    {
                                                      "s": "CME:GE1!",
                                                      "d": "Eurodollar"
                                                    },
                                                    {
                                                      "s": "CBOT:ZB1!",
                                                      "d": "T-Bond"
                                                    },
                                                    {
                                                      "s": "CBOT:UB1!",
                                                      "d": "Ultra T-Bond"
                                                    },
                                                    {
                                                      "s": "EUREX:FGBL1!",
                                                      "d": "Euro Bund"
                                                    },
                                                    {
                                                      "s": "EUREX:FBTP1!",
                                                      "d": "Euro BTP"
                                                    },
                                                    {
                                                      "s": "EUREX:FGBM1!",
                                                      "d": "Euro BOBL"
                                                    }
                                                  ],
                                                  "originalTitle": "Bonds"
                                                },
                                                {
                                                  "title": "Forex",
                                                  "symbols": [
                                                    {
                                                      "s": "FX:EURUSD"
                                                    },
                                                    {
                                                      "s": "FX:GBPUSD"
                                                    },
                                                    {
                                                      "s": "FX:USDJPY"
                                                    },
                                                    {
                                                      "s": "FX:USDCHF"
                                                    },
                                                    {
                                                      "s": "FX:AUDUSD"
                                                    },
                                                    {
                                                      "s": "FX:USDCAD"
                                                    }
                                                  ],
                                                  "originalTitle": "Forex"
                                                }
                                              ]
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
            src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
              {
                "colorTheme": "dark",
                  "dateRange": "1d",
                    "showChart": true,
                      "locale": "en",
                        "largeChartUrl": "",
                          "isTransparent": false,
                            "width": "100%",
                              "height": "660",
                                "plotLineColorGrowing": "rgba(25, 118, 210, 1)",
                                  "plotLineColorFalling": "rgba(25, 118, 210, 1)",
                                    "gridLineColor": "rgba(42, 46, 57, 1)",
                                      "scaleFontColor": "rgba(120, 123, 134, 1)",
                                        "belowLineFillColorGrowing": "rgba(33, 150, 243, 0.12)",
                                          "belowLineFillColorFalling": "rgba(33, 150, 243, 0.12)",
                                            "symbolActiveColor": "rgba(33, 150, 243, 0.12)",
                                              "tabs": [
                                                {
                                                  "title": "Indices",
                                                  "symbols": [
                                                    {
                                                      "s": "FOREXCOM:SPXUSD",
                                                      "d": "S&P 500"
                                                    },
                                                    {
                                                      "s": "FOREXCOM:NSXUSD",
                                                      "d": "Nasdaq 100"
                                                    },
                                                    {
                                                      "s": "FOREXCOM:DJI",
                                                      "d": "Dow 30"
                                                    },
                                                    {
                                                      "s": "INDEX:NKY",
                                                      "d": "Nikkei 225"
                                                    },
                                                    {
                                                      "s": "INDEX:DEU30",
                                                      "d": "DAX Index"
                                                    },
                                                    {
                                                      "s": "FOREXCOM:UKXGBP",
                                                      "d": "FTSE 100"
                                                    }
                                                  ],
                                                  "originalTitle": "Indices"
                                                },
                                                {
                                                  "title": "Commodities",
                                                  "symbols": [
                                                    {
                                                      "s": "CME_MINI:ES1!",
                                                      "d": "E-Mini S&P"
                                                    },
                                                    {
                                                      "s": "CME:6E1!",
                                                      "d": "Euro"
                                                    },
                                                    {
                                                      "s": "COMEX:GC1!",
                                                      "d": "Gold"
                                                    },
                                                    {
                                                      "s": "NYMEX:CL1!",
                                                      "d": "Crude Oil"
                                                    },
                                                    {
                                                      "s": "NYMEX:NG1!",
                                                      "d": "Natural Gas"
                                                    },
                                                    {
                                                      "s": "CBOT:ZC1!",
                                                      "d": "Corn"
                                                    }
                                                  ],
                                                  "originalTitle": "Commodities"
                                                },
                                                {
                                                  "title": "Bonds",
                                                  "symbols": [
                                                    {
                                                      "s": "CME:GE1!",
                                                      "d": "Eurodollar"
                                                    },
                                                    {
                                                      "s": "CBOT:ZB1!",
                                                      "d": "T-Bond"
                                                    },
                                                    {
                                                      "s": "CBOT:UB1!",
                                                      "d": "Ultra T-Bond"
                                                    },
                                                    {
                                                      "s": "EUREX:FGBL1!",
                                                      "d": "Euro Bund"
                                                    },
                                                    {
                                                      "s": "EUREX:FBTP1!",
                                                      "d": "Euro BTP"
                                                    },
                                                    {
                                                      "s": "EUREX:FGBM1!",
                                                      "d": "Euro BOBL"
                                                    }
                                                  ],
                                                  "originalTitle": "Bonds"
                                                },
                                                {
                                                  "title": "Forex",
                                                  "symbols": [
                                                    {
                                                      "s": "FX:EURUSD"
                                                    },
                                                    {
                                                      "s": "FX:GBPUSD"
                                                    },
                                                    {
                                                      "s": "FX:USDJPY"
                                                    },
                                                    {
                                                      "s": "FX:USDCHF"
                                                    },
                                                    {
                                                      "s": "FX:AUDUSD"
                                                    },
                                                    {
                                                      "s": "FX:USDCAD"
                                                    }
                                                  ],
                                                  "originalTitle": "Forex"
                                                }
                                              ]
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
            src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
              {
                "colorTheme": "dark",
                  "dateRange": "12m",
                    "showChart": true,
                      "locale": "en",
                        "largeChartUrl": "",
                          "isTransparent": false,
                            "width": "100%",
                              "height": "660",
                                "plotLineColorGrowing": "rgba(25, 118, 210, 1)",
                                  "plotLineColorFalling": "rgba(25, 118, 210, 1)",
                                    "gridLineColor": "rgba(42, 46, 57, 1)",
                                      "scaleFontColor": "rgba(120, 123, 134, 1)",
                                        "belowLineFillColorGrowing": "rgba(33, 150, 243, 0.12)",
                                          "belowLineFillColorFalling": "rgba(33, 150, 243, 0.12)",
                                            "symbolActiveColor": "rgba(33, 150, 243, 0.12)",
                                              "tabs": [
                                                {
                                                  "title": "Indices",
                                                  "symbols": [
                                                    {
                                                      "s": "FOREXCOM:SPXUSD",
                                                      "d": "S&P 500"
                                                    },
                                                    {
                                                      "s": "FOREXCOM:NSXUSD",
                                                      "d": "Nasdaq 100"
                                                    },
                                                    {
                                                      "s": "FOREXCOM:DJI",
                                                      "d": "Dow 30"
                                                    },
                                                    {
                                                      "s": "INDEX:NKY",
                                                      "d": "Nikkei 225"
                                                    },
                                                    {
                                                      "s": "INDEX:DEU30",
                                                      "d": "DAX Index"
                                                    },
                                                    {
                                                      "s": "FOREXCOM:UKXGBP",
                                                      "d": "FTSE 100"
                                                    }
                                                  ],
                                                  "originalTitle": "Indices"
                                                },
                                                {
                                                  "title": "Commodities",
                                                  "symbols": [
                                                    {
                                                      "s": "CME_MINI:ES1!",
                                                      "d": "E-Mini S&P"
                                                    },
                                                    {
                                                      "s": "CME:6E1!",
                                                      "d": "Euro"
                                                    },
                                                    {
                                                      "s": "COMEX:GC1!",
                                                      "d": "Gold"
                                                    },
                                                    {
                                                      "s": "NYMEX:CL1!",
                                                      "d": "Crude Oil"
                                                    },
                                                    {
                                                      "s": "NYMEX:NG1!",
                                                      "d": "Natural Gas"
                                                    },
                                                    {
                                                      "s": "CBOT:ZC1!",
                                                      "d": "Corn"
                                                    }
                                                  ],
                                                  "originalTitle": "Commodities"
                                                },
                                                {
                                                  "title": "Bonds",
                                                  "symbols": [
                                                    {
                                                      "s": "CME:GE1!",
                                                      "d": "Eurodollar"
                                                    },
                                                    {
                                                      "s": "CBOT:ZB1!",
                                                      "d": "T-Bond"
                                                    },
                                                    {
                                                      "s": "CBOT:UB1!",
                                                      "d": "Ultra T-Bond"
                                                    },
                                                    {
                                                      "s": "EUREX:FGBL1!",
                                                      "d": "Euro Bund"
                                                    },
                                                    {
                                                      "s": "EUREX:FBTP1!",
                                                      "d": "Euro BTP"
                                                    },
                                                    {
                                                      "s": "EUREX:FGBM1!",
                                                      "d": "Euro BOBL"
                                                    }
                                                  ],
                                                  "originalTitle": "Bonds"
                                                },
                                                {
                                                  "title": "Forex",
                                                  "symbols": [
                                                    {
                                                      "s": "FX:EURUSD"
                                                    },
                                                    {
                                                      "s": "FX:GBPUSD"
                                                    },
                                                    {
                                                      "s": "FX:USDJPY"
                                                    },
                                                    {
                                                      "s": "FX:USDCHF"
                                                    },
                                                    {
                                                      "s": "FX:AUDUSD"
                                                    },
                                                    {
                                                      "s": "FX:USDCAD"
                                                    }
                                                  ],
                                                  "originalTitle": "Forex"
                                                }
                                              ]
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
            src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
              {
                "colorTheme": "dark",
                  "dateRange": "60m",
                    "showChart": true,
                      "locale": "en",
                        "largeChartUrl": "",
                          "isTransparent": false,
                            "width": "100%",
                              "height": "660",
                                "plotLineColorGrowing": "rgba(25, 118, 210, 1)",
                                  "plotLineColorFalling": "rgba(25, 118, 210, 1)",
                                    "gridLineColor": "rgba(42, 46, 57, 1)",
                                      "scaleFontColor": "rgba(120, 123, 134, 1)",
                                        "belowLineFillColorGrowing": "rgba(33, 150, 243, 0.12)",
                                          "belowLineFillColorFalling": "rgba(33, 150, 243, 0.12)",
                                            "symbolActiveColor": "rgba(33, 150, 243, 0.12)",
                                              "tabs": [
                                                {
                                                  "title": "Indices",
                                                  "symbols": [
                                                    {
                                                      "s": "FOREXCOM:SPXUSD",
                                                      "d": "S&P 500"
                                                    },
                                                    {
                                                      "s": "FOREXCOM:NSXUSD",
                                                      "d": "Nasdaq 100"
                                                    },
                                                    {
                                                      "s": "FOREXCOM:DJI",
                                                      "d": "Dow 30"
                                                    },
                                                    {
                                                      "s": "INDEX:NKY",
                                                      "d": "Nikkei 225"
                                                    },
                                                    {
                                                      "s": "INDEX:DEU30",
                                                      "d": "DAX Index"
                                                    },
                                                    {
                                                      "s": "FOREXCOM:UKXGBP",
                                                      "d": "FTSE 100"
                                                    }
                                                  ],
                                                  "originalTitle": "Indices"
                                                },
                                                {
                                                  "title": "Commodities",
                                                  "symbols": [
                                                    {
                                                      "s": "CME_MINI:ES1!",
                                                      "d": "E-Mini S&P"
                                                    },
                                                    {
                                                      "s": "CME:6E1!",
                                                      "d": "Euro"
                                                    },
                                                    {
                                                      "s": "COMEX:GC1!",
                                                      "d": "Gold"
                                                    },
                                                    {
                                                      "s": "NYMEX:CL1!",
                                                      "d": "Crude Oil"
                                                    },
                                                    {
                                                      "s": "NYMEX:NG1!",
                                                      "d": "Natural Gas"
                                                    },
                                                    {
                                                      "s": "CBOT:ZC1!",
                                                      "d": "Corn"
                                                    }
                                                  ],
                                                  "originalTitle": "Commodities"
                                                },
                                                {
                                                  "title": "Bonds",
                                                  "symbols": [
                                                    {
                                                      "s": "CME:GE1!",
                                                      "d": "Eurodollar"
                                                    },
                                                    {
                                                      "s": "CBOT:ZB1!",
                                                      "d": "T-Bond"
                                                    },
                                                    {
                                                      "s": "CBOT:UB1!",
                                                      "d": "Ultra T-Bond"
                                                    },
                                                    {
                                                      "s": "EUREX:FGBL1!",
                                                      "d": "Euro Bund"
                                                    },
                                                    {
                                                      "s": "EUREX:FBTP1!",
                                                      "d": "Euro BTP"
                                                    },
                                                    {
                                                      "s": "EUREX:FGBM1!",
                                                      "d": "Euro BOBL"
                                                    }
                                                  ],
                                                  "originalTitle": "Bonds"
                                                },
                                                {
                                                  "title": "Forex",
                                                  "symbols": [
                                                    {
                                                      "s": "FX:EURUSD"
                                                    },
                                                    {
                                                      "s": "FX:GBPUSD"
                                                    },
                                                    {
                                                      "s": "FX:USDJPY"
                                                    },
                                                    {
                                                      "s": "FX:USDCHF"
                                                    },
                                                    {
                                                      "s": "FX:AUDUSD"
                                                    },
                                                    {
                                                      "s": "FX:USDCAD"
                                                    }
                                                  ],
                                                  "originalTitle": "Forex"
                                                }
                                              ]
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
            src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
              {
                "colorTheme": "dark",
                  "dateRange": "all",
                    "showChart": true,
                      "locale": "en",
                        "largeChartUrl": "",
                          "isTransparent": false,
                            "width": "100%",
                              "height": "660",
                                "plotLineColorGrowing": "rgba(25, 118, 210, 1)",
                                  "plotLineColorFalling": "rgba(25, 118, 210, 1)",
                                    "gridLineColor": "rgba(42, 46, 57, 1)",
                                      "scaleFontColor": "rgba(120, 123, 134, 1)",
                                        "belowLineFillColorGrowing": "rgba(33, 150, 243, 0.12)",
                                          "belowLineFillColorFalling": "rgba(33, 150, 243, 0.12)",
                                            "symbolActiveColor": "rgba(33, 150, 243, 0.12)",
                                              "tabs": [
                                                {
                                                  "title": "Indices",
                                                  "symbols": [
                                                    {
                                                      "s": "FOREXCOM:SPXUSD",
                                                      "d": "S&P 500"
                                                    },
                                                    {
                                                      "s": "FOREXCOM:NSXUSD",
                                                      "d": "Nasdaq 100"
                                                    },
                                                    {
                                                      "s": "FOREXCOM:DJI",
                                                      "d": "Dow 30"
                                                    },
                                                    {
                                                      "s": "INDEX:NKY",
                                                      "d": "Nikkei 225"
                                                    },
                                                    {
                                                      "s": "INDEX:DEU30",
                                                      "d": "DAX Index"
                                                    },
                                                    {
                                                      "s": "FOREXCOM:UKXGBP",
                                                      "d": "FTSE 100"
                                                    }
                                                  ],
                                                  "originalTitle": "Indices"
                                                },
                                                {
                                                  "title": "Commodities",
                                                  "symbols": [
                                                    {
                                                      "s": "CME_MINI:ES1!",
                                                      "d": "E-Mini S&P"
                                                    },
                                                    {
                                                      "s": "CME:6E1!",
                                                      "d": "Euro"
                                                    },
                                                    {
                                                      "s": "COMEX:GC1!",
                                                      "d": "Gold"
                                                    },
                                                    {
                                                      "s": "NYMEX:CL1!",
                                                      "d": "Crude Oil"
                                                    },
                                                    {
                                                      "s": "NYMEX:NG1!",
                                                      "d": "Natural Gas"
                                                    },
                                                    {
                                                      "s": "CBOT:ZC1!",
                                                      "d": "Corn"
                                                    }
                                                  ],
                                                  "originalTitle": "Commodities"
                                                },
                                                {
                                                  "title": "Bonds",
                                                  "symbols": [
                                                    {
                                                      "s": "CME:GE1!",
                                                      "d": "Eurodollar"
                                                    },
                                                    {
                                                      "s": "CBOT:ZB1!",
                                                      "d": "T-Bond"
                                                    },
                                                    {
                                                      "s": "CBOT:UB1!",
                                                      "d": "Ultra T-Bond"
                                                    },
                                                    {
                                                      "s": "EUREX:FGBL1!",
                                                      "d": "Euro Bund"
                                                    },
                                                    {
                                                      "s": "EUREX:FBTP1!",
                                                      "d": "Euro BTP"
                                                    },
                                                    {
                                                      "s": "EUREX:FGBM1!",
                                                      "d": "Euro BOBL"
                                                    }
                                                  ],
                                                  "originalTitle": "Bonds"
                                                },
                                                {
                                                  "title": "Forex",
                                                  "symbols": [
                                                    {
                                                      "s": "FX:EURUSD"
                                                    },
                                                    {
                                                      "s": "FX:GBPUSD"
                                                    },
                                                    {
                                                      "s": "FX:USDJPY"
                                                    },
                                                    {
                                                      "s": "FX:USDCHF"
                                                    },
                                                    {
                                                      "s": "FX:AUDUSD"
                                                    },
                                                    {
                                                      "s": "FX:USDCAD"
                                                    }
                                                  ],
                                                  "originalTitle": "Forex"
                                                }
                                              ]
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