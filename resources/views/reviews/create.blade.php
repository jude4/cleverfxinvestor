@extends('layouts.app')

@section('content')
    @livewire('create-review')
@endsection

@section('script')
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                starOne: false,
                starTwo: false,
                starThree: false,
                starFour: false,
                starFive: false,
            }
        })
    </script>

    <style>
        .checked {
            color: #b17c2e;
        }
         .avatar {
            vertical-align: middle;
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }
    </style>
@endsection