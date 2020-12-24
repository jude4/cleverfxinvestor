@extends('layouts.app')

@section('content')
    <v-container>
        <v-card-actions>

            <v-breadcrumbs :items="items" large></v-breadcrumbs>
            @if (Auth::user()->role_id == 1)
            <v-spacer></v-spacer>
                <a class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('accounts.create') }}"><i class="fa fa-plus"></i> Create</a>
            @endif
            </v-card-actions>

        <v-card hover="true" class="box box-default">
            <div class="box-header with-boder">
                <section class="content-header ">
                    @if (Auth::user()->role_id == 1)
                     <h1 class="pull-left ">Wallet Address</h1>
                    @else
                    <h1 class="pull-left ">Deposit Address</h1>
                    @endif
                    <h1 class="pull-right box-tools">
                       {{--  <span class="">  --}}
                        <button cass="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                       {{--  </span>  --}}
                    </h1>
                </section>
            </div>
            <v-card-text class="box-body">
                <div class="content">
                    <div class="clearfix"></div>

                    @include('flash::message')

                    <div class="clearfix"></div>
                    <div class="box box-primary">
                        <div class="box-body">
                                @include('accounts.table')
                        </div>
                    </div>
                    <div class="text-center">

                    </div>
                </div>
            </v-card-text>

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
                    text: 'wallet-address',
                    disabled: false,
                    href: '/accounts/',
                  },

                ],
            },
            
            methods: {
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

