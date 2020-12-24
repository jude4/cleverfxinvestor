@extends('layouts.master')

@section('title', 'Sign in')

@section('content')

{{-- Navbar --}}
{{-- @include('partials._navbar') --}}
@livewire('nav-bar')

<sign-in inline-template>
    <div class="mt-12">
        <v-container
        data-aos="fade-up" data-aos-offset="200" data-aos-duration="1000"
                data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50"
        >
            <v-row>
                <v-col cols="12" md="12">
                    <v-sheet max-width="600" class="mx-auto" color="grey lighten-4">
                        <v-card>
                            <v-card-title class="justify-center">
                                <h3>
                                    Login
                                </h3>
                            </v-card-title>
                            <v-card-text>
                                <v-form ref="form" method="POST" action="{{ route('login') }}" v-model="valid" lazy-validation>
                                    @csrf
                                    <v-row>
                                        <v-col cols="12" sm="12" md="12">
                                            @error('email')
                                            <v-alert outlined type="error">

                                                {{ $message }}
                                            </v-alert>
                                            @enderror

                                            @error('password')
                                            <v-alert outlined type="error">

                                                {{ $message }}
                                            </v-alert>
                                            @enderror

                                            <v-text-field type="email" autofocus  name="email" outlined required label="E-mail Address" prepend-icon="mdi-email" value="{{ old('email') }}" color="#334252" :rules="[
                                                v => !!v || 'Email is required'
                                            ]" required></v-text-field>

                                        </v-col>
                                        <v-col cols="12" sm="12" md="12">
                                            <v-text-field id="password" :type="
                                                showPassword
                                                    ? 'text'
                                                    : 'password'
                                            " outlined name="password" label="Password" prepend-icon="mdi-lock" :append-icon="
                                                showPassword
                                                    ? 'mdi-eye'
                                                    : 'mdi-eye-off'
                                            " @click:append="
                                                showPassword = !showPassword
                                            " color="#334252" :rules="[
                                                v =>
                                                    !!v ||
                                                    'Password is required'
                                            ]" required></v-text-field>
                                            <v-checkbox label="Remeber Me" color="#b17c2e" v-model="rememberMe" name="remember">
                                            </v-checkbox>
                                        </v-col>
                                    </v-row>

                                    <v-card-actions>
                                        <v-btn width="100%" color="#b17c2e" dark type="submit" @click="login">
                                            Login
                                        </v-btn>
                                    </v-card-actions>
                                </v-form>
                            </v-card-text>
                        </v-card>
                        <div class="text-center">
                            <v-btn text small link color="blue" class="text-lowercase" href="{{ route('password.request') }}">Forgot your password?</v-btn>
                            <br>
                            Don't have an account?<v-btn text small color="red" link href="{{ route('register') }}">Sign-up</v-btn>
                        </div>
                    </v-sheet>
                </v-col>
            </v-row>
        </v-container>
    </div>
</sign-in>

@endsection
