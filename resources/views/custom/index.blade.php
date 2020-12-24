@extends('layouts.app')

@section('content')
<br><br>
<v-container>
    <v-row>
        <v-col cols="12" md="12">
             <div class="pull-left">
              <a class="btn btn-warning pull-right btn-sm"  href="/edit-emails">Edit Mails</a>
            </div>
            <div class="pull-right">
              <a class="btn btn-primary pull-right btn-sm"  href="/sent-messages">View Mails</a>
            </div>
        </v-col>
    </v-row>
    @include('flash::message')
    @livewire('send-email-notification')
    
</v-container>
@endsection


@section('script')
    <script>
        var app = new Vue({

            el: '#app',
            data: {

            }

        });
    </script>
@endsection

