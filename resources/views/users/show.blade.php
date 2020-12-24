@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            {{$user->name}} Details
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <v-card class="box-body" hover="true">
                <v-card-text class="row" style="padding-left: 20px">
                    @include('users.show_fields')
                    <v-btn href="{{ route('users.index') }}" class="" >Back</v-btn>
                </v-card-text>
            </v-card>
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

