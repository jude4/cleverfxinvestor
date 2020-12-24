@component('mail::message')
# <center>Good day {{ ucfirst($user->name) }}</center>

<center>
    {{$credentialEmail->message}}
</center>



@include('partials._mail_footer')
@endcomponent
