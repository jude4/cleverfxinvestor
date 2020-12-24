@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="cols-12 col-md-4">
               @livewire('phone-number')
            </div>
            <div class="cols-12 col-md-8">
                 <h3>Edit Company Contact number</h3>
                @livewire('edit-phone-number')
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
@endsection
