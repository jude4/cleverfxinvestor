@extends('layouts.master')

@section('title', 'About us')

@section('content')


    {{-- About us component --}}

    @livewire('nav-bar')
    <div>
        <v-card-title class="mt-12">
            <h2 class="display-sm-2 mx-auto" data-aos="fade-down" data-aos-offset="200" data-aos-duration="1000"
                data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
                ABOUT US
            </h2>
        </v-card-title>

        <v-container>
            <v-row no-gutters>
                <v-col cols="12" md="7" data-aos="fade-right" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
                    <v-card-title class="headline">Who we are</v-card-title>
                    <p class="title font-weight-thin">
                        Cleverfxinvestor is an award-winning investment platform, providing investment services and
                        facilities to both retail and institutional investors.
                        Through its policy of providing the best possible investment conditions to its clients and allowing
                        both
                        Conservative and aggressive investors using expert advisors unrestricted access to its liquidity,
                        Cleverfxinvestor has positioned itself as the investment platform of choice for investors worldwide.
                    </p>
                </v-col>

                <v-col cols="12" md="5" order="first" class="d-flex d-sm-none" data-aos="fade-left" data-aos-offset="200"
                    data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
                    <v-img src="/images/41.jpeg" width="500"></v-img>
                </v-col>

                <v-col cols="12" md="5" class="d-none d-sm-flex" data-aos="fade-left" data-aos-offset="200"
                    data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
                    <v-img src="/images/41.jpeg" width="500"></v-img>
                </v-col>
            </v-row>

            <v-row class="mt-12" no-gutters>
                <v-col cols="12" md="5">
                    <div class="d-none d-sm-flex" data-aos="fade-right" data-aos-offset="200" data-aos-duration="1000"
                        data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
                        <v-img src="/images/unique.jpg" class="d-flex mt-4" height="350" width="500"></v-img>

                    </div>

                    <div class="d-flex d-sm-none" data-aos="fade-right" data-aos-offset="200" data-aos-duration="1000"
                        data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
                        <v-img src="/images/unique.jpg" class="d-flex mt-4" width="500"></v-img>
                    </div>
                </v-col>

                <v-col cols="12" md="7" data-aos="fade-left" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
                    <v-card-title class="headline">What we provide</v-card-title>
                    <v-card-text class="title font-weight-thin">
                        <span></span>
                        Cleverfxinvestor offers various accounts types and incentives to facilitate individuals and
                        institutional clients to invest.
                        All Retail, institutional and White Label clients(agents) have the opportunity to access various
                        incentives and liquidity via state of the art automated investment platforms.

                        Cleverfxinvestor provides an unparalleled variety of account options that clients can select to
                        enjoy a tailored investment experience that perfectly suits their targets and goals.
                        Coupled with superior investment opportunities and lightning-fast execution, Cleverfxinvestor
                        provides all
                        the tools and services needed for investors and agents of any level to realise their financial
                        ambitions.
                    </v-card-text>

                    <v-card-title class="headline">We Believe in Education</v-card-title>

                    <v-card-text>
                        <p class="title font-weight-thin">
                            Our philosophy is simple: Knowledge is Power. Therefore we endeavour to empower and educate our
                            clients so they will receive the best returns of their time and investment through direct
                            firsthand knowledge.
                        </p>
                    </v-card-text>
                </v-col>

            </v-row>

            <v-row>
                <v-col cols="12" md="12">
                    <v-card flat>
                        <v-card-text class="d-none d-sm-flex" data-aos="fade-right" data-aos-offset="200"
                            data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="false"
                            data-aos-delay="50">
                            <h3 class="title text-center ">
                                <span style="font-size: 90px; color: red; position: absolute; opacity: 0.6; "
                                    class="mt-2 ml-n6">&quot;</span>
                                Not just a mission, it's a promise

                                Our Mission is To Provide the Best investment Service to our Clients by maintaining a <span
                                    class="mt-2"
                                    style="font-size: 90px; color: red; position: absolute; opacity: 0.6; ">&quot;</span>
                                Superb Client-Centric Culture.
                                In this way, we will achieve our vision of maintaining our position as an investing platform
                                known for our Superior Customer Services
                                aiming at eradicating Unemployment world wide creating a potential Network to Boost it’s
                                Client’s net worth.
                                Cleverfxinvestor also aims at building trust and a larger portfolio for our clients to
                                enhance their profit and cashouts.
                                At Cleverfxinvestor we Believe our performance will speak for itself. We are confident that
                                our clients will come
                                to rely on our firm for unparalleled investment services.
                            </h3>
                        </v-card-text>

                        <v-card-text class="d-flex d-sm-none">
                            <div data-aos="fade-right" data-aos-offset="200" data-aos-duration="1000"
                                data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
                                <h3 class="title text-center ">
                                    <span style="font-size: 50px; color: red; position: absolute; opacity: 0.6; "
                                        class=" ml-n4">&quot;</span>
                                    Not just a mission, it's a promise<span class=""
                                        style="font-size: 50px; color: red; position: absolute; opacity: 0.6; ">&quot;</span>

                                    Our Mission is To Provide the Best investment Service to our Clients by maintaining a
                                    Superb Client-Centric Culture.
                                    In this way, we will achieve our vision of maintaining our position as an investing
                                    platform known for our Superior Customer Services
                                    aiming at eradicating Unemployment world wide creating a potential Network to Boost it’s
                                    Client’s net worth.
                                    Cleverfxinvestor also aims at building trust and a larger portfolio for our clients to
                                    enhance their profit and cashouts.
                                    At Cleverfxinvestor we Believe our performance will speak for itself. We are confident
                                    that our clients will come
                                    to rely on our firm for unparalleled investment services.
                                </h3>

                            </div>
                        </v-card-text>
                    </v-card>
                </v-col>
            </v-row>
        </v-container>
    </div>

    {{-- Payment method component --}}

    @include('partials._payment_method')
@endsection
