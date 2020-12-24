@extends('layouts.app')
@section('title', 'Users Account type | ')
@section('content')
    <br><br>
    <section class="content-header">
        <v-breadcrumbs :items="items" large></v-breadcrumbs>
        <h1 class="pull-left">
            @if (Request::is('users/mini-investors'))
                Users On Mini Account type
            @endif

            @if (Request::is('users/standard-investors'))
                Users On Standard Account type
            @endif

            @if (Request::is('users/premium-investors'))
                Users On Premium Account type
            @endif

            @if (Request::is('users/premium-pro-investors'))
                Users On Premium pro Account type
            @endif

        </h1>


    </section>

    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body" style="background-color: whitesmoke">
                <table class="table" id="users-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            {{-- <th>Role Id</th> --}}
                            <th>Email</th>
                            <th>Profile Pic</th>
                            <th>Phone No</th>

                            <th>Join date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usersInvestmentplan as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                {{-- <td>{{ $user->role_id }}</td>
                                --}}
                                <td>{{ $user->email }}</td>
                                <td>
                                    @if ($user->profile_pic == null)
                                        <img src="{{ asset('images/avatar.png') }}" class="img-circle" alt="User Image" /
                                            width="20px">
                                    @else
                                        <img src="{{ asset('storage/' . $user->profile_pic) }}" class="img-circle"
                                            alt="User Image" / width="20px">
                                    @endif

                                </td>
                                <td>{{ $user->phone_no != null ? $user->phone_no : '-' }}</td>


                                <td>{{ $user->created_at->toFormattedDateString() }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>

        <div class="text-center">

        </div>
    </div>

@endsection
