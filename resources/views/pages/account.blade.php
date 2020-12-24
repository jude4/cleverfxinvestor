@extends('layouts.master')

@section('title', 'Account type')


@section('content')
@livewire('nav-bar')
    <v-container>
        <v-card-title class="mt-12">
            <h5 class="mx-auto d-flex d-sm-none">
                ACCOUNT / PARTNERSHIP TYPES
            </h5>
            <h3 class="mx-auto d-none d-sm-flex">
                ACCOUNT / PARTNERSHIP TYPES
            </h3>
        </v-card-title>
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

    {{-- Payment Method --}}

    <payment-method inline-template>
        <div>
            <v-card-title class="mt-12">
                <h3 class="display-sm-2 mx-auto">
                    PAYMENT METHODS
                </h3>
            </v-card-title>
            <v-sheet>
                <v-container>
                    <v-row align="center" justify="center" class="d-none d-sm-flex">
                        <v-col cols="12" md="12">

                            <v-carousel cycle height="150" interval="8000" hide-delimiter-background>

                                <v-carousel-item>
                                    <v-row align="center" justify="center">
                                        <v-col cols="12" md="3" align="center" justify="center">
                                            <a href="/register">
                                                <v-img src="/images/paypal.png" width="120"></v-img>
                                            </a>
                                        </v-col>

                                        <v-col cols="12" md="3" align="center" justify="center">
                                            <a href="/register">
                                                <v-img src="/images/112.png" class="mt-2" width="150"></v-img>
                                            </a>


                                        </v-col>

                                        <v-col cols="12" md="3" align="center" justify="center">
                                            <a href="/register">
                                                <v-img src="/images/113.png" width="160"></v-img>
                                            </a>
                                        </v-col>

                                        <v-col cols="12" md="3" align="center" justify="center">
                                            <a href="/register">
                                                <v-img src="/images/114.png" width="150"></v-img>
                                            </a>
                                        </v-col>

                                    </v-row>
                                </v-carousel-item>

                                <v-carousel-item>
                                    <v-row align="center" justify="center" class="">

                                        <v-col cols="12" md="3" align="center" justify="center">
                                            <a href="/register">
                                                <v-img src="/images/111.png" width="120"></v-img>
                                            </a>
                                        </v-col>

                                        <v-col cols="12" md="3" align="center" justify="center">
                                            <a href="/register">
                                                <v-img src="/images/115.png" width="150"></v-img>
                                            </a>
                                        </v-col>


                                        <v-col cols="12" md="3" align="center" justify="center">
                                            <a href="/register">
                                                <v-img src="/images/116.jpg" width="150"></v-img>
                                            </a>
                                        </v-col>

                                        <v-col cols="12" md="3" align="center" justify="center">
                                            <a href="/register">
                                                <v-img src="/images/117.png" width="150"></v-img>
                                            </a>
                                        </v-col>

                                    </v-row>
                                </v-carousel-item>


                                <v-carousel-item>
                                    <v-row align="center" justify="center" class="mt-n3">

                                        <v-col cols="12" md="4" align="center" justify="center">
                                            <a href="/register">
                                                <v-img src="/images/117.png" width="150"></v-img>
                                            </a>
                                        </v-col>



                                        <v-col cols="12" md="4" align="center" justify="center">
                                            <a href="/register">
                                                <v-img src="/images/neteller.jpeg" width="150"></v-img>
                                            </a>
                                        </v-col>


                                        <v-col cols="12" md="4" align="center" justify="center">
                                            <a href="/register">
                                                <v-img src="/images/bitcion.jpeg" width="150"></v-img>
                                            </a>
                                        </v-col>

                                    </v-row>
                                </v-carousel-item>
                            </v-carousel>
                        </v-col>
                    </v-row>

                    <v-row align="center" justify="center" class="d-flex d-sm-none">
                        <v-carousel cycle height="150" interval="8000" hide-delimiter-background>
                            <v-carousel-item>
                                <v-row align="center" justify="center" class="mt-4">
                                    <v-col cols="12" md="3" align="center" justify="center">
                                        <a href="/register">
                                            <v-img src="/images/paypal.png" class="mt-2" width="150"></v-img>
                                        </a>
                                    </v-col>

                                </v-row>
                            </v-carousel-item>

                            <v-carousel-item>
                                <v-row align="center" justify="center">
                                    <v-col cols="12" md="3" align="center" justify="center">
                                        <a href="/register">
                                            <v-img src="/images/112.png" class="mt-2" width="150"></v-img>
                                        </a>
                                    </v-col>

                                </v-row>
                            </v-carousel-item>

                            <v-carousel-item>
                                <v-row align="center" justify="center" class="mt-8">
                                    <v-col cols="12" md="3" align="center" justify="center">
                                        <a href="/register">
                                            <v-img src="/images/113.png" width="160"></v-img>
                                        </a>
                                    </v-col>

                                </v-row>
                            </v-carousel-item>
                            <v-carousel-item>
                                <v-row align="center" justify="center" class="mt-8">
                                    <v-col cols="12" md="3" align="center" justify="center">
                                        <a href="/register">
                                            <v-img src="/images/114.png" width="150"></v-img>
                                        </a>
                                    </v-col>
                                </v-row>
                            </v-carousel-item>
                            <v-carousel-item>
                                <v-row align="center" justify="center" class="mt-12">
                                    <v-col cols="12" md="4" align="center" justify="center">
                                        <a href="/register">
                                            <v-img src="/images/115.png" width="150"></v-img>
                                        </a>
                                    </v-col>

                                </v-row>
                            </v-carousel-item>
                            <v-carousel-item>
                                <v-row align="center" justify="center" class="mt-8">
                                    <v-col cols="12" md="4" align="center" justify="center">
                                        <a href="/register">
                                            <v-img src="/images/116.jpg" width="150"></v-img>
                                        </a>
                                    </v-col>
                                </v-row>
                            </v-carousel-item>
                            <v-carousel-item>
                                <v-row align="center" justify="center" class="mt-10">
                                    <v-col cols="12" md="4" align="center" justify="center">
                                        <a href="/register">
                                            <v-img src="/images/117.png" width="150"></v-img>

                                        </a>

                                    </v-col>
                                </v-row>
                            </v-carousel-item>
                        </v-carousel>
                    </v-row>

                </v-container>
            </v-sheet>
        </div>
    </payment-method>
@endsection
