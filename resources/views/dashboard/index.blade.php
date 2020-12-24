@extends('layouts.app')

@section('content')
<div class="container">
   
    {{--  BREADCRUMS  --}}
    @if (Auth::user()->role_id == 2)
        <v-card-actions>
            <v-breadcrumbs :items="items" large></v-breadcrumbs>
            
          
            <v-spacer></v-spacer>
            <v-btn class="text-white" href="{{ route('deposit.index') }}" style="background: green; padding: 10px; color: white" hover="true">Make Deposit</v-btn>
        </v-card-actions>
    @else

        <v-card-actions>
            <v-breadcrumbs :items="items" large></v-breadcrumbs>
            <v-spacer></v-spacer>
            <v-btn class="text-white" href="{{ route('transactions.index') }}" style="background: red; padding: 10px; color: white" hover="true">Confirm Transactions</v-btn>
        </v-card-actions>
    @endif

    <div class="row">
        @if (Auth::user()->role_id == 2)

         
           {{--  INVESTMENT BALANCE  --}}
           <div class="col-12 col-md-4 col-lg-4">

          
            <v-card class="info-box" hover="true">
                <!-- Apply any bg-* class to to the icon to color it -->
                <span class="info-box-icon" style="background-color: #b17c2e; color: #ffffff"><i class="fa fa-dollar"></i></span>
                <div class="info-box-content">
                <span class="info-box-text">Investment Balance</span>
        <span class="info-box-number">
            ${{ number_format($wallet->investment_balance) }}
            
            </span>
                </div>
                <!-- /.info-box-content -->
            </v-card>
        </div>

