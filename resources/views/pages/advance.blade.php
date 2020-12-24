@extends('layouts.master')

@section('title', ' Advance Courses and Metatrader5&4 training')


@section('content')


@livewire('nav-bar')
    {{-- Introduction components --}}
    <v-container>
        <v-card-title class="mt-12">
            <h2 class="display-sm-2 mx-auto d-none d-sm=flex">
                Advance Courses and Metatrader5&4 training
            </h2>

            <h3 class="text-center display-sm-2 mx-auto d-flex d-sm=none">
                Advance Courses and Metatrader5&4 training
            </h3>
        </v-card-title>
        <v-row>
            <v-col cols="12" md="12">
                <v-card flat shaped>
                    <v-card-text>
                        <div class="">
                         
                                <v-img src="/images/forex.jpg" width="200px" class="mx-auto">

                                </v-img>

                         

                        </div>
                    </v-card-text>

                    <v-card-text>
                        <p class="title">
                            Best for: MetaTrader training
                            FOREX.com is a leading UK forex broker that offers a comprehensive library of educational
                            content. As a broker regulated by the Financial Conduct Authority, you can be sure that the
                            guidance provided by FOREX.com is trustworthy and from a reputable source.
                        </p>
                    </v-card-text>

                    <v-card-text>
                        <p class="title">
                            All of the educational materials are free, you do not have to open a trading account with
                            forex.com to access them.
                        </p>
                    </v-card-text>

                    <v-card-text>
                        <p class="title">
                            Topics covered include:

                            <v-list>
                                <v-list-item-group>
                                    <v-list-item>
                                        <v-list-item-icon>
                                            <v-icon color="teal">mdi-check-circle</v-icon>
                                        </v-list-item-icon>
                                        <v-list-item-content>
                                            Technical analysis
                                        </v-list-item-content>
                                    </v-list-item>

                                    <v-list-item>
                                        <v-list-item-icon>
                                            <v-icon color="teal">mdi-check-circle</v-icon>
                                        </v-list-item-icon>
                                        <v-list-item-content>
                                            Trading strategies and concepts
                                        </v-list-item-content>
                                    </v-list-item>

                                    <v-list-item>
                                        <v-list-item-icon>
                                            <v-icon color="teal">mdi-check-circle</v-icon>
                                        </v-list-item-icon>
                                        <v-list-item-content>
                                            Managing risk
                                        </v-list-item-content>
                                    </v-list-item>


                                </v-list-item-group>
                            </v-list>
                        </p>
                    </v-card-text>

                    <v-card-text>
                        <p class="title">
                            Resources are separated into the three levels of beginner, intermediate and advanced.
                            <br>
                            Forex.com also offers training on trading platforms. This includes its proprietary platform, but
                            perhaps of more value, it also provides several tutorials on the use of the MetaTrader
                            suite.
                            As many forex brokers provide this platform, learning how to use it to full effect is well worth
                            your time.
                            <v-btn link href="http://www.forex.com" small outlined>Read more</v-btn>
                        </p>
                    </v-card-text>


                </v-card>


            </v-col>


        </v-row>

        <v-row>
            <v-col cols="12" md="12">
                <v-card flat shaped>
                    <v-card-text>
                        <div class="">
                        
                                <v-img src="/images/forex-factory.jpg" class="mx-auto" width="200">

                                </v-img>

                         
                        </div>
                    </v-card-text>
                    <v-card-text class="title">
                        <p class="title">
                            This entry in our list of best forex websites is more geared towards the professional trader
                            and, as
                            its name would suggest, focuses solely on the foreign exchange market.
                        </p>
                    </v-card-text>


                    <v-card-text>
                        <p class="title">

                            Information is easily accessible under six simple tabs. Some key ones are:

                            <v-list>
                                <v-list-item-group>
                                    <v-list-item>
                                        <v-list-item-icon>
                                            <v-icon color="red">mdi-check-circle</v-icon>
                                        </v-list-item-icon>
                                        <v-list-item-content>
                                            The ‘brokers’ tab offers an overview of several forex brokers, including their
                                            real-time spreads
                                        </v-list-item-content>
                                    </v-list-item>

                                    <v-list-item>
                                        <v-list-item-icon>
                                            <v-icon color="red">mdi-check-circle</v-icon>
                                        </v-list-item-icon>
                                        <v-list-item-content>
                                            The ‘market’ tab provides a live scanner and customisable forex charts
                                        </v-list-item-content>
                                    </v-list-item>

                                    <v-list-item>
                                        <v-list-item-icon>
                                            <v-icon color="red">mdi-check-circle</v-icon>
                                        </v-list-item-icon>
                                        <v-list-item-content>
                                            A detailed economic calendar sits under the ‘calendar’ tab there’s also a fairly
                                            comprehensive news feed.
                                        </v-list-item-content>
                                    </v-list-item>

                                    </v-list-item>
                                </v-list-item-group>
                            </v-list>
                        </p>

                    </v-card-text>

                    <v-card-text>
                        <p class="title">
                            Forex Factory’s best features are probably found under its ‘trades’ and ‘forums’ tabs. The
                            former
                            allows you to see live trades being placed by others in the market, with the latter
                            hosting a wide range of active discussions.
                        </p>

                    </v-card-text>
                    <v-card-text>
                        <p class="title">

                            You can use Forex Factory for free, but you will need to register for an account to take part in
                            its
                            forum threads.

                            <v-btn small link href="http://www.forexfactory" outlined>Read more</v-btn>
                        </p>
                    </v-card-text>

                </v-card>
            </v-col>
        </v-row>


        <v-row>
            <v-col cols="12" md="12">
                <v-card flat shaped>
                    <v-card-text>
                        <div>
                            
                                <v-img src="/images/udemy.jpg" width="200" class="mx-auto">

                                </v-img>
                           
                            <v-card-subtitle class="text-center">Best for: On-demand learning</v-card-subtitle>
                        </div>

                    </v-card-text>

                    <v-card-text>
                        <p class="title">

                            Udemy is not specifically designed for trading education or information. Rather, it is a global
                            online learning platform that hosts a multitude of courses in almost every subject
                            imaginable.

                        </p>
                    </v-card-text>


                    <v-card-text>
                        <p class="title">
                            That said, it has an extensive range of resources for those looking to learn about trading on the
                            foreign exchange market.
                        </p>
             

                    </v-card-text>
                    <v-card-text>
                        <p class="title">
                            A simple search for forex brings up over 2,000 courses, from introductory overviews to expert level
                            lectures.
                            <v-btn link href="http://ww.udemy.com" small outlined>Read more</v-btn>
                        </p>
                    </v-card-text>
                </v-card>
            </v-col>
        </v-row>

        <v-row>
            <v-col cols="12" md="12">
                <v-card flat color="grey lighten-3" shaped style="font-style: italic">
                  

                    <v-card-text>
                        <p class="title font-weight-bold">
                            There are so many websites for forex news and education that it can be difficult to know which ones
                            you can trust, and which ones are best avoided. Hopefully, Cleverfxinvestor has provided
                            you with a variety of reputable sources with which to start or progress your investmentjourney.
    
    
                            As mentioned, it’s best to use several of these sites to ensure you’re covering all the basics when
                            it comes to learning about online investment.
                        </p>

                    </v-card-text>

                    <v-card-text>
                        <p class="title font-weight-bold">
                            For beginners, it’s advisable to start with basic educational content before moving on to market
                            research and using trading tools. That way, you’ll fully understand how what you’re reading
                            and the tools your using can help you make better-informed investment decisions.
                        </p>
                    </v-card-text>

                    <v-card-text>
                        <p class="title font-weight-bold">
                            Note that Cleverfxinvestor Recommends Babypips.com For beginners with no Previous experience about
                            the financial Market.
                            Cleverfxinvestor Academy:we strongly recommend the following trading educational sites in order of
                            simplicity for our clients to acquire from zero to professional level of knowledge on
                            how to trade independently:
                        </p>
                    </v-card-text>

                    <v-card-text>
                        <p class="title font-weight-bold">
                            That said, it has an extensive range of resources for those looking to learn about trading on the
                            foreign exchange market.
    
    
                            A simple search for forex brings up over 2,000 courses, from introductory overviews to expert level
                            lectures.
                           
                        </p>
                    </v-card-text>
                </v-card>
            </v-col>
        </v-row>
    </v-container>

@endsection
