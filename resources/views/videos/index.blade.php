@extends('layouts.app')

@section('content')

    <div class="container">
       
        <h2 class="text-center">
          Videos
        </h2>
         <div class="text-center">
            <i class="fa fa-video-camera fa-2x"></i>
        </div>
    </div>
    @livewire('video-upload')
    
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
