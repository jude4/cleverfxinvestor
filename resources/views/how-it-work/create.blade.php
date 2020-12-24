@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
           HOW IT WORKS
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'works.store']) !!}

                        @include('how-it-work.fields')

                    {!! Form::close() !!}
                </div>
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
