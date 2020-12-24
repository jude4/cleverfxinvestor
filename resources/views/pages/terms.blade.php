@extends('layouts.master')
@section('title', 'Terms & Conditons')
@section('content')
  @livewire('nav-bar')  
<v-container >
    <v-row>
        <v-col cols="12" md="12">
            <v-card flat>
                <v-card-text>
                    {!! $terms->body !!}
                </v-card-text>
            </v-card>
        </v-col>
    </v-row>
@endsection