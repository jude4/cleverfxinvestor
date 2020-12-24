@extends('layouts.master')

@section('title', 'Introduction to Forex')

@section('content')

@livewire('nav-bar')
    {{-- Introduction components --}}
    <div>
        <v-container>
            <v-card-title class="mt-12">
                <h3 class="display-sm-2 mx-auto">
                    Introduction to Forex
                </h3>
            </v-card-title>
            <v-row>
                <v-col cols="12" md="12">
                    <v-card shaped flat>
                        <v-card-text>
                            <div class="">
                               
                                    <v-img src="/images/sponsor-4.jpeg" width="190" class="mx-auto"></v-img>
                               
                            </div>
                        </v-card-text>
                        <v-card-text>
                            <p class="title">
                                The first on our list of best forex websites is Babypips,
                                a user-friendly site with an easy to navigate layout and
                                a range of tools and features ideal for those new to the world of
                                online investment/trading.
                            </p>
                        </v-card-text>
                        <v-card-text>
                            <p class="title">
                                It posts regular news updates and feature articles in areas such as:
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
                                                Technical analysis
                                            </v-list-item-content>
                                        </v-list-item>

                                        <v-list-item>
                                            <v-list-item-icon>
                                                <v-icon color="teal">mdi-check-circle</v-icon>
                                            </v-list-item-icon>
                                            <v-list-item-content>
                                                Trade ideas
                                            </v-list-item-content>
                                        </v-list-item>

                                        <v-list-item>
                                            <v-list-item-icon>
                                                <v-icon color="teal">mdi-check-circle</v-icon>
                                            </v-list-item-icon>
                                            <v-list-item-content>
                                                Trading psychology
                                            </v-list-item-content>
                                        </v-list-item>
                                    </v-list-item-group>
                                </v-list>
                            </p>
                        </v-card-text>

                        <v-card-text>
                            <p class="title">
                                However, it’s through its educational content that Babypips really shines.

                                Its School of Pipsology takes a light-hearted approach to what is essentially a highly
                                complex topic. Lesson articles are separated into 11 courses, beginning at pre-school level
                                through
                                to graduation, and are supported with online quizzes and a comprehensive glossary of terms.

                                There are also several free to use tools, like its Position Size Calculator and Gain and
                                Loss Percentage Calculator, designed to help beginner traders mitigate risk and assess the
                                profitability of their investment.
                            </p>
                        </v-card-text>

                        <v-card-text>
                            <p class="title">
                                Signing up for an account is free and you can also exchange tips and ideas with fellow
                                traders through its various forums, making Babypips perhaps the best website for forex
                                education for
                                beginners.
                                <v-btn color="" outlined link href="http://www.babypips.com" small>Read more</v-btn>
                            </p>
                        </v-card-text>
                    </v-card>


                </v-col>


            </v-row>

            <v-row>
                <v-col cols="12" md="12">
                    <v-card class="mt-5" shaped flat>
                        <v-card-text>
                            <div class="">
                               
                                    <v-img src="/images/sponsor-6.jpeg" width="120" class="mx-auto"></v-img>
                               
                            </div>
                        </v-card-text>
                        <v-card-text>
                            <p class="title">
                                A highly popular source of information in the investment community, FXStreet is a good
                                all-round site providing everything you’d expect to find on one of the top forex trading
                                websites.

                                News, analysis and a range of forex charts are available including live charts, a forecast
                                poll and rates table. FXStreet’s Chart Station allows you to track four charts on one page
                                for
                                detailed and comparative analysis.

                                A lot of FXStreet’s resources and tools are free to use, including its trading signals
                                service, although signal notifications are limited per month and subject to a 15-minute
                                delay.

                                To make the most of this feature and get access to all signals in real-time, you’ll need to
                                upgrade to FXStreet Premium for a monthly fee. This will also give you access to its Trading
                                Institute, which hosts four live forex webinars per week.
                            </p>
                        </v-card-text>
                        <v-card-text>
                            <p class="title">
                                News, analysis and a range of forex charts are available including live charts, a forecast
                                poll and rates table. FXStreet’s Chart Station allows you to track four charts on one page
                                for
                                detailed and comparative analysis.
                            </p>
                        </v-card-text>

                        <v-card-text>
                            <p class="title">
                                A lot of FXStreet’s resources and tools are free to use, including its trading signals
                                service, although signal notifications are limited per month and subject to a 15-minute
                                delay.
                            </p>
                        </v-card-text>
                        <v-card-text>

                            <p class="title">
                                To make the most of this feature and get access to all signals in real-time, you’ll need to
                                upgrade to FXStreet Premium for a monthly fee. This will also give you access to its Trading
                                Institute, which hosts four live forex webinars per week.
                                <v-btn href="http://www.fxstreet.com" link small outlined>Read more</v-btn>

                            </p>
                        </v-card-text>
                    </v-card>
                </v-col>
            </v-row>
        </v-container>

    </div>


@endsection
