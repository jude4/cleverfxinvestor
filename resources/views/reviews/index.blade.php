@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h2 class="text-center">Reviews</h2>
        <i class="fa fa-feed fa-2x"></i>
        <p>
           
        <a href="{{ route('reviews.create') }}" class="pull-right btn btn-success">Add </a>
              
        </p>
    </div>

    <div class="container">
        @livewire('review-component')
    </div>
@endsection

@section('script')
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                reviews: false
            }
        });
    </script>
    <style>
        .avatar {
            vertical-align: middle;
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

        .checked {
            color: #b17c2e;
        }
    </style>
@endsection