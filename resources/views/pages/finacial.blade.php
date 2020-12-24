@extends('layouts.master')

@section('title', ' Finacial News and Analysis')

@section('content')

@livewire('nav-bar')
{{-- Introduction components --}}
    <v-container>
        <v-card-title class="mt-12">
            <h3 class="display-sm-2 mx-auto text-center d-none d-sm-flex">
                Finacial News and Analysis
            </h3>

            <h4 class="text-center d-flex d-sm-none mx-auto">
            Finacial News and Analysis
            </h4>
        </v-card-title>
        <v-row>
            <v-col cols="12" md="12">
                <v-card shaped flat>
                    <v-card-text>
                        <div class="my-6">
                            
                                <v-img src="images/sponsor-7.jpeg" width="200" class="mx-auto">
                                    
                                </v-img>

                            

                        </div>
                 

                    </v-card-text>

                    <v-card-text class="title ">
                     DailyFX is a free to use website powered by UK-based brokerage, IG. As you would expect from a broker-run site, it provides live market data for major currency pairs, with both simple
                            view and detailed view charts for in-depth technical analysis.
                    </v-card-text>

                    <v-card-text class="title  ">
                    The site provides regularly updated financial news, which is easily filtered by market. You’ll find several articles per day posted under the forex news tab.
                            This is complemented by a separate real-time news feed that pulls in breaking information from accredited sources.

                    </v-card-text>

                    <v-card-text class="title  ">
                         There are plenty of educational resources in DailyFX’s Forex University, with courses offered at beginner, intermediate, advanced and expert level. You ca

                            n also take advantage of its daily live webinars.

                    </v-card-text>

                    <v-card-text class="title">

                         There are several useful trading tools including pivot point and trader sentiment charts, but perhaps the most useful tools are the economic and central banks calendars.
                            These provide clear details of upcoming global events and future meetings of each country’s central bank respectively, allowing you to make informed predictions on potential market movement and adjust your positions accordingly.
                        <v-btn href="http://www.dailyfx.com" link small outlined>Read more</v-btn>
                    </v-card-text>
                </v-card>


            </v-col>


        </v-row>

        <v-row>
            <v-col cols="12" md="12">
                <v-card class="" flat shaped>
                    <v-card-text>
                        <div class="">
                            
                                <v-img src="/images/sponsor-1.jpeg" class="mx-auto" width="160">
                                    
                                </v-img>

                           
                        </div>
                    </v-card-text>
                        <v-card-text class="title  mt-n10">
                            Bloomberg is the customer-facing website of the international news agency, Bloomberg News. It covers just about everything you need to know about events in finance, business and trading.
                        </v-card-text>

                        <v-card-text class="title  ">
                            With stories updated as they unfold from around the globe, it is probably the best website for forex news, as well as providing markets trends, analysis and currency data.
                        </v-card-text>

                       

                        <v-card-text class="title  ">
                            Users are permitted free access to a limited number of articles each month. To get the most from Bloomberg’s services, you’ll probably want to consider signing up for either its digital
                            or all-access subscription, which can be paid for monthly or annually. These come with additional benefits including The Open and Close, Bloomberg’s daily newsletter for traders.
                            <v-btn small link href="http://www.bloombreg.com" outlined>Read more</v-btn>
                        </v-card-text>

                </v-card>
            </v-col>
        </v-row>

        <v-row>
            <v-col cols="12" md="12">
                <v-card class="" shaped flat>
                    <v-card-text>
                        <div>
                            
                                <v-img src="/images/logo-2.jpeg" width="200" class="mx-auto">

                                </v-img>
                        </div>

                    </v-card-text>
                        <v-card-text class="mt-n10 ">
                            <p class="title">
                            Every Cleverfxinvestor's client have their own Personal Account manager/financial adviser, who does not only provide full technical support via live chat, email or by phone,
                            but you can also schedule with him/her one-to-one training sessions to learn the basics of Cleverfxinvestment.
                            </p>
                        </v-card-text>

                        
                        <v-card-text class="title  ">
                            We also offer our clients a general CHANNEL equiped with World Economy Blog, 80% Accurate Market Signals, Investment/ Educational Links & PDFs, 24/5 money making & 24/7 learning.
                            <v-btn small link href="https://t.me/cleverfxinvestor" outlined>Read more</v-btn>
                        </v-card-text>

                </v-card>
            </v-col>
        </v-row>
    </v-container>

@endsection
