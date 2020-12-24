<div class="table-responsive">
    @if (auth()->user()->role_id == 1)
        <div>
            <input placeholder="Search" wire:model="search" class="form-control" style="width: 30%" type="search" />
        </div>
        <div class="form-group" style="width: 10%">
            <select wire:model="enlist"
            class="form-control">
            <option>5</option>
            <option>10</option>
            <option>30</option>
            <option>50</option>
            </select>
           
        </div>
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
                                @if ($user->profile_pic == null)
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
                                    <a href="{{ url('users/block/'.$user->id) }}" class="btn btn-success btn-sm" style="margin: 0px 4px 0px 4px">Check block</a>
                                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"])
                                    !!}
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
@if (Auth::user()->role_id == 2)
    {{-- <v-container>
        <v-row>
            <v-col cols="12" class="" md="12" justify="center">
                <v-card outlined elevation hover class="mx-auto">
                    <v-list-item three-line>
                        <v-list-item-content>
                            <div class="overline mb-4"><b>ACCOUNT OVERVIEW</b></div>
                            <hr />
                            <v-list-item-title class="headline mb-1"><b>Full Name</b> : {{ $my_account->name }}
                            </v-list-item-title><br />
                            <v-list-item-title class="headline mb-1"><b>Username</b> : {{ $my_account->username }}
                            </v-list-item-title><br />
                            <v-list-item-title class="headline mb-1"><b>E-mail Address</b> : {{ $my_account->email }}
                            </v-list-item-title><br />
                            <v-list-item-title class="headline mb-1"><b>Contact info</b> : {{ $my_account->phone }}
                            </v-list-item-title><br />

                            <v-list-item-title>
                                <b>Next of KINS:</b>
                                <p>{{ $my_account->kins }}</p>
                            </v-list-item-title>

                            <v-list-item-title>
                                <b>Beneficiary:</b>
                                <p>{{ $my_account->beneficiary }}</p>
                            </v-list-item-title>

                            <v-list-item-title>
                                <b>Address:</b>
                                <p>{{ $my_account->address }}</p>
                            </v-list-item-title>

                            <v-list-item-subtitle>
                                <b>Joined</b> : {{ $my_account->created_at->toFormattedDateString() }}
                            </v-list-item-subtitle>

                            @if ($my_account->identity_proof != null || $my_account->residence_proof != null)
                                <v-card-text class="form-group">


                                    @if ($my_account->identity_proof)
                                        {!! Form::label('identity_proof', 'Identity Proof:') !!}
                                        <p>
                                            <img src="{{ asset('storage/' . $my_account->identity_proof) }}"
                                                width="200px">
                                        </p>
                                    @endif
                                    @if ($my_account->residence_proof)
                                        {!! Form::label('residence_proof', 'Residence Proof:') !!}
                                        <p>
                                            <img src="{{ asset('storage/' . $my_account->residence_proof) }}"
                                                width="200px">
                                        </p>
                                    @endif
                                </v-card-text>
                            @endif
                        </v-list-item-content>

                        <v-list-item-avatar tile size="80" color="grey">
                            <v-img src="{{ asset('storage/' . Auth::user()->profile_pic) }}" />
                        </v-list-item-avatar>
                    </v-list-item>


                </v-card>

            </v-col>

        </v-row>
    </v-container> --}}
@endif
