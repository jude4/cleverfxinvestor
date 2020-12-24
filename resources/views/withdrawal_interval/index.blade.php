@extends('layouts.app')

@section('content')
    <section class="content-header">
    <v-breadcrumbs :items="items" large></v-breadcrumbs>
   
    <h1 class="pull-left">Users Withdrawal interval</h1>
</section>
<div class="content">
    <div class="clearfix"></div>

    @include('flash::message')

    <div class="clearfix"></div>
    <div class="panel">
        <div class="panel-body">
           {{-- @include('withdrawal_interval.table') --}}
           @livewire('users-withdrawal-interval')
        </div>
    </div>

    <div class="text-center">

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