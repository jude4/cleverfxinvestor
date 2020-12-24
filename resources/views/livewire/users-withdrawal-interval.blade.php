<div>
    <div class="form-group" style="display: inline-flex">
        <input type="search" wire:model="search" class="form-control" style="max-width: 400px" name="" placeholder="Search...">
        <select name="" id="" wire:model="enlist" class="form-control" style="width: 40%">
            <option>5</option>
            <option>10</option>
            <option>50</option>
        </select>
    </div>
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
                                <span class="badge badge-danger">Bi-Weekly 14 days</span>
                            @endif
                             @if ($user->interval == 30)
                                <span class="badge badge-pill">Monthly 30 days</span>
                            @endif
                        </td>


                        <td>
                            {{ $user->start_date ? $user->start_date : '-' }}
                        </td>
                        <td>
                             {{ $user->end_date ? $user->end_date : '-' }}
                        </td>
                        <td>
                            {{-- {{ 
                                \Carbon\Carbon::parse($currentTime)
                                    ->diffForHumans($user->end_date) 
                            }} Completion --}}
                    @if ($user->start_date && $user->end_date)
                        @if (Carbon\Carbon::now()->gt(Carbon\Carbon::parse($user->end_date)))
                            {{-- <form  --}}
                            <button class="btn btn-sm btn-danger" wire:click="reStartInterval({{ $user->id }})">Re-start</button>
                        @else
                        <p wire:poll>Current Date & Time: {{ now() }}</p>
                        <p>Hours remaining {{ Carbon\Carbon::parse($user->end_date)->diffInHours(Carbon\Carbon::now()) }} hr(s)</p>
                        <p>Days remaining {{ Carbon\Carbon::parse($user->end_date)->diffInDays(Carbon\Carbon::now()) }} day(s)</p>
                        <p>Weeks remaining {{ Carbon\Carbon::parse($user->end_date)->diffInWeeks(Carbon\Carbon::now()) }} wk(s)</p>
                        @endif  
                    @else
                        No session yet
                    @endif
                    </td>
                      
                       
                    </tr>
                @endforeach
            </tbody>
        </table>
  
   
        {{ $users->links() }}


</div>

</div>
