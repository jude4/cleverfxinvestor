@extends('layouts.app')
@section('title', 'Transfer funds')
@section('content')
    <section class="content-header">
        <h1>
            Transfer funds
        </h1>
    </section>
    <div class="content">
        @include('flash::message')
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {{-- {!! Form::open(['route' => 'transfer-funds.store']) !!}

                    @include('transfer.fields')

                    {!! Form::close() !!} --}}
                    <div class="cols-12 col-md-6">
                        <v-card class="info-box" hover="true">
                            <!-- Apply any bg-* class to to the icon to color it -->
                            <span class="info-box-icon bg-red"><i class="fa fa-dollar"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Investment wallet</span>
                                <span class="info-box-number">${{ number_format($userWallet->investment_balance) }}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </v-card>

                        <v-card class="info-box" hover="true">
                            <!-- Apply any bg-* class to to the icon to color it -->
                            <span class="info-box-icon bg-green"><i class="fa fa-dollar"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">CFI wallet</span>
                                <span class="info-box-number">${{ number_format($userWallet->balance) }}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </v-card>

                        <v-card class="info-box" hover="true">
                            <!-- Apply any bg-* class to to the icon to color it -->
                            <span class="info-box-icon bg-orange"><i class="fa fa-dollar"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Referral wallet</span>
                                <span class="info-box-number">${{ number_format($userWallet->referral_balance) }}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </v-card>

                        <v-card class="info-box" hover="true">
                            <!-- Apply any bg-* class to to the icon to color it -->
                            <span class="info-box-icon bg-blue"><i class="fa fa-dollar"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Overflow wallet</span>
                                <span class="info-box-number">${{ number_format($userWallet->overflow_wallet) }}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </v-card>
                    </div>

                    <div class="cols-12 col-md-6">
                        <form action="{{ route('transfer-funds.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="from">
                                    Transfer from
                                </label>
                                <select name="transfer_from" id="" class="form-control">
                                    <option value="cfi_wallet">CFI Wallet</option>
                                    <option value="investment_wallet">Investment Wallet</option>
                                    <option value="referral_wallet">Referral Wallet</option>
                                    <option value="overflow_wallet">Overflow Wallet</option>

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="from">
                                    Transfer to
                                </label>
                                <select name="transfer_to" id="" class="form-control">
                                    <option value="investment_wallet">Investment Wallet</option>
                                    <option value="cfi_wallet">CFI Wallet</option>
                                    <option value="referral_wallet">Referral Wallet</option>
                                    <option value="overflow_wallet">Overflow Wallet</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="amount">
                                    Amount to transfer
                                </label>

                                <input type="text" class="form-control" name="amount">
                            </div>

                            <div class="form-group">
                                <button class="btn btn-success btn-sm" style="width: 100%" type="submit">Transfer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        var app = new Vue({
            el: '#app',

        });

    </script>
@endsection
