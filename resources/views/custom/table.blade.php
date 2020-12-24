@extends('layouts.app')

@section('content')

    <br>
    <v-container>
    @include('flash::message')

        <v-row>
            <v-col cols="12" md="12">
                <h3 class="mx-auto text-center">Message history</h3>
                <div class="content">
                    <div class="clearfix"></div>
                    <div class="box box-primary">
                        <div class="box-body">
                            <div class="table-responsive">
                                <table class="table" id="transactions-table">
                                    <thead>
                                        <tr>
                                            <th>Email Address</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                            <th>Date</th>
                                            <th colspan="3">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($messages as $message)
                                            <tr>
                                                <td>{{ $message->email }}</td>

                                                <td>{{ $message->subject }}</td>
                                                <td>{{ $message->message }}</td>

                                                <td>{{ $message->created_at->toFormattedDateString() }}</td>
                                                <td>
                                                    <form action="{{route('custom.delete', $message->id)}}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <div class='btn-group'>
                                                           
                                                            {!! Form::button('<i class="glyphicon glyphicon-trash"></i>',
                                                            ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick'
                                                            => "return confirm('Are you sure?')"]) !!}
                                                        </div>

                                                    </form>
                                                    
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{$messages->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </v-col>
        </v-row>
    </v-container>
@endsection
