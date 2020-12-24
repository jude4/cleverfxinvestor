@extends('layouts.app')

@section('content')
<section class="content-header">
    <v-breadcrumbs :items="items" large></v-breadcrumbs>
    @if (auth()->user()->role_id == 1)
    <h1 class="pull-left">Registered Users</h1>

    <h1 class="pull-right">
        <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('users.create') }}">Add New</a>
    </h1>
    @endif
</section>
<div class="content">
    <div class="clearfix"></div>

    @include('flash::message')

    <div class="clearfix"></div>
    <div class="box box-primary">
        <div class="box-body" style="background-color: whitesmoke">
            {{-- @include('users.table') --}}

            @livewire('users-table')
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
        , data: () => ({
            profile_pic: null
            , link: this.$refs.linkToCopy.value
            , items: [{
                    text: 'Dashboard'
                    , disabled: false
                    , href: '/dashboard'
                , }
                , {
                    text: 'users'
                    , disabled: false
                    , href: '/users'
                , },

            ]
        , }),

        methods: {
            copyLink() {
                let input = document.getElementById('text');
                input.select();
                document.execCommand("copy");
                alert('Link copied');
            }
        }

    });

</script>

@endsection
