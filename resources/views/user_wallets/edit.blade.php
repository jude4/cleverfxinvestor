@extends('layouts.app')


@section('content')

    <v-container>
        <v-breadcrumbs :items="items" large></v-breadcrumbs>
        @include('flash::message')

        <v-row>
            <v-col cols="12" md="3">
                <v-card class="info-box" hover="true">
                    <!-- Apply any bg-* class to to the icon to color it -->
                    <span class="info-box-icon bg-red"><i class="fa fa-dollar"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">CFI Balance</span>
                      <span class="info-box-number">${{number_format($wallet->balance)}}</span>
                    </div>
                    <!-- /.info-box-content -->
                  </v-card>
            </v-col>

            <v-col cols="12" md="3">
                <v-card class="info-box" hover="true">
                    <!-- Apply any bg-* class to to the icon to color it -->
                    <span class="info-box-icon bg-green"><i class="fa fa-dollar"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Investment Balance</span>
                      <span class="info-box-number">${{number_format($wallet->investment_balance)}}</span>
                    </div>
                    <!-- /.info-box-content -->
                  </v-card>
            </v-col>

              <v-col cols="12" md="3">
                <v-card class="info-box" hover="true">
                    <!-- Apply any bg-* class to to the icon to color it -->
                    <span class="info-box-icon bg-orange"><i class="fa fa-dollar"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Referral Balance</span>
                      <span class="info-box-number">${{number_format($wallet->referral_balance)}}</span>
                    </div>
                    <!-- /.info-box-content -->
                  </v-card>
            </v-col>

           

            <v-col cols="12" md="3">
                <v-card class="info-box" hover="true">
                    <!-- Apply any bg-* class to to the icon to color it -->
                    <span class="info-box-icon bg-blue"><i class="fa fa-dollar"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Total Withdraw</span>
                      <span class="info-box-number">${{number_format($wallet->total_balance)}}</span>
                    </div>
                    <!-- /.info-box-content -->
                  </v-card>
            </v-col>
        </v-row>

        <v-row>
            <v-col cols="12" md="6">
                <v-card>
                    <v-card-title><h4 class="display-5"><i class="fa fa-edit">Edit <span style="color:red">{{$user->name}}</span> CFI Wallet</i></h4></v-card-title>
                    <v-card-text>
                        <v-form action="{{ route('user_wallets.update', $wallet->id) }}" method="post">
                            @csrf
                            <input type="hidden" name="_method" value="put">
                            <v-text-field type="email" label="Email Address"  prepend-icon="mdi-email"
                            required disabled value="{{ $user->email}}"></v-text-field>
                            <v-text-field type="number" name="wallet_balance" placeholder="${{ $wallet->balance }}" prepend-icon="mdi-money" label="CFI balance"></v-text-field>
                            <v-card-actions>
                                <a href="{{ route('user_wallets.index') }}">
                                <v-btn class="bg-green text-white" style="padding: 10px">Back</v-btn>
                            </a>
                                <v-spacer></v-spacer>
                                <v-btn type="submit" class="bg-blue text-white" style="padding: 10px">Send</v-btn>
                            </v-card-actions>
                        </v-form>
                    </v-card-text>

                </v-card>
            </v-col>

            <v-col cols="12" md="6">
                <v-card>
                    <v-card-title><h4 class="display-5"><i class="fa fa-edit">Edit <span style="color:red">{{$user->name}}</span> Investment Wallet</i></h4></v-card-title>
                    <v-card-text>
                        <v-form action="{{ route('user_wallets.update', $wallet->id) }}" method="post">
                            @csrf
                            <input type="hidden" name="_method" value="put">
                        <input type="hidden" name="user" value="{{ $user->id }}">
                            <v-text-field type="email" label="Email Address"  prepend-icon="mdi-email"
                            required disabled value="{{ $user->email}}"></v-text-field>
                            <v-text-field type="number" name="investment_balance" placeholder="${{ number_format($wallet->investment_balance) }}" prepend-icon="mdi-money" label="Investment balance"></v-text-field>
                            <v-card-actions>
                                <a href="{{ route('user_wallets.index') }}">
                                <v-btn class="bg-green text-white" style="padding: 10px">Back</v-btn>
                            </a>
                                <v-spacer></v-spacer>
                                <v-btn type="submit" class="bg-blue text-white" style="padding: 10px">Send</v-btn>
                            </v-card-actions>
                        </v-form>
                    </v-card-text>

                </v-card>
            </v-col>


                <v-col cols="12" md="6">
                <v-card>
                    <v-card-title><h4 class="display-5"><i class="fa fa-edit">Edit <span style="color:red">{{$user->name}}</span> Referral Wallet</i></h4></v-card-title>
                    <v-card-text>
                        <v-form action="{{ route('user_wallets.update', $wallet->id) }}" method="post">
                            @csrf
                            <input type="hidden" name="_method" value="put">
                        <input type="hidden" name="user" value="{{ $user->id }}">
                            <v-text-field type="email" label="Email Address"  prepend-icon="mdi-email"
                            required disabled value="{{ $user->email}}"></v-text-field>
                            <v-text-field type="number" name="referral_balance" placeholder="${{ number_format($wallet->referral_balance) }}" prepend-icon="mdi-money" label="Referral balance"></v-text-field>
                            <v-card-actions>
                                <a href="{{ route('user_wallets.index') }}">
                                <v-btn class="bg-green text-white" style="padding: 10px">Back</v-btn>
                            </a>
                                <v-spacer></v-spacer>
                                <v-btn type="submit" class="bg-blue text-white" style="padding: 10px">Send</v-btn>
                            </v-card-actions>
                        </v-form>
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
            data: () => ({
                items: [
                  {
                    text: 'Dashboard',
                    disabled: false,
                    href: '/dashboard',
                  },
                  {
                    text: 'users-wallets',
                    disabled: false,
                    href: '/users-wallet/',
                  },

                  {
                    text: 'edit',
                    disabled: true,
                  },

                ],
              }),
        });


    </script>

@endsection

