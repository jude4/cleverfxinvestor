<!-- User Id Field -->
    {!! Form::hidden('user_id', auth()->user()->id, ['class' => 'form-control']) !!}

<!-- Wallet Address Field -->
<div class="form-group col-sm-12 col-md-12 col-lg-12">
    {!! Form::label('wallet_address', 'Wallet Address:') !!}
    {!! Form::text('wallet_address', null, ['class' => 'form-control']) !!}
</div>



<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('accounts.index') }}" class="btn btn-default">Cancel</a>
</div>
