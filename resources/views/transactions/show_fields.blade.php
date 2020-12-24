<!-- User Id Field -->
<v-card-text class="form-group">
    {!! Form::label('email', 'Email Address:') !!}
    <p>{{ $transaction->users()->first()->email }}</p>
</v-card-text>
<v-divider></v-divider>
<!-- Wallet Address Field -->
<v-card-text class="form-group">
    @if (Auth::user()->role_id == 1)
    {!! Form::label('wallet_address', 'Wallet Address:') !!}

    @else
    @if ($transaction->transaction_type == 'Deposit')
    {!! Form::label('deposit_address', 'Deposit Address:') !!}
    @else
    {!! Form::label('deposit_address', 'Wallet Address:') !!}
    @endif
    @endif
    <p>@if ($transaction->transaction_type == 'Deposit')
        {{$transaction->wallet_address}}
        @else
        {{$transaction->wallet_address}}
        @endif</p>
</v-card-text>
<!-- Payment Proof Field -->
@if (Auth::user()->role_id == 2)
<v-card-text class="form-group">
    {!! Form::label('payment_proof', 'Payment Proof:') !!}
    <p>
        @if ($transaction->payment_proof == null && $transaction->transaction_type == 'Deposit')

        <form action="{{ url('upload_proof', $transaction->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <v-file-input label="choose a file" prepend-icon="mdi-camera" name="payment_proof"></v-file-input>
            <input type="submit" class="btn btn-xs btn-success" value="Upload">
        </form>



        @else
        <img src="{{ asset('storage/'.$transaction->payment_proof) }}" width="150px">
        @endif

    </p>
</v-card-text>
@else
<v-card-text>
    <p>
        @if ($transaction->payment_proof == null && $transaction->transaction_type == 'Deposit')

        -


        @else
        <img src="{{ asset('storage/'.$transaction->payment_proof) }}" width="150px">
        @endif

    </p>
</v-card-text>

@endif
<v-divider></v-divider>
<!-- Transaction Type Field -->
<v-card-text class="form-group">
    {!! Form::label('transaction_type', 'Transaction Type:') !!}
    <p>{{ $transaction->transaction_type }}</p>
    </div>
    <v-divider></v-divider>
    <!-- Amount Field -->
    <v-card-text class="form-group">
        {!! Form::label('amount', 'Amount:') !!}
        <p>{{ $transaction->amount }}</p>
    </v-card-text>
    <v-divider></v-divider>
    <!-- Status Field -->
    <v-card-text class="form-group">
        {!! Form::label('status', 'Status:') !!}
        <p>
            @if ($transaction->status == false)
            <span class="badge badge-danger bg-red">PENDING</span>
            @else
            <span class="badge badge-success bg-green">CONFIRM</span>
            @endif
        </p>
    </v-card-text>
