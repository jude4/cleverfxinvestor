@component('mail::message')
# <center>Welcome {{ $user->name }} to Cleverfxinvestor</center>

<center>
    {{$welcomeMessage->message}}
</center>

@component('mail::button', ['url' => url('/account-type')])
Get started
@endcomponent

@include('partials._mail_footer')
@endcomponent





