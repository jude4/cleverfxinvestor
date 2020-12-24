@component('mail::message')

# <center>{{ $data->subject }}</center>


{{ $data->message }}


This message was sent from the <b>Administrator</b>, of
{{ config('app.name') }}

<hr>
<center>
  Join our Telegram Channel 
  <br>@ 
  <br>
  <a href="https://t.me/cleverfxinvestor.com"><img src="{{ asset('images/telegram.png') }}" width="120px"></a>
</center>
@endcomponent
