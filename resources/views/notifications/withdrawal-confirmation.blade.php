@component('mail::message')
# <center>Good day {{ ucfirst($user->name) }}, </center> 

<center>
    <p>
        {{ $withdrawalEmail->message }}
    </p>
</center>

@include('partials._mail_footer')

@endcomponent
