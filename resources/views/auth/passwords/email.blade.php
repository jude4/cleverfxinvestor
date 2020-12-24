@extends('layouts.master')

@section('title', 'Reset Password')

@section('content')
{{-- Navbar --}}
{{-- @include('partials._navbar') --}}
@livewire('nav-bar')
<email-bar inline-template>
    <div>
        <v-container class=""
        data-aos="fade-up" data-aos-offset="200" data-aos-duration="1000"
                data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50"
        >
            <v-row>
                <v-col cols="12" md="12">
                    <v-sheet max-width="600" class="mx-auto my-12" style="padding-bottom: 340px" color="grey lighten-4">
                        <v-card>
                            @if (session('status'))
                            <v-alert type="success" outlined role="alert">
                                {{ session('status') }}
                            </v-alert>
                            @endif

                            @error('email')
                                <v-alert type="error" outlined>
                                    {{ $message }}
                                </v-alert>
                            @enderror
                            <v-card-title class="justify-center pb-16">
                                <h3>
                                    Reset Password
                                </h3>
                            </v-card-title>
                            <v-card-text>
                                <v-form method="POST" action="{{ route('password.email') }}">
                                   @csrf

                                    <v-row>
                                        <v-col cols="12" sm="12" md="12">
                                            <v-text-field type="email" value="{{ old('email') }}" name="email" outlined label="E-mail Address" prepend-icon="mdi-email" color="#334252" :rules="[
                                                v => !!v || 'Email is required'
                                            ]" required></v-text-field>
                                        </v-col>
                                    </v-row>

                                    <v-card-actions>
                                        <v-btn width="100%" color="#b17c2e" outlined dark type="submit">
                                            Send Password Reset Link
                                        </v-btn>
                                    </v-card-actions>
                                </v-form>
                            </v-card-text>
                        </v-card>
                    </v-sheet>
                </v-col>
            </v-row>
        </v-container>
    </div>
</email-bar>
@endsection
