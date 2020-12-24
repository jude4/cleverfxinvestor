<div class="table-responsive">
    <table class="table" id="transactions-table">
        <thead>
            <tr>
                <th>Email Address</th>
        <th>Wallet Address</th>
        <th>Transaction Type</th>
        <th>Amount</th>
        <th>Payment Proof</th>
        <th>Status</th>
        <th>Date</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $transaction)
            <tr>
                <td>{{ $transaction->users()->first()->email }}</td>
            <td>   @if ($transaction->transaction_type == 'Deposit') 
                        {{$transaction->wallet_address }}
                    @else
                        {{$transaction->wallet_address}}
                     @endif
                </td>
            <td>{{ $transaction->transaction_type }}</td>
            <td>${{ number_format($transaction->amount) }}</td>
            <td>
               @if ($transaction->payment_proof == null || $transaction->payment_proof == 'noimage.png')
                
                        -
                
                @else
                  <img src="{{ asset('storage/'.$transaction->payment_proof) }}" width="20px">
                @endif

                </td>
            @if(Auth::user()->role_id == 2)
                <td>
                    @if ($transaction->status == false)
                        <span class="badge badge-danger bg-red">PENDING</span>
                    @else
                        <span class="badge badge-success bg-green">CONFIRM</span>
                    @endif

                    {{-- {{ ($transaction->status == false) ? 'PENDING' : 'CONFIRM' }}</td> --}}

            @else
                <td>
                    @if ($transaction->status == false)
                        <a class="btn btn-danger btn-xs" href="{{ url('transactions/status', $transaction->id) }}">PENDING</v-btn>
                    @else
                        <a class="btn btn-success btn-xs" href="">CONFIRM</a>
                    @endif
                </td>
            @endif
            <td>{{ $transaction->created_at}}</td>
                <td>
                    {!! Form::open(['route' => ['transactions.destroy', $transaction->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('transactions.show', [$transaction->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        {{-- <a href="{{ route('transactions.edit', [$transaction->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!} --}}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$users->render()}}
</div>

@section('script')
    <script>
        var app =  new Vue({
            el: '#app'
        });

    </script>

@endsection
