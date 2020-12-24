<div class="table-responsive">
    <table class="table" id="accounts-table">
        <thead>
            @if (Auth::user()->role_id == 1)
            <tr>
            <th>Wallet Address</th>
            <th>Date</th>
            <th colspan="3">Action</th>
            @else
                <h4 style="color: red">Please kindly make your deposit into any of the following crypto wallet address below</h5>
        </tr>
        @endif
        </thead>
        <tbody>
            @if (Auth::user()->role_id == 1)
                @foreach($accounts as $account)
                    <tr>
                  
                    <td>{{ $account->wallet_address }}</td>
                    <td>{{$account->created_at->toFormattedDateString()}}</td>
                        <td>
                            {!! Form::open(['route' => ['accounts.destroy', $account->id], 'method' => 'delete']) !!}
                            <div class='btn-group'>
                                <a href="{{ route('accounts.show', [$account->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                                <a href="{{ route('accounts.edit', [$account->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                                {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                            </div>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                @else
                  @foreach($accounts as $account)
                    <td>
                      <v-text-field id="{{ $account->id }}" ref="linkToCopy" type="text" value="{{  $account->wallet_address }}"></v-text-field>
                      
                      <v-btn @click.prevent="copyLink({!! json_encode($account->id) !!})">Copy</v-btn>
                      
                     
                    </td>
                    
                       
                    </tr>
                @endforeach
                
            @endif
        </tbody>
    </table>
</div>
