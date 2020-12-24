@extends('layouts.master')

@section('title', 'Contact us')

@section('content')
@livewire('nav-bar')
<v-container>
@include('flash::message')

    <v-card-title>
        <h3 class="display-1 mx-auto text-center"  data-aos="fade-down" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
            CONTACT US
        </h3>
    </v-card-title>

    <v-card width="600" class="mx-auto mt-12"  data-aos="fade-up" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
        <v-card-text>
            <v-form action="{{ url('/email') }}" method="POST">
                @csrf
                <v-text-field type="text" label="Name" name="name" outlined></v-text-field>
                @error('name')
                <div class="text-center" style="color: red">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
                <v-text-field label="E-mail Address" name="email" type="email" outlined></v-text-field>
                @error('email')
                <div class="text-center" style="color: red">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
                <v-textarea id="mytextarea" label="Message" name="message" placeholder="Type here..." outlined></v-textarea>
                @error('message')
                <div class="text-center" style="color: red" >
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
                <v-card-actions>
                    <v-spacer></v-spacer>
                    <v-btn type="submit">Send</v-btn>
                </v-card-actions>
            </v-form>
        </v-card-text>
    </v-card>
</v-container>

@endsection
