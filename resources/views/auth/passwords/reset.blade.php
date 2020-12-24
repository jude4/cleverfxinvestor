@extends('layouts.master')

@section('title', 'Reset Your Password')


@section('content')
<email-bar inline-template>
    <div>
        <v-container class=""
        data-aos="fade-up" data-aos-offset="200" data-aos-duration="1000"
                data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50"
        >
            <v-row>
                <v-col cols="12" md="12">
                    <v-sheet max-width="600" class="mx-auto my-12" color="grey lighten-4">
                        <v-card>
                            <v-card-title class="justify-center pb-16">
                                <h3>
                                    Reset Password
                                </h3>
                            </v-card-title>
                            <v-card-text>
                                <v-form method="POST" action="{{ route('password.update') }}">
                                   @csrf
                                    
                                    <input type="hidden" name="token" value="{{ $token }}">

                                    <v-row>
                                        <v-col cols="12" sm="12" md="12">
                                            <v-text-field type="email" value="{{ old('email') }}" name="email" outlined label="E-mail Address" prepend-icon="mdi-email" color="#334252" :rules="[
                                                v => !!v || 'Email is required'
                                            ]" required></v-text-field>
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
                                        <v-btn width="100%" color="#b17c2e" outlined dark type="submit">
                                            Reset Password
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

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
