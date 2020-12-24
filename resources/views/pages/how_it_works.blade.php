@extends('layouts.master')

@section('title', 'How it works')

@section('content')
@livewire('nav-bar')
<v-sheet  data-aos="fade-right" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
    <v-img src="/images/how-it-work.jpg" height="400px" contain></v-img>
</v-sheet>

    <div>
        <v-card-title class="mt-12">
            <h2 class="display-sm-2 mx-auto"  data-aos="fade-down" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
                HOW IT WORKS
            </h2>
        </v-card-title>
        <v-container>
            <v-timeline align-top :dense="$vuetify.breakpoint.smAndDown">
                <v-timeline align-top :dense="$vuetify.breakpoint.smAndDown">
                    <v-timeline-item   data-aos="fade-left" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50" color="blue-grey darken-4 " icon="mdi-wallet"  fill-dot>
                        <v-card color="blue-grey darken-4 " dark class="pa-2">
                            <v-card-title class="title">
                                choose and account type
                            </v-card-title>
                            <v-card-text class="white text--primary pa-4">
                                <p>choose an account type that suits your financial targets and goals.</p>
                                <v-btn color="blue-grey darken-4" href="/register" class="mx-0" outlined>
                                    open account
                                </v-btn>
                            </v-card-text>
                        </v-card>
                    </v-timeline-item>

                    <v-timeline-item  data-aos="fade-right" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50" color="blue grey darken-4 " icon="mdi-account"  fill-dot>
                        <v-card color="blue grey darken-4 " dark class="pa-2">
                            <v-card-title class="title">
                                Register
                            </v-card-title>
                            <v-card-text class="white text--primary pa-4">
                                <p>Simply select any of the investment plan avaliable and make payment.</p>

                            </v-card-text>
                        </v-card>
                    </v-timeline-item>

                    <v-timeline-item color="blue grey darken-4 "  data-aos="fade-left" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50" icon="mdi-account-plus" fill-dot>
                        <v-card color="blue grey darken-4 " dark class="pa-2">
                            <v-card-title class="title">
                                Account verification.
                            </v-card-title>
                            <v-card-text class="white text--primary pa-4">
                                <p> All clients are required to provide the following documents for CFI account verification:

                                    <ul class="font-weight-black">
                                        <li>proof of identity(driver's license, passport or identity card)</li>
                                        <li>proof of residence/address(a recent utility bill dated within 6 months and confirming your registered address eg electricity, gas, phone , water or bank account statement )</li>
                                        <li>beneficiary details (relationship, name. address and email/mobile number.)</li>
                                    </ul>
                                </p>
                                {{-- <v-btn color="blue grey darken-4 " class="mx-0" outlined>
                                    Button
                                </v-btn> --}}
                            </v-card-text>
                        </v-card>
                    </v-timeline-item>


                    <v-timeline-item color="blue grey darken-4 "  data-aos="fade-right" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50" icon="mdi-star"  fill-dot>
                        <v-card color="blue grey darken-4 " dark class="pa-2">
                            <v-card-title class="title">
                                contact us
                            </v-card-title>
                            <v-card-text class="white text--primary pa-4">
                                <p>contact financial adviser for further assistance on how to begin your investment journey </p>
                                {{-- <v-btn color="blue grey darken-4 " class="mx-0" outlined>
                                    Button
                                </v-btn> --}}
                            </v-card-text>
                        </v-card>
                    </v-timeline-item>

                </v-timeline>

            </v-timeline>
        </v-container>
    </div>
@endsection
