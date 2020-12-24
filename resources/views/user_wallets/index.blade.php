@extends('layouts.app')

@section('content')

    <div class="container">
        <v-breadcrumbs :items="items" large></v-breadcrumbs>
        {{-- <div class="row"> --}}
            <v-card hover="true" class="box box-default">
                <v-card-title class="box-header with-boder">
                    <h4 class="display-5">USERS WALLET INFO</h4>
                    <v-spacer></v-spacer>
                    <div class="box-tools">

                        <button cass="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </v-card-title>
                <v-divider></v-divider>
                <v-card-text class="box-body">
                    <v-simple-table>
                        <template v-slot:default>
                            <thead>
                                <tr>
                                    <th class="text-left">Email</th>
                                    <th class="text-left">CFI balance</th>
                                    <th class="text-left">Investment Balance</th>
                                    <th class="text-left">Referral balance</th>
                                    <th class="text-left">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->email }}</td>
                                        <td>${{ number_format($user->wallets()->first()->balance) }}</td>
                                        <td>${{ number_format($user->wallets()->first()->investment_balance) }}</td>
                                        <td>${{ number_format($user->wallets()->first()->referral_balance) }}</td>
                                        <td>
                                            <div class='btn-group'>
                                                <a href="{{ route('user_wallets.edit', [$user->id]) }}"
                                                    class='btn btn-default btn-xs'><i
                                                        class="glyphicon glyphicon-edit"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </template>
                    </v-simple-table>
                    {{ $users->links() }}
                </v-card-text>

                {{--
        </div> --}}

        </v-card>
    </div>


@endsection

@section('script')

    <script>
        var app = new Vue({
            el: '#app',
            data: () => ({
                items: [{
                        text: 'Dashboard',
                        disabled: false,
                        href: '/dashboard',
                    },
                    {
                        text: 'users-wallets',
                        disabled: false,
                        href: '/users-wallet/',
                    },

                ],
            }),
        });

    </script>

@endsection
