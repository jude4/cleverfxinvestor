@extends('layouts.app')

@section('content')
    <div class="container">
        @include('flash::message')
        <h3 class="text-center">{{ ucfirst($credential->user()->first()->name) }} Personnal Credentials</h3>
        <div class="row">
            <div class="cols-12 col-md-6">
                <div class="panel">
                    <div class="panel-heading">
                        <center>IDENTITY PROOF</center>
                    </div>
                    <div class="panel-body">
                        <center>
                            <img src="{{ asset('storage/' . $credential->identity_proof) }}" height="30%" width="60%" />

                        </center>
                    </div>
                </div>


            </div>

            <div class="cols-12 col-md-6">
                <div class="panel">
                    <div class="panel-heading">
                        <center>RESIDENCE PROOF</center>
                    </div>
                    <div class="panel-body">
                        <center>
                            <img src="{{ asset('storage/' . $credential->residence_proof) }}" height="30%" width="60%" />
                        </center>
                    </div>
                </div>


            </div>

            <div class="panel-footer">
                @if ($credential->status)
                    <a href="{{ url('users-credentials/confirm') }}" class="btn btn-success" disabled>
                        <i class="fa fa-check"></i> Confirmed
                    </a>
                @else

                    <a href="{{ url('users-credentials/confirm/'.$credential->id) }}" class="btn btn-danger">
                        <i class="fa fa-close"></i> Pending
                    </a>
                @endif
            </div>

        </div>
    </div>
@endsection

@section('content')
    <script>
        var app = new Vue({
            el: '#app'
        });

    </script>
@endsection
