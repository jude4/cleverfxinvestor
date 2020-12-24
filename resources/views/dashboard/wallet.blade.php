@extends('layouts.app')

@section('content')
<br>
    <v-container>
        <v-breadcrumbs :items="items" large></v-breadcrumbs
        <v-row>
            <v-col md="12" xs="12">
                <v-card hover="true">
                    <v-card-title>
                        <h2 class="text-red">
                            <i class="fa fa-money"></i> Main Wallet
                        </h2>
                    </v-card-title>
                    <v-divider></v-divider>
                    <v-card-text>
                        <v-card-actions>
                            <h4>
                                <i class="fa fa-btc"></i>Current balance: ${{ number_format($my_wallet->balance)}}
                            </h4>
                            <v-spacer></v-spacer>
                            <a href="{{ url('deposit') }}" class="btn btn-xs btn-warning"><i class="fa fa-plus-circle"></i> Deposit</a>
                            <v-spacer></v-spacer>
                           
                                <a href="{{ url('withdraw') }}" class="btn btn-xs btn-success"><i class="fa fa-minus-circle"></i> Withdraw</a>
                        
                        </v-card-actions>

                    </v-card-text>
                </v-card>
            </v-col>
           
        </v-row>
    </v-container>
@endsection

@section('script')

    <script>
        var app = new Vue({
            el: '#app',
            data: {
                items: [
                    {
                      text: 'Dashboard',
                      disabled: false,
                      href: '/dashboard',
                    },
                    {
                      text: 'wallets',
                      disabled: false,
                      href: '/wallets',
                    },

                  ],
            }
        });
    </script>
@endsection