{{--  CFI WALLET  --}}
          <div class="col-12 col-md-4 col-lg-4">

          
            <v-card class="info-box" hover="true">
                <!-- Apply any bg-* class to to the icon to color it -->
                <span class="info-box-icon" style="background-color: #b17c2e; color: #ffffff"><i class="fa fa-money"></i></span>
                <div class="info-box-content">
                <span class="info-box-text">CFI Wallet</span>
                <span class="info-box-number">${{number_format($wallet->balance)}}</span>
                </div>
                <!-- /.info-box-content -->
            </v-card>
        </div>

         <div class="col-12 col-md-4 col-lg-4">

          
            <v-card class="info-box" hover="true">
                <!-- Apply any bg-* class to to the icon to color it -->
                <span class="info-box-icon " style="background-color: #b17c2e; color: #ffffff"><i class="fa fa-money"></i></span>
                <div class="info-box-content">
                <span class="info-box-text">Referral bonus</span>
                <span class="info-box-number">${{number_format($wallet->referral_balance)}}</span>
                </div>
                <!-- /.info-box-content -->
            </v-card>
        </div>

         <div class="col-12 col-md-4 col-lg-4">

          
            <v-card class="info-box" hover="true">
                <!-- Apply any bg-* class to to the icon to color it -->
                <span class="info-box-icon " style="background-color: #b17c2e; color: #ffffff"><i class="fa fa-money"></i></span>
                <div class="info-box-content">
                <span class="info-box-text">Total deposit</span>
                <span class="info-box-number">${{number_format($wallet->total_deposit)}}</span>
                </div>
                <!-- /.info-box-content -->
            </v-card>
        </div>

         <div class="col-12 col-md-4 col-lg-4">

          
            <v-card class="info-box" hover="true">
                <!-- Apply any bg-* class to to the icon to color it -->
                <span class="info-box-icon" style="background-color: #b17c2e; color: #ffffff"><i class="fa fa-money"></i></span>
                <div class="info-box-content">
                <span class="info-box-text">Overflow wallet</span>
                <span class="info-box-number">${{number_format($wallet->overflow_wallet)}}</span>
                </div>
                <!-- /.info-box-content -->
            </v-card>
        </div>

        {{--  REFERRAL EARNING  --}}
        

                      {{--  MY INVESTMENT PLAN  --}}
            @if ($wallet->investment_plan_id == 1)
            <div class="col-12 col-md-4 col-lg-4">
                <v-card class="info-box" hover="true">
                    <!-- Apply any bg-* class to to the icon to color it -->
                    <span class="info-box-icon" style="background-color: #b17c2e; color: #ffffff"><i class="fa fa-cube"></i></span>
                    <div class="info-box-content">
                    <span class="info-box-text">My Investment Plan</span>
                    <span class="info-box-number">
                       Mini Investor
                    </span>
                    </div>
                    <!-- /.info-box-content -->
                </v-card>
            </div>
            @elseif($wallet->investment_plan_id == 2)
            <div class="col-12 col-md-4 col-lg-4">
                <v-card class="info-box" hover="true">
                    <!-- Apply any bg-* class to to the icon to color it -->
                    <span class="info-box-icon " style="background-color: #b17c2e; color: #ffffff"><i class="fa fa-adjust"></i></span>
                    <div class="info-box-content">
                    <span class="info-box-text">My Investment Plan</span>
                    <span class="info-box-number">
                       Standard Investor
                    </span>
                    </div>
                    <!-- /.info-box-content -->
                </v-card>
            </div>
            @elseif($wallet->investment_plan_id == 3)
            <div class="col-12 col-md-4 col-lg-4">
                <v-card class="info-box" hover="true">
                    <!-- Apply any bg-* class to to the icon to color it -->
                    <span class="info-box-icon" style="background-color: #b17c2e; color: #ffffff"><i class="fa fa-cubes"></i></span>
                    <div class="info-box-content">
                    <span class="info-box-text">My Investment Plan</span>
                    <span class="info-box-number">
                       Premium Investor
                    </span>
                    </div>
                    <!-- /.info-box-content -->
                </v-card>
            </div>


            @elseif($wallet->investment_plan_id == 4)
            <div class="col-12 col-md-4 col-lg-4">
                <v-card class="info-box" hover="true">
                    <!-- Apply any bg-* class to to the icon to color it -->
                    <span class="info-box-icon " style="background-color: #b17c2e; color: #ffffff"><i class="fa fa-cube"></i></span>
                    <div class="info-box-content">
                    <span class="info-box-text">My Investment Plan</span>
                    <span class="info-box-number">
                       Premium pro Investor
                    </span>
                    </div>
                    <!-- /.info-box-content -->
                </v-card>
            </div>

            @else
            <div class="col-12 col-md-4 col-lg-4">
                <v-card class="info-box" hover="true">
                    <!-- Apply any bg-* class to to the icon to color it -->
                    <span class="info-box-icon" style="background-color: #b17c2e; color: #ffffff"><i class="fa fa-cube"></i></span>
                    <div class="info-box-content">
                    <span class="info-box-text">My Investment Plan</span>
                    <span class="info-box-number">
                      CFIIBs
                    </span>
                    </div>
                    <!-- /.info-box-content -->
                </v-card>
            </div>

            @endif

            {{--  TOTAL WITHDRAW  --}}
            <div class="col-12 col-md-4 col-lg-4">
                <v-card class="info-box" hover="true">
                    <!-- Apply any bg-* class to to the icon to color it -->
                    <span class="info-box-icon " style="background-color: #b17c2e; color: #ffffff"><i class="fa fa-dollar"></i></span>
                    <div class="info-box-content">
                    <span class="info-box-text">Total Withdraw</span>
                    <span class="info-box-number">${{number_format($total_withdraw)}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </v-card>
            </div>

            {{--  TOTAL REFERRAL  --}}

              <div class="col-12 col-md-4 col-lg-4">
              <v-card class="info-box" hover="true" link href="{{ route('downlines.index') }}">
                    <!-- Apply any bg-* class to to the icon to color it -->
                    <span class="info-box-icon" style="background-color: #b17c2e; color: #ffffff"><i class="fa fa-dollar"></i></span>
                    <div class="info-box-content">
                    <span class="info-box-text">My Downline</span>
                    <span class="info-box-number">{{number_format($children)}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </v-card>
            </div>

             <div class="col-12 col-md-4 col-lg-4">
              <v-card class="info-box" hover="true" link href="{{ route('downlines.index') }}">
                    <!-- Apply any bg-* class to to the icon to color it -->
                    <span class="info-box-icon " style="background-color: #b17c2e; color: #ffffff"><i class="fa fa-dollar"></i></span>
                    <div class="info-box-content">
                    <span class="info-box-text">My withdrawal interval</span>
                    <span class="info-box-number">
                        @if ($withdrawalInterval == 7) 
                            Weekly 7%
                        @endif

                        @if ($withdrawalInterval == 14)
                            Biweekly 14.2%
                        @endif

                        @if($withdrawalInterval == 30)
                            Monthly 30%
                        @endif
                    </span>
                    </div>
                    <!-- /.info-box-content -->
                </v-card>
            </div>
           
        @endif
        @if (Auth::user()->role_id == 1)
            <div class="col-12 col-md-4 col-lg-4">
                <v-card class="info-box" hover="true" link href="/users">
                    <!-- Apply any bg-* class to to the icon to color it -->
                    <span class="info-box-icon" style="background-color: #b17c2e; color: #ffffff"><i class="fa fa-users"></i></span>
                    <div class="info-box-content">
                    <span class="info-box-text">Registered User(s)</span>
                    <span class="info-box-number">{{ number_format($registered_users) }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </v-card>
            </div>

                       {{--  USERS ON MINI PLAN  --}}
            <div class="col-12 col-md-4 col-lg-4">
                <v-card class="info-box" hover="true" link href="/users/mini-investors"> 
                    <!-- Apply any bg-* class to to the icon to color it -->
                    <span class="info-box-icon " style="background-color: #b17c2e; color: #ffffff"><i class="fa fa-cube"></i></span>
                    <div class="info-box-content">
                    <span class="info-box-text">User(s) on Mini Plan</span>
                    <span class="info-box-number">{{ number_format($users_on_basic) }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </v-card>
            </div>

            {{--  USERS ON STANDARD PLAN  --}}
            <div class="col-12 col-md-4 col-lg-4">
                <v-card class="info-box" hover="true" link href="/users/standard-investors">
                    <!-- Apply any bg-* class to to the icon to color it -->
                    <span class="info-box-icon " style="background-color: #b17c2e; color: #ffffff"><i class="fa fa-adjust"></i></span>
                    <div class="info-box-content">
                    <span class="info-box-text">User(s) on Standard Plan</span>
                    <span class="info-box-number">{{ number_format($users_on_sliver) }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </v-card>
            </div>

            {{--  USERS ON PREMIUM PLAN  --}}
            <div class="col-12 col-md-4 col-lg-4">
                <v-card class="info-box" hover="true" link href="/users/premium-investors">
                    <!-- Apply any bg-* class to to the icon to color it -->
                    <span class="info-box-icon " style="background-color: #b17c2e; color: #ffffff"><i class="fa fa-cubes"></i></span>
                    <div class="info-box-content">
                    <span class="info-box-text">User(s) on Premium Plan</span>
                    <span class="info-box-number">{{ number_format($users_on_gold) }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </v-card>
            </div>

            {{--  USERS ON PREMIUM PRO PLAN  --}}
            <div class="col-12 col-md-4 col-lg-4">
                <v-card class="info-box" hover="true" link href="/users/premium-pro-investors">
                    <!-- Apply any bg-* class to to the icon to color it -->
                    <span class="info-box-icon " style="background-color: #b17c2e; color: #ffffff"><i class="fa fa-diamond"></i></span>
                    <div class="info-box-content">
                    <span class="info-box-text">User(s) on Premium pro Plan</span>
                    <span class="info-box-number">{{ number_format($users_on_diamond) }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </v-card>
            </div>

             {{--  PENDING TRANSACTION  --}}
             <div class="col-12 col-md-4 col-lg-4">
                <v-card class="info-box" hover="true" link href="/transactions">
                    <!-- Apply any bg-* class to to the icon to color it -->
                    <span class="info-box-icon " style="background-color: #b17c2e; color: #ffffff"><i class="fa fa-hourglass"></i></span>
                    <div class="info-box-content">
                    <span class="info-box-text">Pending transactions</span>
                    <span class="info-box-number">{{ number_format($pending_transactions) }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </v-card>
            </div>

                         {{--  TOTAL USERS DEPOSIT  --}}
             <div class="col-12 col-md-4 col-lg-4">
                <v-card class="info-box" hover>
                    <!-- Apply any bg-* class to to the icon to color it -->
                    <span class="info-box-icon " style="background-color: #b17c2e; color: #ffffff"><i class="fa fa-bank"></i></span>
                    <div class="info-box-content">
                    <span class="info-box-text">Total Confirmed Deposit</span>
                    <span class="info-box-number">${{ number_format($totalUsersDeposit) }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </v-card>
            </div>

                  {{--  TOTAL USERS WITHDRAWAL  --}}
             <div class="col-12 col-md-4 col-lg-4">
                <v-card class="info-box" hover="true">
                    <!-- Apply any bg-* class to to the icon to color it -->
                    <span class="info-box-icon " style="background-color: #b17c2e; color: #ffffff"><i class="fa fa-money"></i></span>
                    <div class="info-box-content">
                    <span class="info-box-text">Total Confirmed Withdrawal</span>
                    <span class="info-box-number">${{ number_format($totalUsersWithdrawal) }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </v-card>
            </div>

             {{--  CONFIRM TRANSACTION  --}}
             <div class="col-12 col-md-4 col-lg-4">
                <v-card class="info-box" hover="true" link href="/transactions">
                    <!-- Apply any bg-* class to to the icon to color it -->
                    <span class="info-box-icon" style="background-color: #b17c2e; color: #ffffff"><i class="fa fa-check"></i></span>
                    <div class="info-box-content">
                    <span class="info-box-text">Confirm transactions</span>
                    <span class="info-box-number">{{ number_format($confirm_transactions) }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </v-card>
            </div>
        @endif
    </div>
    <v-divider></v-divider>
    @if (Auth::user()->role_id == 2)
        <v-container>
            <v-row>
                <v-col cols="12" xs="12" md="3" lg="3">
                    <v-card hover color="" tile shaped>
                <v-card-title>
                    <v-btn text color="blue" class="mx-auto">
                        <span style="font-size: 15px">Mini Investors</span>
                    </v-btn>
     
                </v-card-title>
                <v-card-text class="" justify="center" align="center" dark>
                    <p class="caption mx-auto font-weight-bold">Basic Investments for Beginners</p>
                    <p class="subtitle">Min First Deposit</p>
            <p class="headline font-weight-bold" style="color: black">$100 - $1,000</p>
                    <v-divider width="90"></v-divider>
                    <p>
                    <v-icon color="green" small>mdi-check</v-icon><b>{{ $miniAnnualPercentage }}% annual profit</b>

                    </p>


                    <p class="subtitle">
                    <v-icon color="green" small>mdi-check</v-icon> <b>{{ $miniPercentage }}% referral bonus</b>
                    </p>

                    <p class="subtitle">
                        <v-icon color="green" small>mdi-check</v-icon> <b>8% RMR</b>
                    </p>

                    <p class="subtitle">
                        <v-icon color="green" small>mdi-check</v-icon> <b>Mini incentives</b>
                    </p>
                      <p class="subtitle">
                                <v-icon color="green" small>mdi-check</v-icon> <b>Active downlines</b>
                            </p>
                             <p class="subtitle">
                                <v-icon color="green" small>mdi-check</v-icon> <b>Referral limit</b><br>
                                <span style="font-size: 29px"><v-icon color="green">mdi-arrow-right</v-icon> &infin;</span>

                            </p>
                </v-card-text>
            </v-card>

                </v-col>

                <v-col cols="12" xs="12"  md="3" lg="3">
                      <v-card hover color="" tile shaped>
                <v-card-title>
                    <v-btn text color="orange" class="mx-auto">
                         <span style="font-size: 15px">Standard Investors</span>
                    </v-btn>
                </v-card-title>
                <v-card-text class="" justify="center" align="center" dark>
                    <p class="caption mx-auto font-weight-bold">Standard investors</p>
                    <p class="subtitle">Min First Deposit</p>
                    <p class="headline font-weight-bold" style="color: black">$1,000 - $10k</p>
                    <v-divider width="90"></v-divider>
                    <p>
                    <v-icon color="green" small>mdi-check</v-icon><b>{{ $standardAnnualPercentage }}% annual profit</b>

                    </p>


                    <p class="subtitle">
                    <v-icon color="green" small>mdi-check</v-icon> <b>{{ $standardPercentage }}% referral bonus</b>
                    </p>

                    <p class="subtitle">
                        <v-icon color="green" small>mdi-check</v-icon> <b>10% RMR</b>
                    </p>

                    <p class="subtitle">
                        <v-icon color="green" small>mdi-check</v-icon> <b>Standard incentives</b>
                    </p>

                      <p class="subtitle">
                                <v-icon color="green" small>mdi-check</v-icon> <b>Active downlines</b>
                            </p>
                             <p class="subtitle">
                                <v-icon color="green" small>mdi-check</v-icon> <b>Referral limit</b><br>
                                <span style="font-size: 29px"><v-icon color="green">mdi-arrow-right</v-icon> &infin;</span>

                            </p>
                </v-card-text>
            
                    </v-card>
                </v-col>

                <v-col cols="12" xs="12"  md="3" lg="3">
                      <v-card hover color="" tile shaped>
                <v-card-title>
                    <v-btn text color="teal" class="mx-auto">
                         <span style="font-size: 15px">Premium Investors</span>
                    </v-btn>
                </v-card-title>
                <v-card-text class="" justify="center" align="center" dark>
                    <p class="caption mx-auto font-weight-bold">Premium investors</p>
                    <p class="subtitle">Min First Deposit</p>
                    <p class="headline font-weight-bold" style="color: black">$10k- $100k</p>
                    <v-divider width="90"></v-divider>
                    <p>
                    <v-icon color="green" small>mdi-check</v-icon><b>{{ $premiumAnnualPercentage }}% annual profit</b>

                    </p>


                    <p class="subtitle">
                    <v-icon color="green" small>mdi-check</v-icon> <b>{{ $premiumPercentage }}% referral bonus</b>
                    </p>

                    <p class="subtitle">
                        <v-icon color="green" small>mdi-check</v-icon> <b>12.5% RMR</b>
                    </p>

                    <p class="subtitle">
                        <v-icon color="green" small>mdi-check</v-icon> <b>Premium incentives</b>
                    </p>
                      <p class="subtitle">
                                <v-icon color="green" small>mdi-check</v-icon> <b>Active downlines</b>
                            </p>
                             <p class="subtitle">
                                <v-icon color="green" small>mdi-check</v-icon> <b>Referral limit</b><br>
                                <span style="font-size: 29px"><v-icon color="green">mdi-arrow-right</v-icon> &infin;</span>

                            </p>
                </v-card-text>
            </v-card>
                </v-col>

                <v-col cols="12" xs="12"  md="3" lg="3">
                     <v-card hover color="" tile shaped>
                <v-card-title>
                    <v-btn text class="mx-auto">
                         <span style="font-size: 15px">Premium pro Investors</span>
                    </v-btn>
                </v-card-title>
                <v-card-text class="" justify="center" align="center" dark>
                    <p class="caption mx-auto font-weight-bold">Premium pro investors</p>
                    <p class="subtitle">Min First Deposit</p>
                    <p class="headline font-weight-bold" style="color: black">$100k+</p>
                    <v-divider width="90"></v-divider>
                    <p>
                    <v-icon color="green" small>mdi-check</v-icon><b>{{ $premiumAnnualProPercentage }}% annual profit</b>

                    </p>


                    <p class="subtitle">
                    <v-icon color="green" small>mdi-check</v-icon> <b>{{ $premiumProPercentage }}% referral bonus</b>
                    </p>

                    <p class="subtitle">
                        <v-icon color="green" small>mdi-check</v-icon> <b>15% RMR</b>
                    </p>

                    <p class="subtitle">
                        <v-icon color="green" small>mdi-check</v-icon> <b>Premium pro incentives</b>
                    </p>
                      <p class="subtitle">
                                <v-icon color="green" small>mdi-check</v-icon> <b>Active downlines</b>
                            </p>
                             <p class="subtitle">
                                <v-icon color="green" small>mdi-check</v-icon> <b>Referral limit</b><br>
                                <span style="font-size: 29px"><v-icon color="green">mdi-arrow-right</v-icon> &infin;</span>

                            </p>
                </v-card-text>
            </v-card>
                </v-col>

                    <v-col cols="12" xs="12"  md="3" lg="3">
                     <v-card hover color="" tile shaped>
                <v-card-title>
                    <v-btn text class="mx-auto">
                         <span style="font-size: 15px">Introducing Broker </span>
                    </v-btn>
                </v-card-title>
                <v-card-text class="" justify="center" align="center" dark>
                    <p class="caption mx-auto font-weight-bold">CFI IBs</p>
                    <p class="subtitle">Min First Deposit</p>
                    <p class="headline font-weight-bold" style="color: black">$0- $<span style="font-size: 25px; position: absolute" class="mt-2">&infin;</span></p>
                    <v-divider width="90"></v-divider>
                    <p>
                        <v-icon color="green" small>mdi-check</v-icon><b>Annual profit </b><span style="font-size: 25px; position: absolute" class="mt-2">&infin;</span>

                    </p>

                     <p>
                        <v-icon color="green" small>mdi-check</v-icon><b>RMR - <span style="color: red">(X)</span></b>
                     </p>


                 
                            <p class="subtitle">
                                <v-icon color="green
                                " small>mdi-check</v-icon> <b>10% referral bonus</b>
                            </p>

                    <p class="subtitle">
                                <v-icon color="green" small>mdi-check</v-icon> <b>Active downlines</b>
                            </p>

                              <p class="subtitle">
                                <v-icon color="green" small>mdi-check</v-icon> <b>IBs incentives</b>
                

                            </p>

                            <p class="subtitle">
                                <v-icon color="green" small>mdi-check</v-icon> <b>Referral limit</b><br>
                                <span style="font-size: 29px"><v-icon color="green">mdi-arrow-right</v-icon> &infin;</span>

                            </p>
                </v-card-text>
            </v-card>
                </v-col>

               
            </v-row>

    @endif

     <v-dialog v-model="dialog10" width="500">
       

        <v-card>
            <v-card-title class="headline grey lighten-2" primary-title>
                <h3 class="text-center">WITHDRAWAL INTERVALS</h3>
                <p class="text-danger">Please select a withdrawal interval</p>
            </v-card-title>
            <v-divider></v-divider>
            <v-card-text>
            <v-list>
                <form method="POST" action="{{ url('withdrawal/interval') }}" id="withdrawalForm">
                      @csrf

                      @error('withdrawal_interval')
                        <p class="alert alert-danger text-center">{{$message}}</p>
                      @enderror
                <v-list-item-group>
                    <v-list-item>
                        <v-list-icon>
                            <v-icon>mdi-check</v-icon>
                        </v-list-icon>
                        <v-list-item-content>Weekly 7%</v-list-item-content>
                        <v-spacer></v-spacer>
                      
                            <input type="radio" name="withdrawal_interval" id="weekly" value="7">
                     
                    </v-list-item>

                    <v-list-item>
                        <v-list-icon>
                            <v-icon>mdi-check</v-icon>
                        </v-list-icon>
                        <v-list-item-content>BiWeekly 14.5%</v-list-item-content>
                          <v-spacer></v-spacer>
                       
                            <input type="radio" name="withdrawal_interval" id="biweekly" value="14">
                       
                    </v-list-item>

                    <v-list-item>
                        <v-list-icon>
                            <v-icon>mdi-check</v-icon>
                        </v-list-icon>
                        <v-list-item-content>Monthly 30%</v-list-item-content>
                          <v-spacer></v-spacer>
                       
                            <input type="radio" name="withdrawal_interval" id="monthly" value="30">
                     
                    </v-list-item>
                </v-list-item-group>
            </form>
            </v-list>
            
            </v-card-text>

        <v-card-actions>
            <button class="btn btn-danger" @click="dialog10 = false">Close</button>
            <v-spacer></v-spacer>
            <button class="btn btn-success" form="withdrawalForm">Submit</v-btn>
        </v-card-actions>

        </v-card>
     </v-dialog>

</div>
@endsection

@section('script')

    <script>
       

        var app = new Vue({
           
            el: '#app',
            data: () => ({
                profile_pic: null,
                dialog10: {!! json_encode($status) !!},
                items: [
                  {
                    text: 'Dashboard',
                    disabled: false,
                    href: '/dashboard',
                  },
                  {
                    text: 'home',
                    disabled: false,
                    href: '/',
                  },

                ],
                {{--  lang: 'En',

                locales : [
                    {
                        language: 'en',
                        image: './img/custom/us.png'
                    },
                    {
                        language: 'fr',
                        image: './img/custom/fr.png'
                    }
                ]
                },  --}}
              }),

              methods: {

                changeLang(language) {
                    this.lang = language;
                }
              }
        });

    </script>

@endsection


