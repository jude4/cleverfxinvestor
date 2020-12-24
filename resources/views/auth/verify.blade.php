@extends('layouts.master')

@section('title', 'E-mail verification')

@section('content')
@livewire('nav-bar')
<v-container
data-aos="fade-up" data-aos-offset="200" data-aos-duration="1000"
                data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50"
>
    <v-row justify="center" align="center">
        <v-col cols="12" md="8">
            <v-card hover width="600" class="card mt-12">
                <v-card-text>
                    <v-card-title class="">
                        <h3 class="font-weight-bold">{{ __('Verify Your Email Address') }}</h3>
                    </v-card-title>
    
                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif
    
                        {{ __('Before proceeding, please check your email for a verification link.') }}
                        {{ __('If you did not receive the email') }},
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <v-btn type="submit" color="#b17c2e" dark>{{ __('click here to request another') }}</v-btn>.
                        </form>
                    </div>

                </v-card-text>
            </v-card>
        </v-col>
    </v-row>
</v-container>
@endsection
