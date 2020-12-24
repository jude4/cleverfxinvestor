@extends('layouts.app')

@section('content')
    <section class="content-header">
        @include('flash::message')
        <h1>
            Transaction
        </h1>
    </section>
    <div class="content">
        <v-card class="box box-primary" hover="true">
            <v-card-text class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('transactions.show_fields')
                    <a href="{{ route('transactions.index') }}" class="btn btn-default">Back</a>
                </div>
            </v-card-text>
        </v-card>
    </div>
@endsection

@section('script')

    <script>
        var app = new Vue({
            el: '#app'
        });
    </script>
@endsection
