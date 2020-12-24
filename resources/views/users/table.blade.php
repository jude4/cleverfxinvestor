<div class="table-responsive">
    @if (auth()->user()->role_id == 1)
        <table class="table" id="users-table">
            <thead>
                <tr>
                    <th>Name</th>
                    {{-- <th>Role Id</th> --}}
                    <th>Email</th>
                    <th>Profile Pic</th>
                    <th>Phone No</th>

                    <th>Date</th>
                    <th colspan="3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        {{-- <td>{{ $user->role_id }}</td>
                        --}}
                        <td>{{ $user->email }}</td>
                        <td>
                            @if ($my_account->profile_pic == null)
                                <img src="{{ asset('images/avatar.png') }}" class="img-circle" alt="User Image" /
                                    width="20px">
                            @else
                                <img src="{{ asset('storage/' . Auth::user()->profile_pic) }}" class="img-circle"
                                    alt="User Image" / width="20px">
                            @endif

                        </td>
                        <td>{{ $user->phone_no }}</td>


                        <td>{{ $user->created_at->toFormattedDateString() }}</td>
                        <td>
                            {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                            <div class='btn-group'>
                                <a href="{{ route('users.show', [$user->id]) }}" class='btn btn-default btn-xs'><i
                                        class="glyphicon glyphicon-eye-open"></i></a>
                                {{-- <a href="{{ route('users.edit', [$user->id]) }}"
                                    class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                                --}}
                                {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit',
                                'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                            </div>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach




            </tbody>
        </table>
    @endif
    @if (Auth::user()->role_id == 1)
        {{ $users->links() }}
    @endif

</div>
f
