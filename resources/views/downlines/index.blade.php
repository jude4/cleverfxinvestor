@extends('layouts.app')

@section('content')
    <br><br>
    <section class="content-header">
        <v-breadcrumbs :items="items" large></v-breadcrumbs>
        <h1 class="pull-left">My Downline(s)</h1>


    </section>

    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body" style="background-color: whitesmoke">
              @include('downlines.table')
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
        })
    </script>
@endsection