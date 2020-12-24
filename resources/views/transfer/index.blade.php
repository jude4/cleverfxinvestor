@extends('layouts.app')

@section('content')
<br>
   <div class="content" >
    <h1 class="pull-right">
        <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('transfer-funds.create') }}">Transfer fund</a>
    </h1>
    <div class="clearfix"></div>

    @include('flash::message')

    <div class="clearfix"></div>
    <div class="box box-primary">
        <div class="box-body" style="background-color: whitesmoke">
           
        </div>
    </div>

    <div class="text-center">

    </div>
</div>

    
@endsection

@section('script')
    <script>
        var app = new Vue({
            el: '#app',
            
        });
    </script>
@endsection