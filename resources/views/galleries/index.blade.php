@extends('layouts.app')

@section('content')

    <div class="container">
        <h2 class="text-center">Gallery</h2>
         <div class="text-center">
            <i class="fa fa-camera fa-2x"></i>
        </div>
    </div>
    
    @livewire('gallery-upload')
    
@endsection

@section('script')
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                //
            }
        });

    </script>
@endsection
