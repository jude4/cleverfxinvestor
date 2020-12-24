@extends('layouts.app')

@section('content')
    <v-container>
        <v-breadcrumbs :items="items" large></v-breadcrumbs>
        <v-card hover="true" style="background:whitesmoke">
            <v-card-title>
                <h4 class="display-5">
                    <i class="fa fa-eye"></i> <span style="color: red">{{ $user->name }}</span> Wallet Details
                </h4>
            </v-card-title>
            <v-card-text>
                <v-row>
                    <v-col>
                        <v-card class="info-box" hover="true">
                            <!-- Apply any bg-* class to to the icon to color it -->
                            <span class="info-box-icon bg-red"><i class="fa fa-dollar"></i></span>
                            <div class="info-box-content">
                              <span class="info-box-text">Wallet Balance</span>
                              <span class="info-box-number">${{number_format($user->wallets()->first()->balance)}}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </v-card>
                        <v-card hover="true">
                            <v-card-text>
                                <b>Time : </b> {{$user->wallets()->first()->created_at}}
                            </v-card-text>
                        </v-card>
                    </v-card-text>
                    </v-col>
                    <v-divider></v-divider>

                    <v-col>
                        <v-card class="info-box" hover="true">
                            <!-- Apply any bg-* class to to the icon to color it -->
                            <span class="info-box-icon bg-blue"><i class="fa fa-dollar"></i></span>
                            <div class="info-box-content">
                              <span class="info-box-text">Total Withdraw</span>
                              <span class="info-box-number">${{number_format($user->wallets()->first()->total_balance)}}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </v-card>
                        <v-card hover="true">
                            <v-card-text>
                                <b>Last updated at : </b> {{$user->wallets()->first()->updated_at}}
                            </v-card-text>
                        </v-card>
                    </v-card-text>
                    </v-col>
                </v-row>
               
        </v-card>
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
                      text: 'users-wallet',
                      disabled: false,
                      href: '/users-wallet',
                    },
                    {
                        text: 'show',
                        disabled: true,
                      },

                  ],
            }
        });
    </script>
@endsection
