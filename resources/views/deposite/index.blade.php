@extends('layouts.app')
@section('title', 'Deposit')
@section('content')
<br>
    <div class="container" >
        <v-breadcrumbs :items="items" large></v-breadcrumbs
            
            <div class="row">
                @include('flash::message')
         

              <div class="col-12 col-md-12">
                <v-card hover="true">
                    <v-card-title>
                        <h4 class="display-4 text-primary"><i class="fa fa-bank"></i>DEPOSIT TO START ENARNING</h4>
                    </v-card-title>
                    <v-card-text>
                         <v-row>
                            <v-col cols="12" xs="12" md="3" lg="3">
                    <v-card hover color="" tile shaped>
                <v-card-title>
                    <v-btn text color="blue" x-large class="mx-auto">
                         <span style="font-size: 15px">Mini Investors</span>
                    </v-btn>
                   
                   
                    
                   
                
                </v-card-title>
                <v-card-text class="" justify="center" align="center" dark>
                    <p class="caption mx-auto font-weight-bold">Basic Trading for Beginners</p>
                    <p class="subtitle">Min First Deposit</p>
                    <p class="headline font-weight-bold" style="color: black">$100 - $1,000</p>
                    <v-divider width="90"></v-divider>
                    <p>
                    <v-icon color="green" small>mdi-check</v-icon><b> {{ $miniAnnualPercentage }}% annual profit</b>

                    </p>


                    <p class="subtitle">
                    <v-icon color="green" small>mdi-check</v-icon> <b>{{ $miniPercentage }}% referral bonus</b>
                    </p>

                    <p class="subtitle">
                        <v-icon color="green" small>mdi-check</v-icon> <b>10% R.M.R</b>
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
                    <v-btn text color="orange" x-large class="mx-auto">
                         <span style="font-size: 15px">Standard Investors</span>
                    </v-btn>
                </v-card-title>
                <v-card-text class="" justify="center" align="center" dark>
                    <p class="caption mx-auto font-weight-bold">Standard Traders</p>
                    <p class="subtitle">Min First Deposit</p>
                    <p class="headline font-weight-bold" style="color: black">$1,000 - $10K</p>
                    <v-divider width="90"></v-divider>
                    <p>
                    <v-icon color="green" small>mdi-check</v-icon><b>{{ $standardAnnualPercentage }}% annual profit</b>

                    </p>


                    <p class="subtitle">
                    <v-icon color="green" small>mdi-check</v-icon> <b>{{ $standardPercentage }}% referral bonus</b>
                    </p>

                    <p class="subtitle">
                        <v-icon color="green" small>mdi-check</v-icon> <b>10% R.M.R</b>
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
                    <v-btn text color="teal" x-large class="mx-auto">
                         <span style="font-size: 15px">Premium Investors</span>
                    </v-btn>
                </v-card-title>
                <v-card-text class="" justify="center" align="center" dark>
                    <p class="caption mx-auto font-weight-bold">Premium Traders</p>
                    <p class="subtitle">Min First Deposit</p>
                    <p class="headline font-weight-bold" style="color: black">$10K - $100K</p>
                    <v-divider width="90"></v-divider>
                    <p>
                    <v-icon color="green" small>mdi-check</v-icon><b>{{ $premiumAnnualPercentage }}% annual profit</b>

                    </p>


                    <p class="subtitle">
                    <v-icon color="green" small>mdi-check</v-icon> <b>{{ $premiumPercentage }}% referral bonus</b>
                    </p>

                    <p class="subtitle">
                        <v-icon color="green" small>mdi-check</v-icon> <b>15% R.M.R</b>
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
                    <v-btn text x-large class="mx-auto">
                         <span style="font-size: 15px">Premium pro Investors</span>
                    </v-btn>
                </v-card-title>
                <v-card-text class="" justify="center" align="center" dark>
                    <p class="caption mx-auto font-weight-bold">Premium pro Traders</p>
                    <p class="subtitle">Min First Deposit</p>
                    <p class="headline font-weight-bold" style="color: black">$100K+</p>
                    <v-divider width="90"></v-divider>
                    <p>
                    <v-icon color="green" small>mdi-check</v-icon><b>{{ $premiumProPercentage }}% annual profit</b>

                    </p>


                    <p class="subtitle">
                    <v-icon color="green" small>mdi-check</v-icon> <b>{{ $premiumProPercentage }}% referral bonus</b>
                    </p>

                    <p class="subtitle">
                        <v-icon color="green" small>mdi-check</v-icon> <b>15% R.M.R</b>
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
                    <v-btn text x-large class="mx-auto">
                         <span style="font-size: 15px">Introducing Broker</span>
                    </v-btn>
                </v-card-title>
                <v-card-text class="" justify="center" align="center" dark>
                    <p class="caption mx-auto font-weight-bold">CFI IBs</p>
                    <p class="subtitle">Min First Deposit</p>
                     <p class="headline font-weight-bold" style="color: black">$0- $&infin;</p>

                    <v-divider width="90"></v-divider>
                                       <p class="subtitle">
                                <v-icon color="green" small>mdi-check</v-icon> <b>Annual profit &infin;</b>
                            </p>


                      <p>
                                <v-icon color="green" small>mdi-check</v-icon><b>R.M.R <span style="color: red">(X)</span></b>

                            </p>
                  
                            <p class="subtitle">
                                <v-icon color="green" small>mdi-check</v-icon> <b>10% Referral bonus</b>
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
                        </v-row>




                      <v-form @submit.prevent="">

                            <v-text-field
                                label="Enter Amount to Invest"
                                type="number"
                                prepend-icon="mdi-cash"
                                v-model="amount"
                                :rules="amountRules"
                                value="{{ old('amount') }}"
                                @keyup="btnEvent"
                                required
                            ></v-text-field>
                            @if ($errors->has('amount'))
                                <p class="help is-danger text-danger text-center">{{ $errors->first('amount') }}</p>
                            @endif

                    </v-form>
                                <v-card-actions>
                                        <v-dialog v-model="dialog" persistent max-width="600px">
                                            <template v-slot:activator="{ on }">
                                              <button :disabled="disabled" class="btn btn-block btn-success" v-on="on">
                                                  <span v-if="loading">
                                                      <v-progress-circular size="20" color="basil" indeterminate></v-progress-circular>
                                                  </span>
                                                  <span v-if="!loading">Proceed</span>
                                            </button>

                                            </template>
                                            <v-card>
                                              <v-card-title>
                                                <span class="headline">PAYMENT VALIDATION</span>
                                              </v-card-title>
                                              <v-form ref="myForm" @submit.prevent="onDeposite" enctype="multipart/form-data">
                                              
                                              <v-card-text>
                                                <v-container>
                                                  <v-row>
                                                    <v-col cols="12" xs="12" md="12">
                                                        <p class="text-danger">Please Kindly Make Payment to the any of the company wallet address</p>
                                                        <table class="col-md-12 col-xs-12">
                                                            <tr>
                                                                <th></th>
                                                                <th>Wallet Address</th>
                                                            </tr>

                                                            @foreach($company_wallets as $company_wallet)
                                                                <tr>
                                                                    <td>
                                                                        <img src="{{ asset('storage/'.$company_wallet->img) }}" width="40px" />
                                                                    </td>
                                                                    <td>

                                                                    <v-text-field id="{{ $company_wallet->id }}" ref="linkToCopy" type="text" value="{{ $company_wallet->wallet_address }}"></v-text-field>
                                                                    <v-btn @click.prevent="copyLink({!! json_encode($company_wallet->id) !!})">Copy</v-btn>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                            
                                                        </table>
                                                            
                                                    </v-col>

                                                  </v-row>
                                                </v-container>
                                              </v-card-text>
                                              <v-card-actions>
                                                  {{--  <button class="btn btn-default"  @click="dialog = false">Close</button>  --}}
                                                <v-spacer></v-spacer>
                                                <button class="btn btn-success" @click="dialog = false">Save</button>
                                              </v-card-actions>
                                            </v-form>
                                            </v-card>
                                          </v-dialog>
                                </v-card-actions>
                    </v-card-text>

                </v-card>
                <div class="col-md-12" v-show="upload">
                    <v-card>
                        <v-card-text  class="alert alert-warning">
                               
                                <form method="POST"  enctype="multipart/form-data" action="{{ url('upload_proof') }}">
                                    @csrf
                                    <p> <i class="fa fa-warning"></i> PLEASE UPLOAD YOUR PROOF OF PAYMENT FOR CONFIRMATION</p>
                                    <div class="custom-file mb-3">
                                      <input type="file" class="custom-file-input" id="customFile" name="payment_proof">
                                    </div>
                                    <input type="hidden" v-model="wallet_address" name="wallet_address" id="wallet_address" />

                                    <input type="hidden" name="amount" v-model="amount">
                                    <br>
                                    <div class="mt-3">
                                      <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </form>
                        </v-card-text>
                    </v-card>
                </div>

            </div>

         

    </div>
    
