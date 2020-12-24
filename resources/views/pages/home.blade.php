@extends('layouts.master')

@section('title', 'Home')

@section('content')


    {{-- Carousel component --}}
    @livewire('nav-bar')
    <div class="d-none d-sm-flex">
        <v-carousel cycle height="750" interval="5000" hide-delimiter-background class="">
            <v-carousel-item>
                <v-sheet style="background: #000">

                    <v-img src="/images/71.jpeg" contain style="opacity: 0.8;">
                        <v-container style="opacity: 0.9;">
                            <v-row align="center" justify="center">
                                <v-col data-aos="fade-left" data-aos-duration="1000" data-aos-easing="ease-in-out"
                                    data-aos-once="false" data-aos-delay="50" cols="12" md="12" align="center"
                                    justify="center">
                                    <div class="display-1  text-center" style="margin-top: 200px; color: #fff">
                                        <span class="display-3 font-weight-bold" style="color: #b17c2e">How Real
                                            Estate</span><br> gets Real for CFI clients !!!!
                                    </div>
                                </v-col>
                            </v-row>
                        </v-container>
                    </v-img>
                </v-sheet>
            </v-carousel-item>


            <v-carousel-item>
                <v-sheet style="background: #000">
                    <v-img contain src="/images/money.jpg" style="opacity: 0.8;">
                        <v-container style="opacity: 0.8;">
                            <v-row align="center" justify="center">
                                <v-col data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in-out"
                                    data-aos-once="false" data-aos-delay="50" cols="12" md="12" align="center"
                                    justify="center">
                                    <div style="margin-top: 400px">

                                        <v-btn color="red" rounded dark large href="/register">Get Started</v-btn>

                                    </div>
                                </v-col>
                            </v-row>

                        </v-container>
                    </v-img>

                </v-sheet>


            </v-carousel-item>

            <v-carousel-item>
                <v-img src="/images/72.jpeg" contain>
                    <v-container>
                        <v-row align="center" justify="center">
                            <v-col data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out"
                                data-aos-once="false" data-aos-delay="50" cols="12" md="12" align="center" justify="center">
                                <div class="display-1 text-center" style="margin-top: 200px; color: #fff">
                                    <span style="color: #fff" class="display-3 font-weight-bold">
                                        <span style="color: red">#</span>
                                        INVEST<span style="color: red">LIKE</span>
                                        HER
                                    </span>
                                    <p class="title" style="font-size: 10px">
                                        Women control <b>29%</b> of Asian wealth, higher than the global avarage
                                        of 27%, according to a 2010 study by the
                                        Boston Consulting Group.
                                    </p>

                                    <v-btn class="" color="red" dark rounded link href="/register">Get Started</v-btn>
                                </div>
                            </v-col>
                        </v-row>
                    </v-container>
                </v-img>
            </v-carousel-item>

            <v-carousel-item>

                <v-sheet height="100%" tile color="black">
                    <v-img src="/images/hiring.jpg" contain style="opacity: 0.8">
                        <v-row align="center" justify="center">
                            <v-col data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in-out"
                                data-aos-once="false" data-aos-delay="50" md="12" cols="12" align="center" class="mt-12"
                                justify="center">
                                <h3 class="display-3 text-uppercase" style="color: #b17c2e; opacity: 0.6">
                                    We are <span class="text-uppercase font-weight-bold"
                                        style="color: #b17c2e; opacity: 0.6">hiring!</span>
                                </h3>
                                <p class="title" style="color: #b17c2e; opacity: 0.6">Boost your career/finacial status with
                                    CFI as a</p>
                                <h3 class="text-uppercase font-weight font-weight-bold display-1"
                                    style="color: #b17c2e; opacity: 0.6">
                                    Digital Administrator
                                </h3>
                                <p class="title font-weight-bold" style="color: #b17c2e;">Email your CV to
                                    support@cleverfxinvestor.com</p>
                                <div class="display-1 text-center " style="color: #b17c2e; opacity: 0.6">
                                    For More information;
                                </div>
                                <br>
                                <center>

                                    <v-btn color="#b17c2e" rounded dark large href="https://t.me/JamesLawsonCFI">Click Here
                                    </v-btn>

                                </center>

                            </v-col>

                        </v-row>

                    </v-img>
                </v-sheet>
            </v-carousel-item>
        </v-carousel>
    </div>

    <div class="d-flex d-sm-none">

        <v-carousel cycle interval="9000" height="240" hide-delimiter-background class="">
            <v-carousel-item>
                <v-img src="/images/71.jpeg" contain>
                    <v-sheet height="100%" tile color="black" style="opacity: 0.4" dark class="d-flex d-sm-none">
                        <v-row align="center" justify="center">
                            <v-col data-aos="fade-left" data-aos-duration="1000" data-aos-easing="ease-in-out"
                                data-aos-once="false" data-aos-delay="50" md="12" cols="12" align="center" justify="center">
                                <div class="title text-center" style="margin-top: 50px;color: white">
                                    <span class="headline font-weight-bold" style="color: #b17c2e">How Real Estate</span>
                                    <br>
                                    gets Real for CFI clients !!!!
                                </div>
                            </v-col>

                        </v-row>
                    </v-sheet>

                </v-img>


            </v-carousel-item>


            <v-carousel-item>
                <v-img src="/images/money.jpg" contain>
                    <v-sheet height="100%" tile color="black" style="opacity: 0.4">
                        <v-row class="fill-height" align="center" justify="center">
                            <v-col data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out"
                                data-aos-once="false" data-aos-delay="50" md="12" cols="12" align="center" justify="center">
                                <div class="mt-n6">


                                    <v-btn color="red" rounded dark x-small href="/register" class="mt-n4">Get Started
                                    </v-btn>
                                </div>



                            </v-col>

                        </v-row>
                    </v-sheet>

                </v-img>
            </v-carousel-item>

            <v-carousel-item>
                <v-img src="/images/72.jpeg" height="400">
                    <v-sheet height="100%" tile color="black" style="opacity: 0.4">
                        <v-row align="center" justify="center">
                            <v-col md="12" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in-out"
                                data-aos-once="false" data-aos-delay="50" cols="12" align="center" justify="center">

                                <br><br>
                                <span style="color: #fff" class="title mt-12 font-weight-bold">
                                    <span style="color: red">#</span>
                                    INVEST<span style="color: red">LIKE</span>
                                    HER
                                </span>
                                <p class="" style="font-size: 15px">
                                    Women control <b>29%</b> of Asian wealth, higher than the global avarage
                                    of 27%, according to a 2010 study by the
                                    Boston Consulting Group.
                                </p>

                                <v-btn color="red" link href="/register" rounded class="text-none" dark x-small>Get Started
                                </v-btn>

                            </v-col>

                        </v-row>
                    </v-sheet>

                </v-img>
            </v-carousel-item>

            <v-carousel-item>

                <v-img src="/images/hiring.jpg">
                    <v-sheet height="100%" tile contain style="opacity: 0.6" color="black">
                        <v-row class="fill-height" align="center" justify="center">
                            <v-col data-aos="fade-left" data-aos-duration="1000" data-aos-easing="ease-in-out"
                                data-aos-once="false" data-aos-delay="50" md="12" cols="12" align="center" justify="center"
                                class="mt-n8">
                                <h3 class="title text-uppercase" style="color: #b17c2e">
                                    We are <span class="text-uppercase font-weight-bold"
                                        style="color: #b17c2e">hiring!</span>
                                </h3>
                                <p class="subtitle" style="color: #b17c2e;">Boost your career/finacial status with CFI as a
                                </p>
                                <h3 class="mt-n4 text-uppercase font-weight font-weight-bold title" style="color: #b17c2e">
                                    Digital Administrator
                                </h3>
                                <p class="subtitle font-weight-black" style="color: #b17c2e;">Email your CV to
                                    support@cleverfxinvestor.com</p>
                                <p class="mt-n6 subtitle font-weight-black" style="color: #b17c2e">
                                    For More information;
                                </p>



                                <v-btn color="#b17c2e" class="mt-n7" rounded dark x-small
                                    href="https://t.me/JamesLawsonCFI">Click Here</v-btn>




                            </v-col>

                        </v-row>
                    </v-sheet>

                </v-img>
            </v-carousel-item>
        </v-carousel>
    </div>

    {{-- Security fund --}}


    <v-container>
        <v-card-title class="mt-12">
            <h3 class="display-sm-2 mx-auto">
                SECURITY OF FUNDS
            </h3>
        </v-card-title>
        <v-row align="center" justify="center">
            <v-col cols="12" md="3" data-aos="fade-right" data-aos-offset="200" data-aos-duration="1000"
                data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
                <v-card outlined link href="/security-of-funds">
                    <v-card-text align="center" justify="center">
                        <v-icon size="50" color="#b17c2e">mdi-bank</v-icon><br>
                        Account with major Banks
                    </v-card-text>
                </v-card>
            </v-col>

            <v-col cols="12" md="3" data-aos="fade-right" data-aos-offset="200" data-aos-duration="1000"
                data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
                <v-card outlined link href="/security-of-funds">
                    <v-card-text align="center" justify="center">
                        <v-icon size="50" color="#b17c2e">mdi-lock</v-icon>
                        <br>
                        Segregation of Funds
                    </v-card-text>
                </v-card>
            </v-col>

            <v-col cols="12" md="3" data-aos="fade-left" data-aos-offset="200" data-aos-duration="1000"
                data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
                <v-card outlined link href="/security-of-funds">
                    <v-card-text align="center" justify="center">
                        <v-icon size="50" color="#b17c2e">mdi-shield-star-outline</v-icon><br>
                        Market Leading Insurance
                    </v-card-text>
                </v-card>
            </v-col>

            <v-col cols="12" md="3" data-aos="fade-left" data-aos-offset="200" data-aos-duration="1000"
                data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
                <v-card outlined link href="/security-of-funds">
                    <v-card-text align="center" justify="center">
                        <v-icon size="50" color="#b17c2e">mdi-umbrella</v-icon><br>
                        Negative Balance Protection
                    </v-card-text>
                </v-card>
            </v-col>
        </v-row>

    </v-container>

    {{-- Account type plan --}}

    <div>
        <v-card-title class="mt-12">
            <h5 class="mx-auto d-flex d-sm-none">
                ACCOUNT / PARTNERSHIP TYPES
            </h5>
            <h3 class="mx-auto d-none d-sm-flex">
                ACCOUNT / PARTNERSHIP TYPES
            </h3>
        </v-card-title>
        <v-container>
            <v-row>
                <v-col cols="12" md="3" sm="6" data-aos="fade-right" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
                    <v-card hover color="" tile shaped elevation="12">
                        <v-card-title>
                            <v-btn text color="blue" class="mx-auto">
                                Mini Investors
                            </v-btn>
                        </v-card-title>
                        <v-card-text class="" justify="center" align="center" dark>
                            <p class="caption mx-auto font-weight-bold">Basic Investments for Beginners</p>
                            <p class="subtitle">Min First Deposit</p>
                            <p class="headline font-weight-bold" style="color: black">$100 - $1,000</p>
                            <v-divider width="90"></v-divider>
                            <p>
                                <v-icon color="green" small>mdi-check</v-icon><b>{{ $miniAnnualPercentage }}% annual
                                    profit</b>

                            </p>


                            <p class="subtitle">
                                <v-icon color="green" small>mdi-check</v-icon> <b>{{ $miniPercentage }}% referral bonus</b>
                            </p>

                            <p class="subtitle">
                                <v-icon color="green" small>mdi-check</v-icon> <b>8% RMR</b>
                            </p>

                            <p class="subtitle">
                                <v-icon color="green" small>mdi-check</v-icon> <b>Mini incentives</b>
                            </p>
                            <p class="subtitle">
                                <v-icon color="green" small>mdi-check</v-icon> <b>Active downlines</b>
                            </p>
                            <p class="subtitle">
                                <v-icon color="green" small>mdi-check</v-icon> <b>Referral limit</b><br>
                                <span style="font-size: 29px">
                                    <v-icon color="green">mdi-arrow-right</v-icon>&infin;
                                </span>

                            </p>
                            <v-btn outlined link href="/register" color="blue" dark class="text-normal" width="100%">Open
                                account</v-btn>
                        </v-card-text>
                    </v-card>
                </v-col>

                <v-col cols="12" md="3" sm="6" data-aos="fade-right" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
                    <v-card hover color="" tile shaped elevation="12">
                        <v-card-title>
                            <v-btn text color="orange" class="mx-auto">
                                Standard Investors
                            </v-btn>
                        </v-card-title>
                        <v-card-text class="" justify="center" align="center" dark>
                            <p class="caption mx-auto font-weight-bold">Standard Investors</p>
                            <p class="subtitle">Min First Deposit</p>
                            <p class="headline font-weight-bold" style="color: black">$1,000 - $10K</p>
                            <v-divider width="90"></v-divider>
                            <p>
                                <v-icon color="green" small>mdi-check</v-icon><b>{{ $standardAnnualPercentage }}% annual
                                    profit</b>

                            </p>


                            <p class="subtitle">
                                <v-icon color="green" small>mdi-check</v-icon> <b>{{ $standardPercentage }}% referral
                                    bonus</b>
                            </p>

                            <p class="subtitle">
                                <v-icon color="green" small>mdi-check</v-icon> <b>10% RMR</b>
                            </p>

                            <p class="subtitle">
                                <v-icon color="green" small>mdi-check</v-icon> <b>Standard incentives</b>
                            </p>
                            <p class="subtitle">
                                <v-icon color="green" small>mdi-check</v-icon> <b>Active downlines</b>
                            </p>
                            <p class="subtitle">
                                <v-icon color="green" small>mdi-check</v-icon> <b>Referral limit</b><br>
                                <span style="font-size: 29px">
                                    <v-icon color="green">mdi-arrow-right</v-icon> &infin;
                                </span>

                            </p>
                            <v-btn outlined link href="/register" color="orange" dark class="text-normal" width="100%">Open
                                account</v-btn>
                        </v-card-text>
                    </v-card>
                </v-col>

                <v-col cols="12" md="3" sm="6" data-aos="fade-left" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
                    <v-card hover color="" tile shaped elevation="12">
                        <v-card-title>
                            <v-btn text color="teal" class="mx-auto">
                                Premium Investors
                            </v-btn>
                        </v-card-title>
                        <v-card-text class="" justify="center" align="center" dark>
                            <p class="caption mx-auto font-weight-bold">Premium Investors</p>
                            <p class="subtitle">Min First Deposit</p>
                            <p class="headline font-weight-bold" style="color: black">$10K - $100K</p>
                            <v-divider width="90"></v-divider>
                            <p>
                                <v-icon color="green" small>mdi-check</v-icon><b>{{ $premiumAnnualPercentage }}% annual
                                    profit</b>

                            </p>


                            <p class="subtitle">
                                <v-icon color="green" small>mdi-check</v-icon> <b>{{ $premiumPercentage }}% referral</b>
                            </p>

                            <p class="subtitle">
                                <v-icon color="green" small>mdi-check</v-icon> <b>12.5% RMR</b>
                            </p>

                            <p class="subtitle">
                                <v-icon color="green" small>mdi-check</v-icon> <b>Premium incentives</b>
                            </p>
                            <p class="subtitle">
                                <v-icon color="green" small>mdi-check</v-icon> <b>Active downlines</b>
                            </p>

                            <p class="subtitle">
                                <v-icon color="green" small>mdi-check</v-icon> <b>Referral limit</b><br>
                                <span style="font-size: 29px">
                                    <v-icon color="green">mdi-arrow-right</v-icon> &infin;
                                </span>

                            </p>
                            <v-btn outlined link href="/register" color="teal" dark class="text-normal" width="100%">Open
                                account</v-btn>
                        </v-card-text>
                    </v-card>
                </v-col>


                <v-col cols="12" md="3" sm="6" data-aos="fade-left" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
                    <v-card hover color="" tile shaped elevation="12">
                        <v-card-title>
                            <v-btn text color="#b17c2e" class="mx-auto">
                                Premium pro Investors
                            </v-btn>
                        </v-card-title>
                        <v-card-text class="" justify="center" align="center" dark>
                            <p class="caption mx-auto font-weight-bold">Premium pro Investors</p>
                            <p class="subtitle">Min First Deposit</p>
                            <p class="headline font-weight-bold" style="color: black">$100K+</p>
                            <v-divider width="90"></v-divider>
                            <p>
                                <v-icon color="green" small>mdi-check</v-icon><b>{{ $premiumAnnualProPercentage }}% annual
                                    profit</b>

                            </p>


                            <p class="subtitle">
                                <v-icon color="green" small>mdi-check</v-icon> <b>{{ $premiumProPercentage }}% referral
                                    bonus</b>
                            </p>

                            <p class="subtitle">
                                <v-icon color="green" small>mdi-check</v-icon> <b>15% RMR</b>
                            </p>

                            <p class="subtitle">
                                <v-icon color="green" small>mdi-check</v-icon> <b>Premium pro incentives</b>
                            </p>

                            <p class="subtitle">
                                <v-icon color="green" small>mdi-check</v-icon> <b>Active downlines</b>
                            </p>

                            <p class="subtitle">
                                <v-icon color="green" small>mdi-check</v-icon> <b>Referral limit</b><br>
                                <span style="font-size: 29px">
                                    <v-icon color="green">mdi-arrow-right</v-icon> &infin;
                                </span>

                            </p>



                            <v-btn outlined link href="/register" color="#b17c2e" dark class="text-normal" width="100%">Open
                                account</v-btn>
                        </v-card-text>
                    </v-card>
                </v-col>

                <v-col cols="12" md="3" sm="6" data-aos="fade-up" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
                    <v-card hover color="" tile shaped elevation="12">
                        <v-card-title>
                            <v-btn text color="red" class="mx-auto">
                                Introducing Broker
                            </v-btn>
                        </v-card-title>
                        <v-card-text class="" justify="center" align="center" dark>
                            <p class="caption mx-auto font-weight-bold">CFI IBs</p>
                            <p class="subtitle">Min First Deposit</p>
                            <div class="d-none d-sm-flex ">
                                <p class=" headline font-weight-bold mx-auto text-center" style="color: black">

                                    $0- $<span class="font-weight-black"
                                        style="font-size: 35px; margin-top:1px; position: absolute">&infin;</span></p>

                            </div>

                            <div class="d-flex d-sm-none">
                                <p class="mx-auto text-center headline font-weight-bold mx-auto text-center"
                                    style="color: black">$0- $<span>&infin;</span></p>
                            </div>
                            <v-divider width="90"></v-divider>
                            <div class="d-none d-sm-flex">
                                <p class="subtitle text-center mx-auto">
                                    <v-icon color="green" small>mdi-check</v-icon> <b>Annual profit <span
                                            style="font-size: 30px; position: absolute;" class="ml-1">&infin;</span></b>
                                </p>
                            </div>

                            <div class="d-flex d-sm-none">
                                <p class="subtitle text-center mx-auto">
                                    <v-icon color="green" small>mdi-check</v-icon> <b>Annual profit <span>&infin;</span></b>
                                </p>
                            </div>

                            <p>
                                <v-icon color="green" small>mdi-check</v-icon><b>RMR - <span
                                        style="color: red">(X)</span></b>

                            </p>



                            <p class="subtitle">
                                <v-icon color="green" small>mdi-check</v-icon> <b>{{$cfiPercentage}}% Referral bonus</b>
                            </p>

                            <p class="subtitle">
                                <v-icon color="green" small>mdi-check</v-icon> <b>Active downlines</b>
                            </p>

                            <p class="subtitle">
                                <v-icon color="green" small>mdi-check</v-icon> <b>IBs incentives</b>


                            </p>
                            <p class="subtitle">
                                <v-icon color="green" small>mdi-check</v-icon> <b>Referral limit</b><br>
                                <span style="font-size: 29px">
                                    <v-icon color="green">mdi-arrow-right</v-icon><span> &infin;</span>
                                </span>

                            </p>



                            <v-btn outlined link href="/register" color="red" dark class="text-normal" width="100%">Open
                                account
                            </v-btn>
                        </v-card-text>
                    </v-card>
                </v-col>
            </v-row>
        </v-container>
    </div>

    {{-- Sponsors --}}

    <v-sheet>
        <v-container>
            <v-card-title class="mt-12">
                <h3 class="display-sm-2 mx-auto">
                    SPONSORSHIPS
                </h3>
            </v-card-title>
            <v-row align="center" justify="center">
                <v-col cols="6" md="3" data-aos="fade-right" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
                    <v-card flat>
                        <v-img src="/images/34.png" class="mx-auto" width="120"></v-img>
                        <p class="text-center mt-4 font-weight-black">apoel FC</p>
                    </v-card>
                </v-col>

                <v-col cols="6" md="3" data-aos="fade-right" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
                    <v-card flat>
                        <v-img src="/images/33.jpg" class="mx-auto" width="140"></v-img>
                        <p class="text-center mt-8 font-weight-black">Vauxhall car brand</p>
                    </v-card>
                </v-col>

                <v-col cols="6" md="3" data-aos="fade-left" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
                    <v-card flat>
                        <v-img src="/images/logo-2.jpeg" class="mx-auto" width="190"></v-img>
                        <p class="text-center mt-10 font-weight-black">Cleverfxinvestor</p>
                    </v-card>
                </v-col>


                <v-col cols="6" md="3" data-aos="fade-left" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
                    <v-card flat>
                        <v-img src="/images/32.png" class="mx-auto" width="160"></v-img>
                        <p class="text-center font-weight-black">Auchan Holding</p>
                    </v-card>
                </v-col>
            </v-row>

        </v-container>
    </v-sheet>

    {{-- Paraxell --}}

    <v-sheet color="grey lighten-2" data-aos="fade-left" data-aos-offset="200" data-aos-duration="1000"
        data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
        <v-container class="mt-12">
            <v-row align="center" justify="center" class="text-center">
                <v-col cols="12" md="2">

                    <h2 class="" style="color: ">Over</h2>
                    <h1 class="display-1" style="color: red">3,000,000</h1>
                    <p>life account opened</p>
                </v-col>

                <v-col cols="12" md="2">

                    <h2 class="" style="">More than</h2>
                    <h1 class="display-1" style="color: red">10 years</h1>
                    <p>in Business</p>
                </v-col>
                <v-col cols="12" md="2">
                    <h2 class="" style="">More than</h2>
                    <h1 class="display-1" style="color: red">250</h1>
                    <p>employees globally</p>
                </v-col>
                <v-col cols="12" md="2">
                    <h2 class="" style="">Over</h2>
                    <h1 class="display-1" style="color: red">10</h1>
                    <p>Industry Awards</p>


                </v-col>

                <v-col cols="12" md="2">
                    <h2 class="">More than</h2>
                    <h1 class="display-1" style="color: red">20</h1>
                    <p>Supported languages and Countries</p>


                </v-col>
            </v-row>
        </v-container>

    </v-sheet>

    {{-- Payment Method --}}

    @include('partials._payment_method')


    {{-- Live Crypto upade --}}


    {{-- About Us --}}
    <div>
        <v-card-title class="mt-12">
            <h3 class="display-sm-2 mx-auto">
                ABOUT US
            </h3>
        </v-card-title>

        <v-container>
            <v-row>
                <v-col cols="12" md="7" data-aos="fade-right" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
                    <v-card-title class="headline">Who we are</v-card-title>
                    <p class="title font-weight-thin">
                        Cleverfxinvestor is an award-winning investment platform, providing investment services and
                        facilities to both retail and institutional investors.
                        Through its policy of providing the best possible trading conditions to its clients and allowing
                        both
                        Conservative and aggressive investors using expert advisors unrestricted access to its liquidity,
                        Cleverfxinvestor has positioned itself as the investment platform of choice for investors worldwide.
                        <v-btn class="text-none" outlined href="/about-us">Read more</v-btn>
                    </p>
                </v-col>

                <v-col cols="12" md="5" order="first" data-aos="fade-left" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50" class="d-flex d-sm-none">
                    <v-img src="/images/41.jpeg" width="500"></v-img>
                </v-col>

                <v-col cols="12" md="5" data-aos="fade-left" data-aos-duration="1000" data-aos-easing="ease-in-out"
                    data-aos-once="false" data-aos-delay="50" class="d-none d-sm-flex">
                    <v-img src="/images/41.jpeg" width="500"></v-img>
                </v-col>
            </v-row>
        </v-container>
    </div>


    <div class="mt-12">
        <v-card-title class="">
            <h3 class="display-sm-2 mx-auto text-uppercase d-none d-sm-flex">
                Live Cryptocurrency Update
            </h3>

            <h5 class="text-center  mx-auto text-uppercase d-flex d-sm-none font-weight-bold">
                Live Cryptocurrency Update
            </h5>
        </v-card-title>
        <v-subtitle class="text-center title">
            <p class="mx-auto">We provide live cryptocurrency update
            </p>
        </v-subtitle>
        <v-sheet>
            <v-container>
                <v-row>
                    <v-col cols="12" md="12" data-aos="fade-left" data-aos-duration="1000" data-aos-easing="ease-in-out"
                        data-aos-once="false" data-aos-delay="50">

                        <v-img src="/images/live-chat.jpg"></v-img>
                        <center>
                            <v-btn color="#b17c2e" dark class=" text-none" href="/live-price">Get live Crypto Udate Here!
                            </v-btn>
                        </center>
                    </v-col>
                </v-row>
            </v-container>
        </v-sheet>
    </div>

    {{-- Video component --}}

    <v-container class="mt-12">
        <h3 class="display-sm-2 mx-auto text-center">TUTORIAL VIDEOS</h3>
        <v-row justify="center" align="center">
            @foreach ($videos as $video)
                <v-col cols="12" md="4" justify="center" align="center" data-aos="fade-right" data-aos-offset="200"
                    data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
                    <iframe height="315" src="{{ $video->url }}"></iframe>
                </v-col>
            @endforeach
            {{-- <v-col cols="12" md="4" justify="center" align="center" data-aos="fade-up"
                data-aos-offset="200" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="false"
                data-aos-delay="50">
                <iframe height="315" src="https://www.youtube.com/embed/tgbNymZ7vq"></iframe>
            </v-col>
            <v-col cols="12" md="4" justify="center" align="center" data-aos="fade-left" data-aos-offset="200"
                data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
                <iframe height="315" src="https://www.youtube.com/embed/tgbNymZ7vq"></iframe>
            </v-col> --}}
        </v-row>
    </v-container>
    {{-- Gallery component --}}

    <v-container class="mt-12">
        <h3 class="display-sm-2 mx-auto text-center">GALLERY SECTION</h3>
        <v-row no-gutters>
            <v-col cols="12" md="12" justify="center" align="center">
                @foreach ($photos as $photo)

                    <v-dialog width="600px">
                        <template v-slot:activator="{ on, attrs }">
                            <v-img v-bind="attrs" v-on="on" data-aos="fade-right" data-aos-offset="200"
                                data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="false"
                                data-aos-delay="50" src="{{ asset('storage/' . $photo->image) }}"
                                style="display: inline-flex" class="mx-2" width="200"></v-img>

                        </template>

                        <v-card flat class="pa-2" color="transparent" justify="center" align="center">
                            <v-container justify="center" align="center">
                                <v-row justify="center" align="center">
                                    <v-col cols="12" justify="center" align="center">

                                        {{-- <v-btn fab small top right absolute flat
                                            color="black" dark class="mt-12">
                                            <v-icon>mdi-close</v-icon>
                                        </v-btn> --}}
                                        <v-img data-aos="fade-right" data-aos-offset="200" data-aos-duration="1000"
                                            data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50"
                                            src="{{ asset('storage/' . $photo->image) }}" style="display: inline-flex"
                                            class="mx-2">

                                        </v-img>
                                    </v-col>
                                </v-row>
                            </v-container>

                        </v-card>
                    </v-dialog>
                @endforeach

            </v-col>
        </v-row>
    </v-container>

    {{-- Review component --}}
    <v-card flat class="mt-12">
        <v-container>
            <h3 class="display-sm-2 mx-auto text-center">
                INVESTORS FEEDBACK
            </h3>

            <v-row justify="center" align="center">
                <v-col cols="12" md="12" justify="center" align="center">
                    <v-carousel cycle height="350" hide-delimiter-background>
                        @foreach ($reviews as $review)
                            <v-carousel-item class="mt-8">
                                <v-avatar size="60">
                                    @if ($review->profile_pic)
                                        <v-img src="{{ asset('storage/' . $review->profile_pic) }}" alt="avatar"></v-img>
                                    @else
                                        <v-img src="/images/avatar.png" alt="avatar"></v-img>
                                    @endif
                                </v-avatar>
                                <p class="title" style="color: blue">{{ $review->name }}</p>
                                <v-rating value="{{ $review->rating }}" color="#b17c2e"></v-rating>
                                <p style="width: 40%">
                                    {{ $review->message }}
                                </p>
                            </v-carousel-item>
                        @endforeach

                    </v-carousel>
                </v-col>
            </v-row>
        </v-container>
    </v-card>

    <v-container>
        <center>
      {{-- @if (Auth::check()) --}}
         <v-dialog v-model="dialog2" width="600px">
             <template v-slot:activator="{ on, attrs }">

                 <v-btn color="#b17c2e" dark v-bind="attrs" v-on="on">
                     <v-icon>mdi-chat</v-icon> Give Feedback
                 </v-btn>
             </template>
             <v-card>
                 <users-feedback></users-feedback>
             </v-card>
         </v-dialog>
       {{-- @endif --}}
        </center>
    </v-container>

@endsection
