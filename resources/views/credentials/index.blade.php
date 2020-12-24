@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="text-center">
            Personnal Credential
        </h3>

        <h4 class="alert alert-warning text-center">
            Please Note As outlined in our Terms and conditions, all clients are required to
            provide the following documents in account:
        </h4>
        <div class="row">
            @livewire('upload-proof')
            @livewire('residence-proof')
        </div>

        @livewire('document-form')
    </div>
@endsection
@section('script')
    <script>
        var app = new Vue({
            el: '#app',
        });

    </script>
@endsection
