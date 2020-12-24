@extends('layouts.app')

@section('content')
    <section class="content-header">
        <v-breadcrumbs :items="items" large></v-breadcrumbs>
        <h1 class="pull-left">Update Referral bonus percentage</h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body" style="background-color: whitesmoke">
                <v-row>
                    <v-col cols="12" md="6" lg="6" class="">
                        <v-card>
                            <v-card-title>
                                <h5 class="display-1" style="font-size: 17px">
                                    <i class="fa fa-minus-circle"></i> Account type percentage for referral bonus
                                    <p style="color: red; font-size: 12px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"
                                        class="text-center">*Please note that percentage must not be in decimal figure</p>
                                </h5>
                            </v-card-title>
                            <v-card-text>


                                <v-form action="{{ url('miscellenous/update') }}" method="POST">
                                    @csrf
                                    <v-text-field type="number" label="Mini investment percentage" name="mini"
                                        value="{{ $miniPercentage }}"></v-text-field>
                                    @error('mini')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <v-text-field type="number" label="Standard investment percentage" name="standard"
                                        value="{{ $standardPercentage }}"></v-text-field>
                                    @error('standard')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <v-text-field type="number" label="Premium investment percentage" name="premium"
                                        value="{{ $premiumPercentage }}"></v-text-field>
                                    @error('premium')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <v-text-field type="number" label="Premium pro investment percentage" name="premium_pro"
                                        value="{{ $premiumProPercentage }}"></v-text-field>
                                    @error('premium_pro')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                     <v-text-field type="number" label="CFIIs investment percentage" name="cfiis"
                                        value="{{ $cfiisPercentage }}"></v-text-field>
                                    @error('cfiibs')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <v-card-actions>
                                        <v-spacer></v-spacer>
                                        <button type="submit" class="btn btn-success"><i class="fa fa-minus-circle"></i>
                                            Update</button>
                                    </v-card-actions>
                                </v-form>

                            </v-card-text>
                        </v-card>
                    </v-col>

                    <v-col cols="12" md="6" lg="6" class="">
                        <v-card>
                            <v-card-title>
                                <h5 class="display-1" style="font-size: 17px">
                                    <i class="fa fa-minus-circle"></i> Annual profit percentage
                                    <p style="color: red; font-size: 12px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"
                                        class="text-center">*Please note that percentage must not be in decimal figure</p>

                                </h5>
                            </v-card-title>
                            <v-card-text>
                                    <v-form action="{{ url('miscellenous/update') }}" method="POST">
                                        @csrf
                                        <v-text-field type="number" label="Mini Annual percentage" name="miniAnnual"
                                            value="{{ $miniAnnualPercentage }}"></v-text-field>
                                        @error('miniAnnual')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <v-text-field type="number" label="Standard Annual percentage" name="standardAnnual"
                                            value="{{ $standardAnnualPercentage }}"></v-text-field>
                                        @error('standardAnnual')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <v-text-field type="number" label="Premium Annual percentage" name="premiumAnnual"
                                            value="{{ $premiumAnnualPercentage }}"></v-text-field>
                                        @error('premiumAnnual')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <v-text-field type="number" label="Premium pro Annual percentage"
                                            name="premiumProAnnual" value="{{ $premiumAnnualProPercentage }}"></v-text-field>
                                        @error('premiumProAnnual')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <v-card-actions>
                                            <v-spacer></v-spacer>
                                            <button type="submit" class="btn btn-success"><i class="fa fa-minus-circle"></i>
                                                Update</button>
                                        </v-card-actions>
                                    </v-form>

                                </v-card-text>
                        </v-card>
                    </v-col>

                    <v-col cols="12" md="6" lg="6" class="">
                        <v-card>
                            <v-card-title>
                                <h5 class="display-1" style="font-size: 17px">
                                    <i class="fa fa-minus-circle"></i> Referral bonus percentage for downline
                                    <p style="color: red; font-size: 12px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"
                                        class="text-center">*Please note that percentage must not be in decimal figure</p>

                                </h5>
                            </v-card-title>
                            <v-card-text>


                                <v-form action="{{ url('miscellenous/update') }}" method="POST">
                                    @csrf
                                      <v-text-field type="number" label="Parent instance percentage" name="grandParent"
                                        value="{{ $grandParentPercentage }}"></v-text-field>
                                    @error('grandParent')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                    <v-text-field type="number" label="First instance percentage" name="first"
                                        value="{{ $firstInstance }}"></v-text-field>
                                    @error('first')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                    <v-text-field type="number" label="Second instance percentage" name="second"
                                        value="{{ $secondInstance }}"></v-text-field>
                                    @error('second')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                      <v-text-field type="number" label="Third instance percentage" name="third"
                                        value="{{ $thirdInstance }}"></v-text-field>
                                    @error('downline')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                    <v-text-field type="number" label="Total percentage" name="total"
                                        value="{{ $total }}"></v-text-field>
                                    @error('total')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <v-card-actions>
                                        <v-spacer></v-spacer>
                                        <button type="submit" class="btn btn-success"><i class="fa fa-minus-circle"></i>
                                            Update</button>
                                    </v-card-actions>
                                </v-form>

                            </v-card-text>
                        </v-card>
                    </v-col>
                </v-row>
            </div>
        </div>

        <div class="text-center">

        </div>
    </div>
@endsection

@section('script')
    <script>
        var app = new Vue({
            el: '#app'
        })

    </script>
@endsection
