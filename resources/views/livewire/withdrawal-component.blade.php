<div>
    <div class="row">
        <div class="cols-12 col-md-6">
            @if ($successMessage || $errorMessage)
                <p class="alert {{ $successMessage ? 'alert-success' : 'alert-error' }}">
                    <i class="fa fa-check-circle fa-2x"></i>
                    {{ $successMessage ? $successMessage : $errorMessage }}

                    <i class="fa fa-close pull-right"
                        wire:click="{{ $successMessage ? '$set("successMessage", null)' : '$set("errorMessage", null)' }}  "></i>
                </p>
            @endif
            <div class="panel" wire:poll>
            {{-- {{ dd($userWithdrawlInterval->end_date)}} --}}
                @if ($userWithdrawlInterval != null)
                    @if ($userWithdrawlInterval->start_date && $userWithdrawlInterval->end_date)
                        @if (Carbon\Carbon::parse($userWithdrawlInterval->end_date)->gte(now()))

                        <div class="alert alert-warning" >
                            <h4 style="" class="text-center">
                                Count Down

                            </h4>
                            <p>Current Date & Time: {{ now() }}</p>
                            <p>Investment Maturity Date & Time: {{ $userWithdrawlInterval->end_date }}</p>
                            <p>Hours remaining
                                {{ Carbon\Carbon::parse($userWithdrawlInterval->end_date)->diffInHours(Carbon\Carbon::now()) }}
                                hr(s)
                            </p>
                            <p>Days remaining
                                {{ Carbon\Carbon::parse($userWithdrawlInterval->end_date)->diffInDays(Carbon\Carbon::now()) }}
                                day(s)
                            </p>
                            <p>Weeks remaining
                                {{ Carbon\Carbon::parse($userWithdrawlInterval->end_date)->diffInWeeks(Carbon\Carbon::now()) }}
                                wk(s)
                            </p>

                        </div>

                        @else
                                
                        @endif
                    @endif
                @endif
                <div class="panel-title">
                    <h5 class="display-1" style="font-size: 17px">
                        <i class="fa fa-minus-circle"></i> Withdraw From CFI Wallet
                    </h5>
                </div>
                <div class="panel-body">

                    <form action="{{ url('withdraw/store') }}" wire:submit.prevent="withdrawFromMainWallet"
                        method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="Enter amount to withdraw">
                                Enter amount to withdraw
                            </label>
                            <input wire:model="amount" type="number" style="width: 100%" required class="form-control"
                                name="amount" value="{{ old('amount') }}">
                        </div>

                        <div class="form-group">
                            <label for="Enter wallet address">
                                Enter your wallet address to recieve payment
                            </label>
                            <input type="text" wire:model="walletAddress" required class="form-control"
                                name="wallet_address" value="{{ old('wallet_address') }}">
                        </div>


                          @if ($userWithdrawlInterval != null)
                                @if ($userWithdrawlInterval->start_date && $userWithdrawlInterval->end_date)
                                    @if (Carbon\Carbon::now()->gt(Carbon\Carbon::parse($userWithdrawlInterval->end_date)))
                                    <button type="submit" style="width: 100%" class="btn btn-success"><i class="fa fa-minus-circle"></i> Withdraw</button>
                                    @else
                                    <button type="submit" style="width: 100%" disabled class="btn btn-success"><i class="fa fa-minus-circle"></i> Withdraw</button>
                                    @endif
                                
                                @else
                                    <button type="submit" disabled style="width: 100%" class="btn btn-success"><i class="fa fa-minus-circle"></i> Withdraw</button>
                            @endif
                        @endif

                    </form>

                </div>
            </div>
        </div>

        <div class="cols-12 col-md-6">
            @if ($referralSuccessMessage || $referralErrorMessage)
                <p class="alert {{ $referralSuccessMessage ? 'alert-success' : 'alert-error' }}">
                    <i class="fa fa-check-circle fa-2x"></i>
                    {{ $referralSuccessMessage ? $referralSuccessMessage : $referralErrorMessage }}

                    <i class="fa fa-close pull-right"
                        wire:click="{{ $referralSuccessMessage ? '$set("referralSuccessMessage", null)' : '$set("referralErrorMessage", null)' }}  "></i>
                </p>
            @endif
            <div class="panel">
                <div class="panel-title">
                    <h5 class="display-1" style="font-size: 17px">
                        <i class="fa fa-minus-circle"></i> Withdraw From Referral Wallet
                    </h5>
                </div>
                <div class="panel-body">


                    <form action="{{ url('withdraw/bonus') }}" wire:submit.prevent="withdrawFromReferralWallet"
                        method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="Enter amount to withdraw">
                                Enter amount to withdraw
                            </label>
                            <input type="number" style="width: 100%" wire:model="referralAmount" required
                                class="form-control" name="amount" value="{{ old('referralAmount') }}">
                        </div>

                        <div class="form-group">
                            <label for="Enter wallet address">
                                Enter your wallet address to recieve payment
                            </label>
                            <input type="text" required class="form-control" wire:model="referralWalletAddress"
                                name="referralWalletAddress" value="{{ old('referralWalletAddress') }}">
                        </div>

                        <button type="submit" style="width: 100%" class="btn btn-success"><i
                                class="fa fa-minus-circle"></i>
                            Withdraw</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
