@extends('layouts.app')

@section('content')
    <br>
    <v-container>
        @include('flash::message')
        <v-row>


            <div class="col-xs-12 col-sm-12 col-md-12" hover="true">
                <v-card hover="true">
                    <v-card-title>
                        <h3 class="display-5"><i class="fa fa-user-circle-o"></i> UPDATE PROFILE</h3>
                    </v-card-title>
                    <v-divider></v-divider>


                    <v-card-text>
                        <form action="{{ url('update_profile/store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <v-card-text>
                                <v-text-field type="text" name="name" label="Full Name" prepend-icon="mdi-account-circle"
                                    required value="{{ Auth::user()->name }}"></v-text-field>
                            </v-card-text>
                            @if ($errors->has('name'))
                                <p class="help is-danger text-danger text-center">{{ $errors->first('name') }}</p>
                            @endif

                            <v-card-text>
                                <v-text-field type="text" name="username" label="Username" prepend-icon="mdi-account"
                                    required value="{{ Auth::user()->username }}"></v-text-field>
                            </v-card-text>
                            @if ($errors->has('username'))
                                <p class="help is-danger text-danger text-center">{{ $errors->first('username') }}</p>
                            @endif


                            <v-card-text>
                                <v-text-field label="Phone Number" name="phone_no" prepend-icon="fa fa-address-book"
                                    required type="tel" value="{{ Auth::user()->phone_no }}"></v-text-field>
                            </v-card-text>
                            @if ($errors->has('phone_no'))
                                <p class="help is-danger text-danger text-center">{{ $errors->first('phone_no') }}</p>
                            @endif

                    </v-card-text>

                   
                    <v-card-actions>
                        <v-spacer></v-spacer>
                        <input type="submit" class="btn btn-primary btn-sm" value="Update">
                    </v-card-actions>


                    </form>
                    </v-card-text>

                </v-card>
            </div>
        </v-row>
    </v-container>


@endsection

@section('script')
    <script>
        var app = new Vue({
            el: '#app',

        });

    </script>

@endsection
