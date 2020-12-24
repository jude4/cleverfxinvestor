@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="">
            <h3 class="text-center">Other Transaction History</h3>
        </div>
        <div class="row">
            <div class="cols-12 col-md-12">
                <div class="panel">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-hover" id="transactions-table">
                                <thead>
                                    <tr>
                                        @if (Auth::user()->role_id == 1)
                                        <th>Reciever</th>
                                        @endif
                                        <th>Payer</th>
                                        <th>Wallet</th>
                                        <th>Amount</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($otherTransactions as $transaction)
                                        <tr>
                                            @if (Auth::user()->role_id == 1)
                                                <td>
                                                    {{$transaction->users()->first()->email}}
                                                </td>
                                            @endif
                                            <td>{{ $transaction->payer()->first()->email }}</td>
                                            
                                            <td>
                                                {{ $transaction->overflow_bonus ? 'Overflow wallet' : 'Referral wallet' }}
                                            </td>
                                            <td>${{ $transaction->overflow_bonus ? number_format($transaction->overflow_bonus) : number_format($transaction->referral_bonus) }}</td>
                                         
                                            <td>{{ $transaction->created_at }}</td>
                                          
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $otherTransactions->links() }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
    <script>
        var app =  new Vue({
            el: '#app'
        });

    </script>

@endsection
