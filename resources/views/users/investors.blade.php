@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="text-center">
            Account Profile
        </h3>
        <div class="row">
            <div class="cols-12 col-md-5">
                <div class="panel">
                    <div class="panel-heading">
                        <center>
                            @if ($user->profile_pic)
                                <img src="{{ asset('storage/' . $user->profile_pic) }}" class="avatar" />

                            @else
                                <img src="/images/avatar.png" class="avatar" />
                            @endif

                        </center>
                    </div>
                    <div class="panel-body">
                        <ul class="" style="padding: 20px">
                            <li><b>FULL NAME: </b> <i> {{ $user->name }}</i></li>
                            <li><b>USERNAME: </b> <i>{{ $user->username }}</i></li>
                            <li><b>EMAIL ADDRESS: </b> <i>{{ $user->email }}</i></li>
                            <li><b>CONTACT INFO: </b> <i>{{ $user->phone_no }}</i></li>
                            <li><b>REFERRAL LINK: </b> <i>{{ $user->referrals()->first()->referral_link }}</i></li>
                        </ul>
                    </div>


                </div>

                <div class="panel">
                    <div class="panel-body">
                        <ul class="" style="padding: 20px">
                            <li><b>NEXT OF KINS(NAME):</b> <i>{{ $user->credential()->first()->name }}</i></li>
                            <li><b>NEXT OF KINS(E-MAIL ADDRESS): </b><i>{{ $user->credential()->first()->email }}</i></li>
                            <li><b>RELATIONSHIP WITH NEXT OF KINS:</b>
                                <i>{{ $user->credential()->first()->relationship }}</i>
                            </li>
                            <li><b>PHONE NUMBER OF NEXT OF KINS:</b> <i>{{ $user->credential()->first()->phone }}</i></li>
                            <li><b>BENEFICIARY: </b><i>{{ $user->credential()->first()->beneficiary }}</i></li>
                            <li><b>ADDRESS OF NEXT OF KINS:</b> <i>{{ $user->credential()->first()->address }}</i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="cols-12 col-md-7">
                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="text-center">
                            Personnal Credentials
                        </h4>
                    </div>
                    <div class="panel-body">
                        <center>
                            <p>IDENTITY PROOF</p>
                            @if ($user->credential->first()->identity_prof)
                                <div style="margin-top: 20%; margin-bottom: 20%">
                                    <i class="fa fa-image fa-3x"></i>
                                    <p>No image</p>
                                    <p class="text-danger">Please provide the font and back of valid photo
                                        ID(Passport, Driver's Licenses, National identification Card, e.t.c)
                                        Each document must show all 4 corners
                                    </p>

                                    <p>

                                        <a href="{{ route('credentials.index') }}" class="btn btn-success">upload</a>
                                    </p>
                                @else
                                    <center>
                                        <img src="{{ asset('storage/' . $user->credential()->first()->identity_proof) }}"
                                            height="30%" width="60%" />

                                    </center>

                            @endif
                        </center>
                    </div>
                    <hr>
                    <div class="panel-body">
                        <center>
                            <p>RESIDENCE PROOF</p>
                            @if ($user->credential->first()->identity_prof)
                                <div style="margin-top: 20%; margin-bottom: 20%">
                                    <i class="fa fa-image fa-3x"></i>
                                    <p>No image</p>
                                    <p class="text-danger">Please provide the font and back of valid photo
                                        ID(Passport, Driver's Licenses, National identification Card, e.t.c)
                                        Each document must show all 4 corners

                                    </p>
                                    <p>

                                        <a href="{{ route('credentials.index') }}" class="btn btn-success">upload</a>
                                    </p>
                                @else
                                    <center>
                                        <img src="{{ asset('storage/' . $user->credential()->first()->residence_proof) }}" height="30%"
                                            width="60%" />
                                    </center>
                            @endif
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        var app = new Vue({
            el: '#app'
        });

    </script>

    <style>
        .avatar {
            vertical-align: middle;
            width: 80px;
            height: 80px;
            border-radius: 50%;
        }

    </style>
@endsection
