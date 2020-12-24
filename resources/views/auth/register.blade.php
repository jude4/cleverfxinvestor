@extends('layouts.master')

@section('title', 'Create Account')

@section('content')
{{-- Navbar --}}
{{-- @include('partials._navbar') --}}
@livewire('nav-bar')
<sign-up inline-template>
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
                                    Create Account
                                </h3>
                            </v-card-title>
                            <v-card-text>

                                <v-form method="POST" action="{{ route('register') }}" ref="form">
                                    @csrf
                                    <v-row>
                                        <v-col cols="12" sm="12" md="12">
                                            <v-text-field type="text" value="{{ old('name') }}" value="{{ old('name') }}" outlined label="Full Name" name="name" prepend-icon="mdi-account" color="#334252" :rules="nameRules" required></v-text-field>

                                            @error('name')
                                            <div style="color: red" class="text-center text-danger">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                            @enderror
                                        </v-col>
                                        <v-col cols="12" sm="12" md="12">
                                            <v-text-field type="text" value="{{ old('username') }}" value="{{ old('username') }}" outlined label="Username" name="username" prepend-icon="mdi-account-plus" color="#334252" required></v-text-field>

                                            @error('username')
                                            <div style="color: red" class="text-center text-danger">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                            @enderror
                                        </v-col>
                                        <v-col cols="12" sm="12" md="12">
                                            <v-text-field type="email" value="{{ old('email') }}" value="{{ old('email') }}" outlined name="email" label="E-mail Address" prepend-icon="mdi-email" color="#334252" :rules="emailRules" required></v-text-field>

                                            @error('email')
                                            <div style="color: red" class="text-center text-danger">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                            @enderror
                                        </v-col>

                                        <v-col cols="12" sm="12" md="12">
                                            <v-text-field :type="
                                                showPassword
                                                    ? 'text'
                                                    : 'password'
                                            " v-model="password" outlined name="password" label="Password" prepend-icon="mdi-lock" :append-icon="
                                                showPassword
                                                    ? 'mdi-eye'
                                                    : 'mdi-eye-off'
                                            " @click:append="
                                                showPassword = !showPassword
                                            " color="#334252" :rules="passwordRules" required></v-text-field>

                                            @error('password')
                                            <div style="color: red" class="text-center text-danger">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                            @enderror
                                        </v-col>
                                        <v-col cols="12" sm="12" md="12">
                                            <v-text-field :type="
                                                showConfirmPassword
                                                    ? 'text'
                                                    : 'password'
                                            " v-model="password_confirmation" outlined name="password_confirmation" label="Confirm Password" prepend-icon="mdi-lock" :append-icon="
                                                showConfirmPassword
                                                    ? 'mdi-eye'
                                                    : 'mdi-eye-off'
                                            " @click:append="
                                                showConfirmPassword = !showConfirmPassword
                                            " color="#334252" :rules="confirmPasswordRules" required></v-text-field>
                                        </v-col>
                                    </v-row>

                                    <v-card-actions>
                                        <v-btn width="100%" color="#b17c2e" dark type="submit">
                                            Sign up
                                        </v-btn>
                                    </v-card-actions>
                                </v-form>
                            </v-card-text>
                        </v-card>
                        <div class="text-center">
                            <v-btn text small link color="blue" class="text-lowercase" href="{{ route('password.request') }}">Forgot your password?</v-btn>
                            <br>
                            Don't have an account?<v-btn text small color="red" link href="{{ route('login') }}">Sign-in</v-btn>
                        </div>

                    </v-sheet>
                </v-col>
            </v-row>
        </v-container>
    </div>
</sign-up>

@endsection
