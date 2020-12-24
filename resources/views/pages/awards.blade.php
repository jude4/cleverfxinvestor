@extends('layouts.master')

@section('title', 'Awards')
    <style>
        .certificate:hover {
            border: 2px solid #b17c2e;
        }

    </style>

@section('content')
@livewire('nav-bar')
    <v-card-title class="mt-8">
        <h2 class="display-sm-2 mx-auto"  data-aos="fade-right" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
            AWARDS
        </h2>
    </v-card-title>
    <p class="title text-center"  data-aos="fade-left" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">We are proud of</p>
    <v-card flat class="mb-6">
        <v-container>

            <v-row align="center" justify="center"  data-aos="fade-right" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50" class="d-none d-sm-flex">
                <v-col cols="12" md="12">

                    <v-carousel cycle height="460" interval="8000" hide-delimiter-background>
                        <v-carousel-item>
                            <v-row align="center" justify="center">
                                <v-col cols="12" md="4" align="center" justify="center">
                                    <div class="certificate">
                                        <a href="/images/cert-2.jpeg" target="_blank">
                                            <v-img src="/images/inter-2.jpeg" width="300" class="mt-12"></v-img>
                                        </a>

                                        {{-- <p style="">
                                            <v-img src="/images/16.png" class="mx-auto " width="80"></v-img>

                                        </p> --}}
                                        <p class="text-center ">
                                            <b>Best Investment Broker in the middle east</b>
                                        </p>
                                        <p class="text-center mt-n4">
                                            <span class="" style="text-decoration: underline; color: #b17c2e">2019
                                                Awards</span>
                                        </p>
                                    </div>
                                </v-col>

                                <v-col cols="12" md="4" align="center" justify="center">
                                    <div class="certificate">
                                        <a href="/images/cert-1.jpeg" target="_blank">
                                            <v-img src="/images/inter-1.jpeg" width="300" style="margin-top: 80px"></v-img>
                                        </a>

                                        {{-- <p style="">
                                            <v-img src="/images/12.png" class="mx-auto" width="50"></v-img>

                                        </p> --}}
                                        <p class="text-center ">
                                            <b>Best STP/ECN forex broker</b>
                                        </p>
                                        <p class="text-center mt-n4">
                                            <span class="" style="text-decoration: underline; color: #b17c2e">2020
                                                Awards</span>
                                        </p>
                                    </div>
                                </v-col>

                                <v-col cols="12" md="4" align="center" justify="center">
                                    <v-img src="/images/21.jpeg" width="180" class="mt-10"></v-img>
                                    {{-- <p style="margin-top: -70px">
                                        <v-img src="/images/13.png" class="mx-auto " width="80"></v-img>

                                    </p> --}}
                                    <p class="text-center mt-12">
                                        <b>Most Transparent investment Broker
                                        </b>
                                    </p>
                                    <p class="text-center mt-n4">
                                        <span class="" style="text-decoration: underline; color: #b17c2e">2018 Awards</span>
                                    </p>
                                </v-col>


                            </v-row>
                        </v-carousel-item>

                        <v-carousel-item>
                            <v-row align="center" justify="center">
                                <v-col cols="12" md="4" align="center" justify="center">
                                    <v-img src="/images/21.jpeg" width="180" style="margin-top: 100px"></v-img>
                                    {{-- <p style="margin-top: -70px">
                                        <v-img src="/images/13.png" class="mx-auto " width="80"></v-img>

                                    </p> --}}
                                    <p class="text-center mt-6">
                                        <b>Most Transparent investment Broker
                                        </b>
                                    </p>
                                    <p class="text-center mt-n4">
                                        <span class="" style="text-decoration: underline; color: #b17c2e">2018 Awards</span>
                                    </p>
                                </v-col>

                                <v-col cols="12" md="4" align="center" justify="center">
                                    <div class="certificate">
                                        <a href="images/united-arab.jpg" target="_blank">
                                            <v-img src="/images/gbm.jpeg" width="200" style="margin-top: 120px"></v-img>
                                        </a>
                                        <p style="font-size: 20px" class="mt-n2">
                                            &#127462;&#127466;
                                            {{-- <v-img src="/images/11.png" class="mx-auto "
                                                width="180"></v-img> --}}

                                        </p>
                                        <p class="text-center ">
                                            <b>Best Investment Brand United Arab Emirates</b>
                                        </p>
                                        <p class="text-center mt-n2">
                                            <span style="text-decoration: underline; color: #b17c2e"> 2020 Awards</span>
                                        </p>
                                    </div>
                                </v-col>

                                <v-col cols="12" md="4" align="center" justify="center">
                                    <div class="certificate">
                                        <a href="/images/cyprus.jpg" target="_blank">
                                            <v-img src="/images/gbm-cyprus.jpeg" width="200" style="margin-top: 120px">
                                            </v-img>
                                        </a>
                                        <p style="font-size: 30px" class="mt-n4">
                                            &#127464;&#127486;

                                        </p>
                                        <p class="text-center ">
                                            <b>Fastest Growing Investment Platform</b>
                                        </p>
                                        <p class="text-center mt-n2">
                                            <span class="" style="text-decoration: underline; color: #b17c2e">2020
                                                Awards</span>
                                        </p>

                                    </div>
                                </v-col>

                                {{-- <v-col cols="12" md="4" align="center" justify="center">
                                    <v-img src="/images/21.png" width="300"></v-img>
                                    <p style="margin-top: -60px">
                                        <v-img src="/images/16.png" class="mx-auto " width="80"></v-img>

                                    </p>
                                    <p class="text-center mt-10">
                                        <b>Best broker in the middle east</b>
                                    </p>
                                    <p class="text-center mt-n4">Daily forex.com <br>
                                        <span class="" style="text-decoration: underline; color: #b17c2e">2019 Awards</span>
                                    </p>
                                </v-col> --}}




                            </v-row>
                        </v-carousel-item>
                    </v-carousel>

                </v-col>
            </v-row>

            <v-row align="center" justify="center"  data-aos="fade-right" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50" class="d-flex d-sm-none mt-n12">
                <v-col cols="12" md="12">
                    <v-carousel cycle height="460" interval="8000" hide-delimiter-background>
                        <v-carousel-item>
                            <v-row align="center" justify="center">
                                <v-col cols="12" md="12" align="center" justify="center">
                                    <div class="certificate">
                                        <a href="/images/cyprus.jpg" target="_blank">
                                            <v-img src="/images/gbm-cyprus.jpeg" style="margin-top: 120px" width="200">
                                            </v-img>
                                        </a>
                                        <p style="font-size: 30px">
                                            &#127464;&#127486;

                                        </p>
                                        <p class="text-center mt-2">
                                            <b>Fastest Growing Investment Platform</b>
                                        </p>
                                        <p class="text-center mt-n4">Cyprus <br>
                                            <span class="" style="text-decoration: underline; color: #b17c2e">Cyprus 2020
                                                Awards</span>
                                        </p>

                                    </div>
                                </v-col>




                            </v-row>
                        </v-carousel-item>
                        <v-carousel-item>
                            <v-row align="center" justify="center">
                                <v-col cols="12" md="12" align="center" justify="center">
                                    <div class="certificate">
                                        <a href="/images/cert-1.jpeg" target="_blank">
                                            <v-img src="/images/inter-1.jpeg" width="280" style="margin-top: 100px"></v-img>
                                        </a>
                                        {{-- <p style="margin-top:">
                                            <v-img src="/images/12.png" class="mx-auto " width="50"></v-img>

                                        </p> --}}
                                        <p class="text-center ">
                                            <b>Best STP/ECN forex broker</b>
                                        </p>
                                        <p class="text-center mt-n4">Atoz Market <br>
                                            <span class="" style="text-decoration: underline; color: #b17c2e">2020
                                                Awards</span>
                                        </p>
                                    </div>
                                </v-col>
                            </v-row>
                        </v-carousel-item>
                        <v-carousel-item>
                            <v-row align="center" justify="center">
                                <v-col cols="12" md="12" align="center" justify="center">
                                    <v-img src="/images/21.jpeg" width="180" style="margin-top: 100px"></v-img>
                                    {{-- <p style="margin-top: -70px">
                                        <v-img src="/images/13.png" class="mx-auto " width="80"></v-img>

                                    </p> --}}
                                    <p class="text-center ">
                                        <b>
                                            Most Transparent investment Broker
                                        </b>
                                    </p>
                                    <p class="text-center mt-n4">
                                        <span class="" style="text-decoration: underline; color: #b17c2e">2020 Awards</span>
                                    </p>
                                </v-col>
                            </v-row>
                        </v-carousel-item>
                        {{-- <v-carousel-item>
                            <v-row align="center" justify="center">
                                <v-col cols="12" md="4" align="center" justify="center">
                                    <v-img src="/images/20.png" width="300" class=""></v-img>
                                    <p style="margin-top: -70px">
                                        <v-img src="/images/11.png" class="mx-auto " width="180"></v-img>

                                    </p>
                                    <p class="text-center">
                                        <b>Fast Growing Forex Trading Platform</b>
                                    </p>
                                    <p class="text-center mt-n4">globalbrandsmagazine.com <br>
                                        Cyprus<span class="" style="text-decoration: underline; color: #b17c2e"> 2020
                                            Awards</span>
                                    </p>
                                </v-col>
                            </v-row>
                        </v-carousel-item> --}}
                        <v-carousel-item>
                            <v-row align="center" justify="center">
                                <v-col cols="12" md="4" align="center" justify="center">
                                    <div class="certificate">
                                        <a href="/images/united-arab.jpg" target="_blank">
                                            <v-img src="/images/gbm.jpeg" style="margin-top: 120px" width="200"></v-img>

                                        </a>
                                        <p style="font-size: 20px">
                                            &#127462;&#127466;
                                        </p>
                                        <p class="text-center ">
                                            <b>Best Investment Brand United Arab Emirates</b>
                                        </p>
                                        <p class="text-center mt-n4">
                                            <span style="text-decoration: underline; color: #b17c2e"> 2020 Awards</span>
                                        </p>
                                    </div>
                                </v-col>
                            </v-row>
                        </v-carousel-item>
                        <v-carousel-item>
                            <v-row align="center" justify="center">
                                <v-col cols="12" md="4" align="center" justify="center">
                                    <div class="certificate">
                                        <a href="/images/cert-2.jpeg" target="_blank">
                                            <v-img src="/images/inter-2.jpeg" width="280" style="margin-top: 100px"></v-img>
                                        </a>
                                        {{-- <p style="margin-top: ">
                                            <v-img src="/images/16.png" class="mx-auto " width="80"></v-img>

                                        </p> --}}
                                        <p class="text-center">
                                            <b>Best Investment Broker in the middle east</b>
                                        </p>
                                        <p class="text-center">
                                            <span class="" style="text-decoration: underline; color: #b17c2e">2019
                                                Awards</span>
                                        </p>
                                    </div>
                                </v-col>
                            </v-row>
                        </v-carousel-item>
                    </v-carousel>
                </v-col>
            </v-row>
        </v-container>
    </v-card>

    <v-sheet  data-aos="fade-left" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
        <p class="title text-center font-weight-bold pt-4">Seen on</p>
        <v-container>
            <v-row align="center" justify="center" class="d-none d-sm-flex">
                <v-col cols="12" md="12">

                    <v-carousel cycle height="150" interval="8000" hide-delimiter-background>
                        <v-carousel-item>
                            <v-row align="center" justify="center">
                                <v-col cols="12" md="4" align="center" justify="center">
                                    <v-img src="/images/sponsor-4.jpeg" width="150"></v-img>

                                    <p class="text-center ">
                                        <b>EarnForex</b>
                                    </p>

                                </v-col>

                                <v-col cols="12" md="4" align="center" justify="center">
                                    <v-img src="/images/28.png" class="mt-2" width="150"></v-img>

                                    <p class="text-center mt-12">
                                        <b>ForexLive</b>
                                    </p>

                                </v-col>

                                <v-col cols="12" md="4" align="center" justify="center">
                                    <v-img src="/images/001.png" width="160"></v-img>

                                    <p class="text-center  ">
                                        <b>Finance Migrates</b>
                                    </p>

                                </v-col>


                            </v-row>
                        </v-carousel-item>

                        <v-carousel-item>
                            <v-row align="center" justify="center">

                                <v-col cols="12" md="4" align="center" justify="center">
                                    <v-img src="/images/sponsor-6.jpeg" width="150"></v-img>

                                    <p class="text-center mt-4">
                                        <b>Fxstreet</b>
                                    </p>

                                </v-col>



                                <v-col cols="12" md="4" align="center" justify="center">
                                    <v-img src="/images/004.png" width="150"></v-img>

                                    <p class="text-center mt-1">
                                        <b>MyFxBook</b>
                                    </p>
                                </v-col>


                                <v-col cols="12" md="4" align="center" justify="center">
                                    <v-img src="/images/sponsor-4.jpeg" width="150"></v-img>

                                    <p class="text-center">
                                        <b>EarnForex</b>
                                    </p>

                                </v-col>

                            </v-row>
                        </v-carousel-item>
                    </v-carousel>
                </v-col>
            </v-row>

            <v-row align="center" justify="center" class="d-flex d-sm-none">
                <v-carousel cycle height="150" interval="8000" hide-delimiter-background>
                    <v-carousel-item>
                        <v-row align="center" justify="center">
                            <v-col cols="12" md="4" align="center" justify="center">
                                <v-img src="/images/sponsor-4.jpeg" width="150"></v-img>

                                <p class="text-center ">
                                    <b>EarnForex</b>
                                </p>

                            </v-col>
                        </v-row>
                    </v-carousel-item>

                    <v-carousel-item>
                        <v-row align="center" justify="center">
                            <v-col cols="12" md="4" align="center" justify="center">
                                <v-img src="/images/28.png" class="mt-2" width="150"></v-img>

                                <p class="text-center mt-12">
                                    <b>ForexLive</b>
                                </p>

                            </v-col>

                        </v-row>
                    </v-carousel-item>
                    <v-carousel-item>
                        <v-row align="center" justify="center">
                            <v-col cols="12" md="4" align="center" justify="center">
                                <v-img src="/images/001.png" width="160"></v-img>

                                <p class="text-center  ">
                                    <b>Finance Migrates</b>
                                </p>

                            </v-col>
                        </v-row>
                    </v-carousel-item>
                    <v-carousel-item>
                        <v-row align="center" justify="center">
                            <v-col cols="12" md="4" align="center" justify="center">
                                <v-img src="/images/sponsor-6.jpeg" width="150"></v-img>

                                <p class="text-center mt-4">
                                    <b>Fxstreet</b>
                                </p>

                            </v-col>

                        </v-row>
                    </v-carousel-item>
                    <v-carousel-item>
                        <v-row align="center" justify="center">
                            <v-col cols="12" md="4" align="center" justify="center">
                                <v-img src="/images/004.png" width="150"></v-img>

                                <p class="text-center mt-1">
                                    <b>MyFxBook</b>
                                </p>
                            </v-col>
                        </v-row>
                    </v-carousel-item>
                    <v-carousel-item>
                        <v-row align="center" justify="center">
                            <v-col cols="12" md="4" align="center" justify="center">
                                <v-img src="/images/sponsor-4.jpeg" width="150"></v-img>

                                <p class="text-center">
                                    <b>EarnForex</b>
                                </p>

                            </v-col>
                        </v-row>
                    </v-carousel-item>
                </v-carousel>
            </v-row>

        </v-container>
    </v-sheet>



    <v-sheet>

    </v-sheet>

@endsection
