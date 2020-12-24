@component('mail::message')
# <center>{{$message->subject}}</center>

<center>
  {{$message->message}}
</center>


@include('partials._mail_footer')
@endcomponent
