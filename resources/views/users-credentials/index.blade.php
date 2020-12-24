@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="text-center">Users Personnal Credentials</h3>
      @livewire('user-personnal-credential', ['credentials' => $credentials])
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
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

    </style>
@endsection
