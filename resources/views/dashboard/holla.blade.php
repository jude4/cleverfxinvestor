@extends('layouts.app')
@section('title', 'Withdraw funds')
@section('content')
<br>
<v-container>
    <v-breadcrumbs :items="items" large></v-breadcrumbs>

    @include('flash::message')
    @livewire('withdrawal-component')


</v-container>
@endsection

@section('script')
<script>
    var app = new Vue({
        el: '#app'
        , data: {
            items: [{
                    text: 'Dashboard'
                    , disabled: false
                    , href: '/dashboard'
                , }
                , {
                    text: 'withdraw'
                    , disabled: false
                    , href: '/withdraw'
                , },

            ]
            , amount: ''
            , amountRules: [
                v => !!v || 'Invalid input'
            , ],

            amt: ''
            , amtRules: [
                v => !!v || 'Invalid input'
            , ]
        , }
    });

</script>
@endsection
