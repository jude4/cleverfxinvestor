@extends('layouts.app')

@section('content')
    <section class="content-header">

        <h1 class="pull-left">Newsletters Subscribers

        </h1>
        {{-- <a href="{{ url('/newsletter/emails') }}" class="btn btn-secondary pull-right"><i class="fa fa-plus"></i> Create Emails</a> --}}

    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('newsletters.table')
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
