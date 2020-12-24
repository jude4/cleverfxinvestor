@extends('layouts.app')

@section('content')

<div class="container">
    <h3 class="text-center">Edit Email Notifications</h3>
        {{-- Welcome email component --}}
        @livewire('welcome-email')

        {{-- Deposit confirmation email component --}}
        @livewire('deposit-confirmation-email')

        {{-- Withdrawal confirmation email component --}}
        @livewire('withdrawal-confirmation-email')

        {{-- Credential confirmation message --}}
        @livewire('edit-credential-email')
    </div>
@endsection

@section('script')
    <script>
        var app = new Vue({
            el: '#app',
        });
    </script>
@endsection