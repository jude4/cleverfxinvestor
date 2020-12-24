@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Wallet Address Detail
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('accounts.show_fields')
                   
                        <a href="{{ route('accounts.index') }}" class="btn btn-primary">Back</a>


                </div>
            </div>
        </div>
    </div>
@endsection
