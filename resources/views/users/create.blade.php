@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Create new account
        </h1>
    </section>
    <div class="content">
          @include('flash::message')
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['url' => 'users/create-account']) !!}
                          {{-- @csrf --}}
                        @include('users.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
