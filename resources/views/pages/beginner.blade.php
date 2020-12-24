@extends('layouts.master')

@section('title', 'Beginner Education')

@section('content')

@livewire('nav-bar')
    {{-- Introduction components --}}
        <v-container>
            <v-card-title class="mt-12">
                <h3 class="display-sm-2 mx-auto text-center">
                    Beginner Education
                </h3>
            </v-card-title>
            <v-row>
                <v-col cols="12" md="12">
                    <v-card shaped flat>
                        <v-card-text>
                            <div class="my-6">
                             
                                    <v-img src="/images/sponsor-5.jpeg" width="200px" class="mx-auto"></v-img>

                              
                            </div>
                        </v-card-text>
                        <v-card-text>
                            <p class="title">
                                This free-to-use website provides a wealth of useful investment information and resources
                                including:
                            </p>
                        </v-card-text>

                        <v-card-text>
                            <p class="title">
                                <v-list>
                                    <v-list-item-group>
                                        <v-list-item>
                                            <v-list-item-icon>
                                                <v-icon color="teal">mdi-check-circle</v-icon>
                                            </v-list-item-icon>
                                            <v-list-item-content>
                                                News
                                            </v-list-item-content>
                                        </v-list-item>

                                        <v-list-item>
                                            <v-list-item-icon>
                                                <v-icon color="teal">mdi-check-circle</v-icon>
                                            </v-list-item-icon>
                                            <v-list-item-content>
                                                Analysis
                                            </v-list-item-content>
                                        </v-list-item>

                                        <v-list-item>
                                            <v-list-item-icon>
                                                <v-icon color="teal">mdi-check-circle</v-icon>
                                            </v-list-item-icon>
                                            <v-list-item-content>
                                                Real-time data
                                            </v-list-item-content>
                                        </v-list-item>

                                        <v-list-item>
                                            <v-list-item-icon>
                                                <v-icon color="teal">mdi-check-circle</v-icon>
                                            </v-list-item-icon>
                                            <v-list-item-content>
                                                Educational material
                                            </v-list-item-content>
                                        </v-list-item>
                                    </v-list-item-group>
                                </v-list>
                            </p>
                        </v-card-text>

                        <v-card-text>
                            <p class="title">
                                Investing.com prides itself on catering to beginner investors/traders, with premium features
                                free of charge. Although a US-based website, it provides a localised service.
                            </p>
                        </v-card-text>

                        <v-card-text>
                            <p class="title">


                                Investing.com is also one of the best forex websites when it comes to free tools. Of
                                particular note are its Forex Volatility and Forex Correlation calculators.
                                These allow novice traders to get to grips with both the historic volatility and correlation
                                data of a wide range of currency pairs, enabling them to make better-informed trading
                                decisions.

                                <v-btn link href="http://www.investment.com" small outlined>Read more</v-btn>
                            </p>
                        </v-card-text>

                    </v-card>


                </v-col>


            </v-row>

            <v-row>
                <v-col cols="12" md="12">
                    <v-card class="" flat shaped>
                        <v-card-text>
                            <div class="">
                             
                                    <v-img src="/images/sponsor-2.jpeg" width="200" class="mx-auto">
                                    </v-img>

                             
                            </div>
                        </v-card-text>
                        <v-card-text class="mt-n10">
                            <p class="title">
                                Next on our list of best forex websites is Investopedia, a comprehensive resource providing:

                                <v-list>
                                    <v-list-item-group>
                                        <v-list-item>
                                            <v-list-item-icon>
                                                <v-icon color="red">mdi-check-circle</v-icon>
                                            </v-list-item-icon>
                                            <v-list-item-content>
                                                Market news
                                            </v-list-item-content>
                                        </v-list-item>

                                        <v-list-item>
                                            <v-list-item-icon>
                                                <v-icon color="red">mdi-check-circle</v-icon>
                                            </v-list-item-icon>
                                            <v-list-item-content>
                                                Trend analysis
                                            </v-list-item-content>
                                        </v-list-item>

                                        <v-list-item>
                                            <v-list-item-icon>
                                                <v-icon color="red">mdi-check-circle</v-icon>
                                            </v-list-item-icon>
                                            <v-list-item-content>
                                                Trading education
                                            </v-list-item-content>
                                        </v-list-item>


                                    </v-list-item-group>
                                </v-list>

                            </p>
                        </v-card-text>

                        <v-card-text>
                            <p class="title">
                                Investopedia has an exceptionally clean layout that is easy to navigate and user-friendly.
                                Its news updates are separated under category tabs including ‘company’, ‘markets’, ‘trading’
                                and
                                ‘political news’, though its coverage does not compare with the more dedicated news sites
                                like Bloomberg
                            </p>
                        </v-card-text>

                        <v-card-text>
                            <p class="title">
                                You’ll find a multitude of educational articles that cover everything from basic terminology
                                to professional trading strategies. These are well structured and informative, but perhaps a
                                little more complex than the educational content found on Babypips. </p>

                            <p class="title">
                                For more in-depth and interactive learning, the Investopedia Academy is a valuable resource.
                                Courses are available for all levels of experience, each consisting of over 30 individual
                                on-demand video lessons and supporting materials like quizzes and practice exercises. Whilst
                                its onsite articles are free to access, the Investopedia Academy is a paid-for service.
                                <v-btn link small href="http://www.investopedia.com" outlined>Read more</v-btn>
                            </p>
                        </v-card-text>


                    </v-card>
                </v-col>
            </v-row>

            <v-row>
                <v-col cols="12" md="12">
                    <v-card class="mt-5" flat shaped>
                        <v-card-text>
                            <div class="">
                               
                                    <v-img src="/images/sponsor-8.jpeg" width="200" class="mx-auto">

                                    </v-img>
                              
                            </div>
                        </v-card-text>
                        <v-card-text>
                            <p class="title">
                                TradingView is one of the top forex investment/trading websites for charting and social
                                networking. Through cloud-based software, investors of all levels of experience can easily
                                research
                                and track the market with customisable charts set up for specific alerts and indicators.
                            </p>
                        </v-card-text>
                        <v-card-text>
                            <p class="title">
                                There are four plans available:
                                <v-list>
                                    <v-list-item-group>
                                        <v-list-item>
                                            <v-list-item-icon>
                                                <v-icon color="blue">mdi-check-circle</v-icon>
                                            </v-list-item-icon>
                                            <v-list-item-content>
                                                Basic
                                            </v-list-item-content>
                                        </v-list-item>

                                        <v-list-item>
                                            <v-list-item-icon>
                                                <v-icon color="blue">mdi-check-circle</v-icon>
                                            </v-list-item-icon>
                                            <v-list-item-content>
                                                Pro
                                            </v-list-item-content>
                                        </v-list-item>

                                        <v-list-item>
                                            <v-list-item-icon>
                                                <v-icon color="blue">mdi-check-circle</v-icon>
                                            </v-list-item-icon>
                                            <v-list-item-content>
                                                Pro+
                                            </v-list-item-content>
                                        </v-list-item>

                                        <v-list-item>
                                            <v-list-item-icon>
                                                <v-icon color="blue">mdi-check-circle</v-icon>
                                            </v-list-item-icon>
                                            <v-list-item-content>
                                                Premium
                                            </v-list-item-content>
                                        </v-list-item>


                                    </v-list-item-group>
                                </v-list>
                            </p>


                        </v-card-text>
                        <v-card-text>
                            <p class="title">
                                The basic account is free but relatively limited. If you’re new to trading and want to
                                practice charting currency pairs, then the basic account may work for you.
                            </p>
                        </v-card-text>

                        <v-card-text>
                            <p class="title">
                                However, to take full advantage of TradingView’s charting software and active social
                                community, you’ll need to upgrade to one of the paid plans. These do all come with a free
                                trial,
                                so you can try them out before making a long-term commitment.
                            </p>
                        </v-card-text>
                        <v-card-text>
                            <p class="title">
                                For more in-depth and interactive learning, the Investopedia Academy is a valuable resource.
                                Courses are available for all levels of experience, each consisting of over 30 individual
                                on-demand video lessons and supporting materials like quizzes and practice exercises. Whilst
                                its onsite articles are free to access, the Investopedia Academy is a paid-for service.
                                <v-btn small link href="http://www.investmentview.com" outlined>Read more</v-btn>
                            </p>
                        </v-card-text>
                    </v-card>
                </v-col>
            </v-row>
        </v-container>

@endsection
