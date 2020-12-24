@extends('layouts.app')

@section('content')
    <div class="container">
          @include('flash::message')
        <h3 class="text-center">Users in {{ ucfirst($user->name) }} Block Level</h3>
        <div class="row">
            @foreach ($users as $user)
                <div class="cols-12 col-md-4">
                    <div class="panel">
                        <div class="panel-headling">
                            @if ($user->profile_pic)
                                <img src="{{ asset('storage/' . $user->profile_pic) }}" class="avatar" />

                            @else
                                <img src="/images/avatar.png" class="avatar" />
                            @endif
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li><b>NAME:</b> <i>{{ $user->name }}</i></li>
                                <li><b>E-MAIL ADDRESS: </b><i>{{ $user->email }}</i></li>
                                <li><b>CONTACT INFO:</b> <i>{{ $user->phone_no }}</i></li>
                                <li><b>POSITION IN BLOCK LEVEL:</b>
                                    @if ($user->position($user) == 0)
                                        First position
                                    @endif

                                    @if ($user->position($user) == 1)
                                        Second position
                                    @endif

                                    @if ($user->position($user) == 2)
                                        Third position
                                    @endif

                                </li>
                            </ul>
                        </div>

                        <div class="panel-footer">

                             {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                            <div class='btn-group'>
                                {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit',
                                'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            @endforeach

            @if ($users->isEmpty())
                <div class="cols-12 col-md-12" style="padding: 20% 0% 0% 0%">
                   <center>
                       <i class="fa fa-users fa-3x"></i>
                       <p>No users</p>
                   </center>
                </div>
            @endif
        </div>
    </div>
@endsection

@section('script')
    <script>
        var app = new Vue({
            el: '#app'
        });

    </script>

    <style>
        .avatar {
            vertical-align: middle;
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

    </style>
@endsection
