@extends('layouts.master')

@section('title', 'Security of Funds')

@section('content')
@livewire('nav-bar')
    <div>
        <v-parallax src="/images/paraxal.jpg" height="200">
            <h2 class="display-sm-2 mx-auto">
                SECURITY OF FUNDS
            </h2>

        </v-parallax>

        <v-container>
            <p class="title font-weight-thin mx-auto text-center">
                Here at cleverfxinvestor we understand that successful investors have to give their full attention to their investments rather than worrying about the safety of their funds. We have therefore taken additional measures to ensure adequate levels of safety for your funds.
            </p>
            <v-row>
                <v-col cols="12" md="12">
                    <v-card flat>

                        <v-card-text class="text-center">
                            <v-icon size="50" color="#b17c2e">mdi-cancel</v-icon><br>
                            <span style="color:#b17c2e" class="title font-weight-bold">Market Leading Insurance</span>
                        </v-card-text>

                        <v-card-text class="title font-weight-thin">

                            cleverfxinvestor has made further efforts to safeguard its liabilities against Clients and other third parties with a Civil Liability insurance program for a limit of €10,000,000, which includes investment coverage, omissions, negligence, fraud and various other risks that may lead to financial loss.
                        </v-card-text>
                    </v-card>
                </v-col>

                <v-col cols="12" md="12">
                    <v-card flat>


                        <v-card-text class="text-center">
                            <v-icon size="50" color="#b17c2e">mdi-earth</v-icon><br>
                            <span style="color:#b17c2e" class="title font-weight-bold">Industry leader; leading financial safety</span>
                        </v-card-text>
                        <v-card-text class="title font-weight-thin">

                            Cleverfxinvestor brand has become a global leader in online trading, specializing in forex, derivatives on US and UK stocks, commodities, spot metals, indices and real estate. Client fund security has been a part of our philosophy alongside unmatched investing conditions and customer support. With global recognition for excellence, a solid reputation, and multi-award winning services, our clients are assured that their funds are held securely.
                        </v-card-text>
                    </v-card>
                </v-col>

                <v-col cols="12" md="12">
                    <v-card flat>

                        <v-card-text class="text-center">
                            <v-icon size="50" color="#b17c2e">mdi-bank</v-icon><br>
                            <span style="color:#b17c2e" class="title font-weight-bold"> Accounts with major banks</span>
                        </v-card-text>

                        <v-card-text class="title font-weight-thin">

                            Cleverfxinvestor made the decision to only use major global banks. The strength and international standard of the Cleverfxinvestor brand enable the company to provide liquidity through major banks.
                            We maintain client and operational bank accounts with banking institutions of great repute.
                        </v-card-text>

                    </v-card>
                </v-col>

                <v-col cols="12" md="12">
                    <v-card flat>

                        <v-card-text class="text-center">
                            <v-icon size="50" color="#b17c2e">mdi-lock</v-icon><br>
                            <span style="color:#b17c2e" class="title font-weight-bold"> Segregation of funds</span>
                        </v-card-text>


                        <v-card-text class="title font-weight-thin">

                            Clients’ funds are received into bank accounts separate from those used by the company. These funds are off the balance sheet and cannot be used to pay back creditors in the unlikely event of the default of the Company.
                        </v-card-text>
                    </v-card>
                </v-col>

                <v-col cols="12" md="12">
                    <v-card flat>

                        <v-card-text class="text-center">
                            <v-icon size="50" color="#b17c2e">mdi-umbrella-outline</v-icon><br>
                            <span style="color:#b17c2e" class="title font-weight-bold"> Risk management</span>
                        </v-card-text>
                        <v-card-text class="title font-weight-thin">

                            The Company continually identifies, assesses, and monitors each type of risk associated with its operations. This means assessing on a continuous basis the effectiveness of the policies, arrangements, and procedures in place which allow the company to easily be able to cover its financial needs and capital requirement at any time.
                        </v-card-text>
                    </v-card>
                </v-col>

                <v-col cols="12" md="12">
                    <v-card flat>
                        <v-card-text class="text-center">
                            <v-icon size="50" color="#b17c2e">mdi-shield-star-outline</v-icon><br>
                            <span style="color:#b17c2e" class="title font-weight-bold"> Supervision by the regulator </span>
                        </v-card-text>

                        <v-card-text class="title font-weight-thin">

                            As a regulated investment Service Provider Licensee, we are obliged to meet strict financial requirements. We are thus required by law to maintain sufficient liquid capital to cover clients’ deposits, possible fluctuations in the Company’s currency positions, and any outstanding costs. In addition, an external auditor conducts an annual audit of the Company’s financial statements.
                        </v-card-text>
                    </v-card>
                </v-col>
            </v-row>
        </v-container>
    </div>
@endsection
