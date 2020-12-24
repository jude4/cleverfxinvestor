@extends('layouts.app')

@section('content')
<br><br>

@include('flash::message')
<div class="container">
     <section class="content-header" >
         <h3 class="title text-center">Terms and Conditions</h3>
    </section>
<br><br>
    <div class="" align="center" justify="center">
        <div class="col-md-12 col-12">
            <form action="{{ route('conditions.update', $terms->id) }}" method="POST">
                @csrf
                @method('put')
                <v-card>
                    <v-card-text>
                        <textarea class="form-control" id="terms-and-conditions" name="body">
                            {!! $terms->body !!}
                        </textarea>
                    </v-card-text>

                </v-card>
    
                <button type="submit" style=" margin-top: 10px; width: 100%" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection