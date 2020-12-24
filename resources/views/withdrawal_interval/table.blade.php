<div class="table-responsive">
        <table class="table" id="users-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Profile Pic</th>
                    <th>Withdrawal interval</th>

                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Count Down</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
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

                        <td>
                            @if ($user->interval == 7)
                                <span class="badge badge-danger">Weekly 7days</span>
                            @endif
                             @if ($user->interval == 14)
                                <span class="badge badge-danger">Bi-Weekly 14days</span>
                            @endif
                             @if ($user->interval == 30)
                                <span class="badge badge-pill">Monthly 30days</span>
                            @endif
                        </td>


                        <td>
                            {{ $user->start_date ? $user->start_date : '-' }}
                        </td>
                        <td>
                             {{ $user->end_date ? $user->start_date : '-' }}
                        </td>
                        <td>
                            {{-- @if ($currentTime) --}}
                            {{ 
                                \Carbon\Carbon::parse($currentTime)
                                    ->diffForHumans($user->end_date) 
                            }} Completion
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
  
   
        {{ $users->links() }}


</div>
