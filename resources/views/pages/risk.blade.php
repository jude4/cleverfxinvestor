@extends('layouts.master')

@section('title', 'Abuse Warning')

@section('content')
@livewire('nav-bar')
<v-container>
    <v-card-title>
        <h3 class="text-center mx-auto"  data-aos="fade-up" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
            ABUSE WARNING
        </h3>
    </v-card-title>
    <v-row>
        <v-col cols="12" md="12">
            <v-card flat>
            
            <v-card-title  data-aos="fade-right" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
                Dear valued Investors,
            </v-card-title>

            <v-card-text  data-aos="fade-left" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50" >

                <p class="title">
                    We would like to inform you that it is your responsibility to <b class="font-weight-bold"> always keep your username(s) and password(s) confidential and ensure that third parties do not obtain access to your trading
                    account. We will not be liable for any transactions and/or contracts executed by a third party in your investment account if you have willfully or accidentally provided such a third party
                    with your login credentials.</b> If you know or suspect that someone has used or is using your registration information, username or password to access any service without your authorization,
                    you should notify our Client Support immediately.
                </p>
            </v-card-text>

            <v-card-text  data-aos="fade-right" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
                <p class="title">
                    Moreover, please be aware that it has recently come to our attention that various scam companies contact our clients misleadingly and falsely <b>claiming</b> that either:
                </p>
            </v-card-text>

            <v-card-text  data-aos="fade-left" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
                    <ol class="title">
                        <li><b>they are part of our Group, or</b></li>
                        <li><b>they are our business partners or in any other ways affiliated with us,</b> or</li>
                        <li>clone companies, trying to use our company information, licenses, etc. with another brand name or changing any important contact information in order to obtain any client or
                            personal information;</li>
                        <li><b>they claim to be regulated by Fictitious Regulators,</b> or</li>
                        <li><b>they claim to be regulated but are not,</b>
                        </li>
                    </ol>
            </v-card-text>
            <v-card-text>
                <p class="title"  data-aos="fade-right" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
                    with the purpose of luring our clients into starting a business relationship and/or depositing money and/or trying to obtain valuable sensitive information of clients in order to hack
                       their accounts or otherwise harm them.
                </p>
            </v-card-text>

            <v-card-text  data-aos="fade-left" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
                <p class="title">
                    Please be warned that scammers do not always have to be companies, but can also be individuals presenting themselves as part of our operations.
    
                    We kindly request you to be particularly careful if any company or individual contacts you and claims any of the above. Please be advised that cleverfxinvestor has the exclusive intellectual property rights on the layout and content of the website cleverfxinvestor.com as well as the trademarks, logos, and icons used on the website and it will undertake all appropriate steps to protect its trademark and general intellectual rights.
    
                    In case of any doubt, please feel free to contact us at support@cleverfxinvestor.com or any other means of contact as listed on our website www.cleverfxinvestor.com
                    We will be grateful for any information about misuse or attempt of misuse of our brand names, websites, licenses or services and will take any appropriate steps to protect our clients and our business.
                </p>

                </v-card-title>
            </v-card>
        </v-col>
    </v-row>
</v-container>



@endsection