@endsection

@section('script')
    <script>
        var app = new Vue({

            el: '#app',
            data : {
               upload: false,
               
                items: [
                    {
                      text: 'Dashboard',
                      disabled: false,
                      href: '/dashboard',
                    },
                    {
                      text: 'deposit',
                      disabled: false,
                      href: '/deposit',
                    },

                  ],

                  amountRules: [
                    v => !!v || 'Invalid input',

                  ],

                  loading: false,
                  disabled: true,
                  dialog: false,
                  message: false,
                  amount : "",
                  wallet_address: "",
                  id: {!! auth()->user()->id !!}
            },

            methods: {

                onDeposite() {
                    this.disabled = true
                    this.loading = true
                    let amount = this.amount
                    let wallet_address = this.wallet_address
                    let id = this.id
                    var formData = new FormData()
                    formData.append('id', this.id)
                    formData.append('amount', this.amount)
                    formData.append('wallet_address', this.wallet_address)

                    axios
                        .post('api/deposit', formData)
                        .then((response) => {
                                console.log('it is working')
                                this.loading = false
                                this.disabled = false
                                this.message = true
                                this.disabled = true
                                this.upload = true
                            })
                            .catch((response) => {
                                console.log('error')
                                this.loading = false
                                alert('!Oops Something went wrong, Please check your input')
                                this.disabled = true
                            })
                },

                btnEvent(event) {
                    if (this.amount >= 10) {
                        this.disabled = false
                    } else {
                        this.disabled = true
                    }
                },

                 copyLink(text) {
               let input = document.getElementById(text);
               input.select();
                document.execCommand("copy");
                let wallet_address = document.getElementById('wallet_address');
                this.wallet_address = input.value;
                alert('Link copied');
            }
            }
        });
    </script>
@endsection
