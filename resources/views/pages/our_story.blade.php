@extends('layouts.master')

@section('title', 'Our story')

@section('content')
    @livewire('nav-bar')
    <v-sheet>
        <v-img src="/images/200.jpg" class="d-none d-sm-flex">
            <v-parallax height="750">

                <v-container class="mt-n12">
                    <v-row align="center" justify="center" class="d-none d-sm-flex">
                        <v-col cols="12" md="12">
                            <v-card-title class="display-2"  data-aos="fade-right" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50"> Cleverfxinvestor coporation</v-card-title>
                            <v-card-text class="display-1 "  data-aos="fade-left" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
                                Cleverfxinvestor is not a pyramid scheme but more of a mutual funding scheme and our
                                history,ambition and DNA comes from the world of creativity and the empowerment of
                                investors. These values still remains central to Cleverfxinvestor.
                            </v-card-text>
                        </v-col>
                    </v-row>

                    <v-row align="center" justify="center" class="d-flex d-sm-none">
                        <v-col cols="12" md="12">
                            <v-card-title  data-aos="fade-right" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
                                <h2>Cleverfxinvestor coporation</h2>
                            </v-card-title>
                            <v-card-text  data-aos="fade-left" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
                                <h3>
                                    Cleverfxinvestor is not a pyramid scheme but more of a mutual funding scheme and our
                                    history,ambition and DNA comes from the world of creativity and the empowerment of
                                    investors. These values still remains central to Cleverfxinvestor.
                                </h3>
                            </v-card-text>
                        </v-col>
                    </v-row>
                </v-container>
            </v-parallax>
        </v-img>

        <v-img src="/images/200.jpg" class="d-flex d-sm-none" contain>
            <v-card-title class=""  data-aos="fade-right" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
                <h5 style="color: white">Cleverfxinvestor coporation</h5>
            </v-card-title>
            <v-card-text class="" style="color: white"  data-aos="fade-left" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
                Cleverfxinvestor is not a pyramid scheme but more of a mutual funding scheme and our history,ambition and
                DNA comes from the world of creativity and the empowerment of investors. These values still remains central
                to Cleverfxinvestor.
            </v-card-text>
        </v-img>


    </v-sheet>

    <v-container>
        <v-card-title>
            <h3 class="mx-auto text-center d-none d-sm-flex"  data-aos="fade-up" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
                EXECUTIVE MANAGEMENT
            </h3>

            <h4 class="mx-auto text-center d-flex d-sm-none"  data-aos="fade-up" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
                EXECUTIVE MANAGEMENT
            </h4>
        </v-card-title>

        <v-card-text class="title"  data-aos="fade-right" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
            The Executive Management consists of the following members:
            <b style="color: #b17c2e">Chadwick Kadir</b>
            Chief Executive Officer (CEO),

            <b style="color: #b17c2e">Williams Jones</b>
            Chief Technology Officer (CTO),

            <b style="color: #b17c2e">Leo Chad </b>
            Chief Investment Officer (CIO),

            <b style="color: #b17c2e">Valence Jeo Clark </b>
            Chief Financial Officer (CFO),

            <b style="color: #b17c2e">Mason Audrey</b>
            Chief Legal Officer (CLO) and

            <b style="color: #b17c2e">Sarah Lawson</b>
            Chief Sales and Marketing Officer (CSO)/Asian Ambassador .

            Chadwick Jadir and Williams Jones are founding shareholders of the Company
            and were major shareholders as at 31 December 2019.

        </v-card-text>


    </v-container>

    <our-team inline-template>
        <v-container>

            <v-row align="center" justify="center">


                <v-col cols="12" md="3"  data-aos="fade-right" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
                    <v-sheet class="mx-auto" color="grey lighten-4" width="200">

                        <v-avatar size="200">
                            <v-img src="/images/49.jpeg"></v-img>
                        </v-avatar>

                        <p class="title text-center">Chadwick Kadir</p>
                        <p class="subtitle text-center mt-n4">
                            Chief Executive Officer (CEO) of Cleverfxinvestor and
                            Founding partner of Cleverfxinvestor Broker.

                            <v-dialog v-model="dialog1" width="600px">
                                <template v-slot:activator="{ on, attrs }">

                                    <v-btn text small color="#b17c2e" v-bind="attrs" v-on="on">
                                        View profile</v-btn>
                                </template>
                                <v-card>
                                    <v-card-title>
                                        <span class="headline" style="color: #b17c2e">
                                            Chadwick Kadir
                                            Chief Executive Officer (CEO) of Cleverfxinvestor and
                                            Founding partner of Cleverfxinvestor Broker.
                                        </span>
                                    </v-card-title>
                                    <v-card-text>
                                        <v-list>
                                            <v-list-item-title>
                                                <v-list-item-content>
                                                    <span class="font-wright-bold title">Educational Background</span><br>

                                                </v-list-item-content>
                                            </v-list-item-title>
                                            <template>

                                                <v-list-item>
                                                    <v-list-item-content><b>1982-1990</b></v-list-item-content>
                                                    <v-list-item-content>Degree in Electrical Engineering, Swiss Federal
                                                        Institute of Technology (EPFL), Lausanne
                                                        Professional Experience</v-list-item-content>
                                                </v-list-item>

                                                <v-list-item>
                                                    <v-list-item-content><b>1987–1990</b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Telecommunication Specialist, European Space Agency, Nordweijk,
                                                        Netherlands
                                                    </v-list-item-content>
                                                </v-list-item>

                                                <v-list-item>
                                                    <v-list-item-content><b>1990–2002</b></v-list-item-content>
                                                    <v-list-item-content>Co-Managing Director, Marvel Communications Ltd
                                                    </v-list-item-content>
                                                </v-list-item>



                                            </template>
                                        </v-list>
                                    </v-card-text>



                                    <v-card-title>

                                        <v-card-text>
                                            <v-list>
                                                <v-list-item-title>
                                                    <v-list-item-content>
                                                        <span class="font-wright-bold title">Current Board
                                                            Mandates</span><br>

                                                    </v-list-item-content>
                                                </v-list-item-title>
                                                <template>

                                                    <v-list-item>
                                                        <v-list-item-content><b>Since 2012</b></v-list-item-content>
                                                        <v-list-item-content>
                                                            Chairman of the Board, Cleverfxinvestor, Dubai, UAE
                                                        </v-list-item-content>
                                                    </v-list-item>

                                                    <v-list-item>
                                                        <v-list-item-content><b>Since 2014</b></v-list-item-content>
                                                        <v-list-item-content>
                                                            Chairman of the Board, Cleverfxinvestor , London, UK
                                                        </v-list-item-content>
                                                    </v-list-item>

                                                    <v-list-item>
                                                        <v-list-item-content><b>Since 2014</b></v-list-item-content>
                                                        <v-list-item-content> Chairman of the Board, Cleverfxinvestor Asia,
                                                            Hong Kong</v-list-item-content>
                                                    </v-list-item>

                                                    <v-list-item>
                                                        <v-list-item-content><b>Since 2016</b></v-list-item-content>
                                                        <v-list-item-content> Member of the Board, ETH Domain, Bern
                                                        </v-list-item-content>
                                                    </v-list-item>


                                                    <v-list-item>
                                                        <v-list-item-content><b> Since 2019</b></v-list-item-content>
                                                        <v-list-item-content>Chairman of the Board, Cleverfxinvestor Pte.
                                                            Ltd, Singapore </v-list-item-content>
                                                    </v-list-item>

                                                    <v-list-item>
                                                        <v-list-item-content><b> Since 2019</b></v-list-item-content>
                                                        <v-list-item-content>

                                                            Chairman of the Board, Cleverfxinvestor Europe SA, Luxembourg.
                                                        </v-list-item-content>
                                                    </v-list-item>



                                                </template>
                                            </v-list>
                                        </v-card-text>
                                        <v-card-text>








                                        </v-card-text>
                                </v-card>
                            </v-dialog>

                        </p>
                    </v-sheet>
                </v-col>

                <v-col cols="12" md="3"  data-aos="fade-right" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
                    <v-sheet class="mx-auto" color="grey lighten-4" width="200">

                        <v-avatar size="200">
                            <v-img src="/images/43.jpeg"></v-img>
                        </v-avatar>

                        <p class="title text-center">Williams Jones</p>
                        <p class="subtitle text-center  mt-n4">
                            Williams Jones
                            Chief Technology Officer (CTO) of Cleverfxinvestor and
                            Founding partner of Cleverfxinvestor Broker.
                            <v-dialog v-model="dialog2" width="600px">
                                <template v-slot:activator="{ on, attrs }">

                                    <v-btn text small color="#b17c2e" v-bind="attrs" v-on="on">
                                        View profile</v-btn>
                                </template>
                                <v-card>
                                    <v-card-title>
                                        <span class="headline" style="color: #b17c2e">
                                            Williams Jones
                                            Chief Technology Officer (CTO) of Cleverfxinvestor and
                                            Founding partner of Cleverfxinvestor Broker.
                                        </span>
                                    </v-card-title>
                                    <v-card-text>
                                        <v-list>
                                            <v-list-item-title>
                                                <v-list-item-content>
                                                    <span class="font-wright-bold title">Educational Background</span><br>

                                                </v-list-item-content>
                                            </v-list-item-title>
                                            <template>

                                                <v-list-item>
                                                    <v-list-item-content><b>1983–1988</b></v-list-item-content>
                                                    <v-list-item-content>Degree in Micro-Engineering, Swiss Federal
                                                        Institute of Technology (EPFL), Lausanne</v-list-item-content>
                                                </v-list-item>
                                            </template>

                                            <v-list-item-title>
                                                <v-list-item-content>
                                                    Professional Experience
                                                </v-list-item-content>
                                            </v-list-item-title>

                                            <template>
                                                <v-list-item>
                                                    <v-list-item-content><b>1988–1990</b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Software Engineer and New Technology Integration Engineer, Rolm
                                                        Systems, Santa Clara, USA
                                                    </v-list-item-content>
                                                </v-list-item>

                                            </template>

                                            <v-list-item-title>
                                                <v-list-item-content>
                                                    Current Board Mandates
                                                </v-list-item-content>
                                            </v-list-item-title>

                                            <template>
                                                <v-list-item>
                                                    <v-list-item-content><b>Since 2012 </b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Member of the Board, Cleverfxinvestor MEA Ltd, Dubai, UAE
                                                    </v-list-item-content>
                                                </v-list-item>

                                                <v-list-item>
                                                    <v-list-item-content><b>Since 2012 </b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Chairman (2012–March 2015: Vice Chairman),Cleverfxinvestor
                                                    </v-list-item-content>
                                                </v-list-item>



                                            </template>

                                            <v-list-item-title>
                                                <v-list-item-content>
                                                    Financial Services (Malta) Limited, Valletta, Malta
                                                </v-list-item-content>
                                            </v-list-item-title>

                                            <template>
                                                <v-list-item>
                                                    <v-list-item-content><b>Since 2016 </b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Member of the Strategic Advisory Board, EPFL, Lausanne
                                                    </v-list-item-content>
                                                </v-list-item>

                                                <v-list-item>
                                                    <v-list-item-content><b>Since 2019 </b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Member of the Board, NetGuardians, Yverdon-les-Bains.
                                                    </v-list-item-content>
                                                </v-list-item>
                                            </template>
                                        </v-list>
                                    </v-card-text>
                                </v-card>
                            </v-dialog>
                        </p>

                    </v-sheet>
                </v-col>

                <v-col cols="12" md="3"  data-aos="fade-left" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
                    <v-sheet class="mx-auto mt-md-n6" color="grey lighten-4" width="200">

                        <v-avatar size="200">
                            <v-img src="/images/46.jpeg"></v-img>
                        </v-avatar>

                        <p class="title text-center">Leo Chad</p>
                        <p class="subtitle text-center  mt-n4">
                            Chief Investment Officer (CIO) of Cleverfxinvestor.
                            <v-dialog v-model="dialog3" width="600px">
                                <template v-slot:activator="{ on, attrs }">

                                    <v-btn text small color="#b17c2e" v-bind="attrs" v-on="on">
                                        View profile</v-btn>
                                </template>
                                <v-card>
                                    <v-card-title>
                                        <span class="headline" style="color: #b17c2e">
                                            Leo Chad
                                            Chief Investment Officer (CIO),
                                        </span>
                                    </v-card-title>
                                    <v-card-text>
                                        <v-list>
                                            <v-list-item-title>
                                                <v-list-item-content>
                                                    <span class="font-wright-bold title">Educational Background</span><br>

                                                </v-list-item-content>
                                            </v-list-item-title>
                                            <template>

                                                <v-list-item>
                                                    <v-list-item-content><b>1980–1983</b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Hautes Etudes Commerciales (HEC), University of Pheonix Arizona
                                                        Professional Experience
                                                    </v-list-item-content>
                                                </v-list-item>

                                            </template>

                                            <v-list-item-title>
                                                <v-list-item-content>
                                                    Professional Experience
                                                </v-list-item-content>
                                            </v-list-item-title>

                                            <template>
                                                <v-list-item>
                                                    <v-list-item-content><b>1983–1985 </b>
                                                    </v-list-item-content>
                                                    <v-list-item-content>
                                                        Chair of Financial and Cost Accounting, Graduate Teaching Assistant,
                                                        University of Lausanne
                                                    </v-list-item-content>
                                                </v-list-item>


                                                <v-list-item>
                                                    <v-list-item-content><b>1986–1998 </b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Senior Manager (since 1995), Deloitte
                                                    </v-list-item-content>
                                                </v-list-item>


                                                <v-list-item>
                                                    <v-list-item-content><b>1986–1994 </b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Audit, Geneva
                                                    </v-list-item-content>
                                                </v-list-item>

                                                <v-list-item>
                                                    <v-list-item-content><b>1994–1996 </b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Corporate Finance, London
                                                    </v-list-item-content>
                                                </v-list-item>


                                                <v-list-item>
                                                    <v-list-item-content><b>1996–1998 </b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Management Advisory Services, Lausanne
                                                    </v-list-item-content>
                                                </v-list-item>

                                                <v-list-item>
                                                    <v-list-item-content><b>Since 2019 </b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Chief Investment Officer of Cleverfxinvestor.
                                                    </v-list-item-content>
                                                </v-list-item>

                                            </template>

                                            <v-list-item-title>
                                                <v-list-item-content>
                                                    Current Board Mandates
                                                </v-list-item-content>
                                            </v-list-item-title>

                                            <template>
                                                <v-list-item>
                                                    <v-list-item-content><b>Since 2010 </b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Chairman, Foundation Cleverfxinvestor 3rd Pillar
                                                    </v-list-item-content>
                                                </v-list-item>

                                                <v-list-item>
                                                    <v-list-item-content><b>Since 2012 </b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Member of the Selection Committee, FIT – Fondation pour l'Innovation
                                                        Technologique.
                                                    </v-list-item-content>
                                                </v-list-item>
                                            </template>
                                        </v-list>
                                    </v-card-text>
                                </v-card>
                            </v-dialog>
                        </p>

                    </v-sheet>
                </v-col>

                <v-col cols="12" md="3"  data-aos="fade-left" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
                    <v-sheet class="mx-auto" color="grey lighten-4" width="200">

                        <v-avatar size="200">
                            <v-img src="/images/44.jpeg"></v-img>
                        </v-avatar>

                        <p class="title text-center">Valence Jeo Clark</p>
                        <p class="subtitle text-center mt-n4">
                            Chief Financial Officer (CFO) of Cleverfxinvestor.
                            <v-dialog v-model="dialog4" width="600px">
                                <template v-slot:activator="{ on, attrs }">

                                    <v-btn text small color="#b17c2e" v-bind="attrs" v-on="on">
                                        View profile</v-btn>
                                </template>
                                <v-card>
                                    <v-card-title>
                                        <span class="headline" style="color: #b17c2e">
                                            Valence Jeo Clark
                                            Chief Financial Officer (CFO),
                                        </span>
                                    </v-card-title>
                                    <v-card-text>
                                        <v-list>
                                            <v-list-item-title>
                                                <v-list-item-content>
                                                    <span class="font-wright-bold title">Educational Background</span><br>

                                                </v-list-item-content>
                                            </v-list-item-title>
                                            <template>

                                                <v-list-item>
                                                    <v-list-item-content><b>1999–2003</b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Bachelor and Master Degree, Hautes Etudes Commerciales (HEC),
                                                        University of Lausanne and St. Gallen (exchange)
                                                    </v-list-item-content>
                                                </v-list-item>

                                                <v-list-item>
                                                    <v-list-item-content><b>Since 2007</b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Swiss Certified Public Accountant
                                                    </v-list-item-content>
                                                </v-list-item>

                                                <v-list-item>
                                                    <v-list-item-content><b>Since 2016</b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Swiss Certified Tax Expert
                                                    </v-list-item-content>
                                                </v-list-item>
                                            </template>

                                            <v-list-item-title>
                                                <v-list-item-content>
                                                    Professional Experience
                                                </v-list-item-content>
                                            </v-list-item-title>

                                            <template>
                                                <v-list-item>
                                                    <v-list-item-content><b>2003–2010</b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Manager in Audit/Financial Services
                                                    </v-list-item-content>
                                                </v-list-item>



                                                <v-list-item>
                                                    <v-list-item-content><b>since 2008</b></v-list-item-content>
                                                    <v-list-item-content>
                                                        PricewaterhouseCoopers, Lausanne
                                                    </v-list-item-content>
                                                </v-list-item>

                                                <v-list-item>
                                                    <v-list-item-content><b>2011–2013</b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Head Accounting & Reporting, Cleverfxinvestor.
                                                    </v-list-item-content>
                                                </v-list-item>

                                                <v-list-item>
                                                    <v-list-item-content><b>2014–2018</b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Head Finance, Reporting & Tax of Cleverfxinvestor.
                                                    </v-list-item-content>
                                                </v-list-item>

                                                <v-list-item>
                                                    <v-list-item-content><b>Since 2019</b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Chief Financial Officer of Cleverfxinvestor.
                                                    </v-list-item-content>
                                                </v-list-item>



                                            </template>

                                            <v-list-item-title>
                                                <v-list-item-content>
                                                    Current Board Mandates
                                                </v-list-item-content>
                                            </v-list-item-title>

                                            <template>
                                                <v-list-item>
                                                    <v-list-item-content><b>Since 2019 </b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Member of the Board, Europe SA, LuxCnsurances Committee
                                                        AVS/AI/APG/AF, Chambre vaudoise du commerce et de l'industrie.
                                                    </v-list-item-content>
                                                </v-list-item>

                                                <v-list-item>
                                                    <v-list-item-content><b>Since 2012 </b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Chairman (2012–March 2015: Vice Chairman),Cleverfxinvestor
                                                    </v-list-item-content>
                                                </v-list-item>



                                            </template>
                                        </v-list>
                                    </v-card-text>
                                </v-card>
                            </v-dialog>
                        </p>

                    </v-sheet>
                </v-col>


                <v-col cols="12" md="3"  data-aos="fade-right" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
                    <v-sheet class="mx-auto" color="grey lighten-4" width="200">

                        <v-avatar size="200">
                            <v-img src="/images/42.jpeg"></v-img>
                        </v-avatar>

                        <p class="title text-center">Mason Audrey</p>
                        <p class="subtitle text-center  mt-n4">
                            Chief Legal Officer (CLO) of Cleverfxinvestor
                            <v-dialog v-model="dialog5" width="600px">
                                <template v-slot:activator="{ on, attrs }">

                                    <v-btn text small color="#b17c2e" v-bind="attrs" v-on="on">
                                        View profile</v-btn>
                                </template>
                                <v-card>
                                    <v-card-title>
                                        <span class="headline" style="color: #b17c2e">
                                            Mason Audrey
                                            Chief Legal Officer (CLO),
                                        </span>
                                    </v-card-title>
                                    <v-card-text>
                                        <v-list>
                                            <v-list-item-title>
                                                <v-list-item-content>
                                                    <span class="font-wright-bold title">Educational Background</span><br>

                                                </v-list-item-content>
                                            </v-list-item-title>
                                            <template>

                                                <v-list-item>
                                                    <v-list-item-content><b>1997–2002</b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Master of Laws, Law School, University of Neuchâtel
                                                    </v-list-item-content>
                                                </v-list-item>

                                                <v-list-item>
                                                    <v-list-item-content><b>2002–2004</b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Master of Advanced Studies (LL.M.) in Business Law, Law School,
                                                        Universities of Lausanne and Geneva
                                                    </v-list-item-content>
                                                </v-list-item>

                                                <v-list-item>
                                                    <v-list-item-content><b>2011</b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Certificate DIFC Rules & Regulations, Chartered Institute for
                                                        Securities & Investment
                                                    </v-list-item-content>
                                                </v-list-item>
                                            </template>

                                            <v-list-item-title>
                                                <v-list-item-content>
                                                    Professional Experience
                                                </v-list-item-content>
                                            </v-list-item-title>

                                            <template>
                                                <v-list-item>
                                                    <v-list-item-content><b>2010–2011</b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Legal Officer of cleverfxinvestor.
                                                    </v-list-item-content>
                                                </v-list-item>



                                                <v-list-item>
                                                    <v-list-item-content><b>2012–2013</b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Head Legal & Compliance of Cleverfxinvestor.
                                                    </v-list-item-content>
                                                </v-list-item>

                                                <v-list-item>
                                                    <v-list-item-content><b>Since 2017 </b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Chief Legal Officer Cleverfxinvestor.
                                                    </v-list-item-content>
                                                </v-list-item>

                                            </template>

                                            <v-list-item-title>
                                                <v-list-item-content>
                                                    Current Board Mandates
                                                </v-list-item-content>
                                            </v-list-item-title>

                                            <template>
                                                <v-list-item>
                                                    <v-list-item-content><b>Since 2010 </b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Secretary, Foundation Cleverfxinvestor 3rd Pillar
                                                    </v-list-item-content>
                                                </v-list-item>
                                            </template>

                                            <v-list-item-title>
                                                <v-list-item-content>
                                                    Other Mandate
                                                </v-list-item-content>
                                                <template>

                                            </v-list-item-title>
                                            <v-list-item>
                                                <v-list-item-content><b>Since 2018 </b></v-list-item-content>
                                                <v-list-item-content>
                                                    Member of the Executive Committee of Cleverfxinvestor Capital Markets
                                                    and Technology Association
                                                </v-list-item-content>
                                                </v-list-item-title>

                                                </template>
                                        </v-list>
                                    </v-card-text>
                                </v-card>
                            </v-dialog>
                        </p>

                    </v-sheet>
                </v-col>

                <v-col cols="12" md="3"  data-aos="fade-left" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
                    <v-sheet class="mx-auto" color="grey lighten-4" width="200">

                        <v-avatar size="200">
                            <v-img src="/images/50.jpeg"></v-img>
                        </v-avatar>

                        <p class="title text-center">Sarah Lawson</p>
                        <p class="subtitle text-center  mt-n4">
                            Chief Sales and Marketing Officer (CSO)/Asian Ambassador of Cleverfxinvestor.
                            <v-dialog v-model="dialog6" width="600px">
                                <template v-slot:activator="{ on, attrs }">

                                    <v-btn text small color="#b17c2e" v-bind="attrs" v-on="on">
                                        View profile</v-btn>
                                </template>
                                <v-card>
                                    <v-card-title>
                                        <span class="headline" style="color: #b17c2e">
                                            Sarah Lawson
                                            Chief Sales and Marketing Officer (CSO)/Asian Ambassador
                                        </span>
                                    </v-card-title>
                                    <v-card-text>
                                        <v-list>
                                            <v-list-item-title>
                                                <v-list-item-content>
                                                    <span class="font-wright-bold title">Educational Background</span><br>

                                                </v-list-item-content>
                                            </v-list-item-title>
                                            <template>

                                                <v-list-item>
                                                    <v-list-item-content><b>1989-1992</b></v-list-item-content>
                                                    <v-list-item-content>
                                                        BSc in Business Management, University of Indonesia
                                                    </v-list-item-content>
                                                </v-list-item>

                                                <v-list-item>
                                                    <v-list-item-content><b>2011–2013</b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Executive MBA in International Management, University of Geneva
                                                    </v-list-item-content>
                                                </v-list-item>
                                            </template>

                                            <v-list-item-title>
                                                <v-list-item-content>
                                                    Professional Experience
                                                </v-list-item-content>
                                            </v-list-item-title>

                                            <template>
                                                <v-list-item>
                                                    <v-list-item-content><b>2000–2002</b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Junior Brand Manager, Feldschlösschen Getränke (Carlsberg Group),
                                                        Rheinfelden
                                                    </v-list-item-content>
                                                </v-list-item>



                                                <v-list-item>
                                                    <v-list-item-content><b>2002–2003</b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Brand Manager, Feldschlösschen Getränke (Carlsberg Group),
                                                        Rheinfelden
                                                    </v-list-item-content>
                                                </v-list-item>

                                                <v-list-item>
                                                    <v-list-item-content><b>2003–2004 </b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Brand Manager, Bacardi-Martini, Geneva
                                                    </v-list-item-content>
                                                </v-list-item>


                                                <v-list-item>
                                                    <v-list-item-content><b>2004–2008</b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Account Director, Saatchi & Saatchi, Geneva
                                                    </v-list-item-content>
                                                </v-list-item>


                                                <v-list-item>
                                                    <v-list-item-content><b>2008–2015 </b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Marketing Manager, McDonald's Switzerland, Lausanne
                                                    </v-list-item-content>
                                                </v-list-item>


                                                <v-list-item>
                                                    <v-list-item-content><b>2015–2019 </b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Head Marketing of Cleverfxinvestor
                                                    </v-list-item-content>
                                                </v-list-item>


                                                <v-list-item>
                                                    <v-list-item-content><b>Since 2019 </b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Chief Sales & Marketing Officer of Cleverfxinvestor.
                                                    </v-list-item-content>
                                                </v-list-item>

                                            </template>

                                            <v-list-item-title>
                                                <v-list-item-content>
                                                    Current Board Mandates
                                                </v-list-item-content>
                                            </v-list-item-title>

                                            <template>
                                                <v-list-item>
                                                    <v-list-item-content><b>Since 2018 </b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Member of the Board, SWA/ASA – National Advertiser Association of
                                                        Cleverfxinvestor.

                                                    </v-list-item-content>
                                                </v-list-item>
                                            </template>
                                        </v-list>
                                    </v-card-text>
                                </v-card>
                            </v-dialog>
                        </p>

                    </v-sheet>
                </v-col>


            </v-row>
        </v-container>

    </our-team>

    <v-container>
        <v-card-title  data-aos="fade-up" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
            <h3 class="mx-auto text-center d-none d-sm-flex" >
                BOARD OF DIRECTORS
            </h3>

            <h4 class="mx-auto text-center d-flex d-sm-none">
                BOARD OF DIRECTORS
            </h4>
        </v-card-title>
        <v-card-text class="title"  data-aos="fade-left" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
            Board of Directors
            The Board of Directors consist of the following members:
            <b style="color: #b17c2e">Joe Lyod Taras</b>
            Chairman of the Board of Cleverfxinvestor since May 2019

            <b style="color: #b17c2e">Julian Hazel</b>
            Member of the Board of Cleverfxinvestor since May 2018

            <b style="color: #b17c2e">Zeo Grayson</b>
            Member of the Board of Cleverfxinvestor since May 2015

        </v-card-text>
    </v-container>

    <our-team inline-template>
        <v-container>

            <v-row align="center" justify="center">


                <v-col cols="12" md="4"  data-aos="fade-right" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
                    <v-sheet class="mx-auto" color="grey lighten-4" width="200">

                        <v-avatar size="200">
                            <v-img src="/images/45.jpeg"></v-img>
                        </v-avatar>

                        <p class="title text-center">Joe Lyod Taras </p>
                        <p class="subtitle text-center mt-n4">
                            Chairman of the Board of Cleverfxinvestor since May 2019
                            <br>

                            <v-dialog v-model="dialog7" width="600px">
                                <template v-slot:activator="{ on, attrs }">

                                    <v-btn text small color="#b17c2e" v-bind="attrs" v-on="on">
                                        View profile</v-btn>
                                </template>
                                <v-card>
                                    <v-card-title>
                                        <span class="headline" style="color: #b17c2e">
                                            Joe Lyod Taras
                                            Chairman of the Board of Cleverfxinvestor since May 2019
                                        </span>
                                    </v-card-title>
                                    <v-card-text>
                                        <v-list>
                                            <v-list-item-title>
                                                <v-list-item-content>
                                                    <span class="font-wright-bold title">Educational Background</span><br>

                                                </v-list-item-content>
                                            </v-list-item-title>
                                            <template>

                                                <v-list-item>
                                                    <v-list-item-content><b>1982</b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Licentiate in Law, University of Zurich
                                                    </v-list-item-content>
                                                </v-list-item>

                                                <v-list-item>
                                                    <v-list-item-content><b>1984</b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Doctorate in Law, University of Zurich
                                                    </v-list-item-content>
                                                </v-list-item>

                                                <v-list-item>
                                                    <v-list-item-content><b>1986</b></v-list-item-content>
                                                    <v-list-item-content>

                                                        Attorney at Law, admitted to the Bar
                                                    </v-list-item-content>
                                                </v-list-item>

                                                <v-list-item>
                                                    <v-list-item-content><b>1989</b></v-list-item-content>
                                                    <v-list-item-content>

                                                        International Bankers School, New York
                                                    </v-list-item-content>
                                                </v-list-item>

                                                <v-list-item>
                                                    <v-list-item-content><b>1997</b></v-list-item-content>
                                                    <v-list-item-content>

                                                        International Bankers School, New York
                                                    </v-list-item-content>
                                                </v-list-item>



                                            </template>
                                        </v-list>
                                    </v-card-text>



                                    <v-card-title>

                                        <v-card-text>
                                            <v-list>
                                                <v-list-item-title>
                                                    <v-list-item-content>
                                                        <span class="font-wright-bold title">Professional
                                                            Experience</span><br>

                                                    </v-list-item-content>
                                                </v-list-item-title>
                                                <template>

                                                    <v-list-item>
                                                        <v-list-item-content><b>1986–1994</b></v-list-item-content>
                                                        <v-list-item-content>
                                                            Various assignments, Credit Suisse
                                                        </v-list-item-content>
                                                    </v-list-item>

                                                    <v-list-item>
                                                        <v-list-item-content><b>1994–1996</b></v-list-item-content>
                                                        <v-list-item-content>
                                                            Delegate to the Board of Directors, CS Columna
                                                        </v-list-item-content>
                                                    </v-list-item>

                                                    <v-list-item>
                                                        <v-list-item-content><b>1997–1998</b></v-list-item-content>
                                                        <v-list-item-content>
                                                            CEO, Winterthur Columna
                                                        </v-list-item-content>
                                                    </v-list-item>

                                                    <v-list-item>
                                                        <v-list-item-content><b>1998–2000</b></v-list-item-content>
                                                        <v-list-item-content> Member of the Corporate Executive Board and
                                                            Head of Individual and Group Life Division, Winterthur Insurance
                                                        </v-list-item-content>
                                                    </v-list-item>


                                                    <v-list-item>
                                                        <v-list-item-content><b> 2000–2003</b></v-list-item-content>
                                                        <v-list-item-content>Member of the Executive Board of CSFS and
                                                            responsible for the operational global life & pensions business,
                                                            Credit Suisse </v-list-item-content>
                                                    </v-list-item>

                                                    <v-list-item>
                                                        <v-list-item-content><b> Since 2019</b></v-list-item-content>
                                                        <v-list-item-content>

                                                            Chairman of the Board, Cleverfxinvestor Europe SA, Luxembourg.
                                                        </v-list-item-content>
                                                    </v-list-item>



                                                </template>
                                            </v-list>
                                        </v-card-text>
                                        <v-card-text>

                                            <v-list>
                                                <v-list-item-title>
                                                    <v-list-item-content>
                                                        <span class="font-wright-bold title">Previous Board
                                                            Mandates</span><br>

                                                    </v-list-item-content>
                                                </v-list-item-title>
                                                <template>

                                                    <v-list-item>
                                                        <v-list-item-content><b>2005–2006</b></v-list-item-content>
                                                        <v-list-item-content>
                                                            Chairman, Batigroup
                                                        </v-list-item-content>
                                                    </v-list-item>

                                                    <v-list-item>
                                                        <v-list-item-content><b>2005–2007</b></v-list-item-content>
                                                        <v-list-item-content>
                                                            Chairman, Converium
                                                        </v-list-item-content>
                                                    </v-list-item>

                                                    <v-list-item>
                                                        <v-list-item-content><b>2006–2013</b></v-list-item-content>
                                                        <v-list-item-content>
                                                            Member of the Board, Petroplus
                                                        </v-list-item-content>
                                                    </v-list-item>

                                                    <v-list-item>
                                                        <v-list-item-content><b>2006–2015</b></v-list-item-content>
                                                        <v-list-item-content> Chairman (since 2011), Implenia
                                                        </v-list-item-content>
                                                    </v-list-item>


                                                    <v-list-item>
                                                        <v-list-item-content><b> 2007–2010</b></v-list-item-content>
                                                        <v-list-item-content> Member of the Board, Jelmoli
                                                        </v-list-item-content>
                                                    </v-list-item>

                                                </template>
                                            </v-list>
                                        </v-card-text>

                                        <v-card-text>
                                            <v-list>
                                                <v-list-item-title>
                                                    <v-list-item-content>
                                                        <span class="font-wright-bold title">Current Board
                                                            Mandates</span><br>

                                                    </v-list-item-content>
                                                </v-list-item-title>
                                                <template>

                                                    <v-list-item>
                                                        <v-list-item-content><b>Since 2003</b></v-list-item-content>
                                                        <v-list-item-content>
                                                            Honorary Councillor
                                                        </v-list-item-content>
                                                    </v-list-item>

                                                    <v-list-item>
                                                        <v-list-item-content><b>Since 2006</b></v-list-item-content>
                                                        <v-list-item-content>
                                                            British Swiss Chamber of Commerce
                                                        </v-list-item-content>
                                                    </v-list-item>
                                                </template>

                                            </v-list>

                                        </v-card-text>

                                        <v-card-text>
                                            Joe Lyod Taras has not held official functions or political posts in 2019. With
                                            the exception of the above-mentioned activities,
                                            he has no significant business connections with the Company Cleverfxinvestor or
                                            one of the Company's subsidiaries.
                                        </v-card-text>
                                </v-card>
                            </v-dialog>

                        </p>
                    </v-sheet>
                </v-col>

                <v-col cols="12" md="4"  data-aos="fade-down" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
                    <v-sheet class="mx-auto" color="grey lighten-4" width="200">

                        <v-avatar size="200">
                            <v-img src="/images/48.jpeg"></v-img>
                        </v-avatar>

                        <p class="title text-center">Julian Hazel</p>
                        <p class="subtitle text-center  mt-n4">
                            Member of the Board of Cleverfxinvestor since May 2018
                            <br>
                            <v-dialog v-model="dialog8" width="600px">
                                <template v-slot:activator="{ on, attrs }">

                                    <v-btn text small color="#b17c2e" v-bind="attrs" v-on="on">
                                        View profile</v-btn>
                                </template>
                                <v-card>
                                    <v-card-title>
                                        <span class="headline" style="color: #b17c2e">
                                            Julian Hazel
                                            Member of the Board of Cleverfxinvestor since May 2018
                                        </span>
                                    </v-card-title>
                                    <v-card-text>
                                        <v-list>
                                            <v-list-item-title>
                                                <v-list-item-content>
                                                    <span class="font-wright-bold title">Educational Background</span><br>

                                                </v-list-item-content>
                                            </v-list-item-title>
                                            <template>

                                                <v-list-item>
                                                    <v-list-item-content><b>1996</b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Degree (M. Sc. equivalent) in Telecommunications Engineering,
                                                        University of Pisa
                                                    </v-list-item-content>
                                                </v-list-item>

                                                <v-list-item>
                                                    <v-list-item-content><b>2000</b></v-list-item-content>
                                                    <v-list-item-content>
                                                        PhD in Telecommunication Engineering, King’s College London
                                                    </v-list-item-content>
                                                </v-list-item>

                                                <v-list-item>
                                                    <v-list-item-content><b>2002</b></v-list-item-content>
                                                    <v-list-item-content>
                                                        McKinsey Mini-MBA in Finance, Strategy and Marketing (Faculty from
                                                        INSEAD/Kellogg/Harvard)
                                                    </v-list-item-content>
                                                </v-list-item>
                                            </template>

                                            <v-list-item-title>
                                                <v-list-item-content>
                                                    Professional Experience
                                                </v-list-item-content>
                                            </v-list-item-title>

                                            <template>
                                                <v-list-item>
                                                    <v-list-item-content><b>1997–2001</b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Research and later Senior Research Associate, King’s College London
                                                    </v-list-item-content>
                                                </v-list-item>

                                                <v-list-item>
                                                    <v-list-item-content><b>2002–2003</b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Consultant, McKinsey and Company
                                                    </v-list-item-content>
                                                </v-list-item>

                                                <v-list-item>
                                                    <v-list-item-content><b>2006–2007</b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Head of Product Management Voice, Member of the Executive Board of
                                                        "Small and Medium Enterprises", Swisscom Fixnet LtdA
                                                    </v-list-item-content>
                                                </v-list-item>

                                                <v-list-item>
                                                    <v-list-item-content><b>2008–2010</b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Head Customer Experience Design (Product Management), Member of the
                                                        Executive Board of
                                                        "Small and Medium Enterprises", Swisscom Fixnet Ltd
                                                    </v-list-item-content>
                                                </v-list-item>

                                                <v-list-item>
                                                    <v-list-item-content><b>2013–2015</b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Head of Market and Member of the Executive Board, BKW Ltd
                                                    </v-list-item-content>
                                                </v-list-item>

                                                <v-list-item>
                                                    <v-list-item-content><b>2016–2019</b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Head of Products (until December 2018 Head of Business Media) and
                                                        Member of the Group Executive Board,
                                                        NZZ-Mediengruppe Ltd
                                                    </v-list-item-content>
                                                </v-list-item>

                                            </template>

                                            <v-list-item-title>
                                                <v-list-item-content>
                                                    Previous Board Mandates
                                                </v-list-item-content>
                                            </v-list-item-title>

                                            <template>
                                                <v-list-item>
                                                    <v-list-item-content><b>2013–2015 </b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Member of the Board, BKW Italia Ltd
                                                    </v-list-item-content>
                                                </v-list-item>

                                                <v-list-item>
                                                    <v-list-item-content><b>2013–2015 </b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Member of the Board, Youtility Ltd
                                                    </v-list-item-content>
                                                </v-list-item>

                                                <v-list-item>
                                                    <v-list-item-content><b>2013–2015 </b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Chairwoman of the Board, cc energie
                                                    </v-list-item-content>
                                                </v-list-item>

                                                <v-list-item>
                                                    <v-list-item-content><b>2014–2015 </b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Member of the Board, Gasverbund Mittelland (GVM)
                                                    </v-list-item-content>
                                                </v-list-item>



                                            </template>

                                            <v-list-item-title>
                                                <v-list-item-content>
                                                    Current Board Mandates
                                                </v-list-item-content>
                                            </v-list-item-title>

                                            <template>
                                                <v-list-item>
                                                    <v-list-item-content><b>Since 2018 </b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Member of the Board, Cleverfxinvestor
                                                    </v-list-item-content>
                                                </v-list-item>


                                            </template>
                                        </v-list>
                                    </v-card-text>

                                    <v-card-text>
                                        Julian Hazel has not held official functions or political posts in 2019. With the
                                        exception of the above-mentioned
                                        activities, she has no significant business connections with the Company or one of
                                        the Company’s subsidiaries.

                                    </v-card-text>
                                </v-card>
                            </v-dialog>
                        </p>

                    </v-sheet>
                </v-col>

                <v-col cols="12" md="4"  data-aos="fade-left" data-aos-offset="200" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-once="false" data-aos-delay="50">
                    <v-sheet class="mx-auto" color="grey lighten-4" width="200">

                        <v-avatar size="200">
                            <v-img src="/images/47.jpeg"></v-img>
                        </v-avatar>

                        <p class="title text-center">Zeo Grayson</p>
                        <p class="subtitle text-center  mt-n4">

                            Member of the Board of Cleverfxinvestor since May 2015
                            <br>
                            <v-dialog v-model="dialog9" width="600px">
                                <template v-slot:activator="{ on, attrs }">

                                    <v-btn text small color="#b17c2e" v-bind="attrs" v-on="on">
                                        View profile</v-btn>
                                </template>
                                <v-card>
                                    <v-card-title>
                                        <span class="headline" style="color: #b17c2e">
                                            Zeo Grayson
                                            Member of the Board of Cleverfxinvestor since May 2015
                                        </span>
                                    </v-card-title>
                                    <v-card-text>
                                        <v-list>
                                            <v-list-item-title>
                                                <v-list-item-content>
                                                    <span class="font-wright-bold title">Educational Background</span><br>

                                                </v-list-item-content>
                                            </v-list-item-title>
                                            <template>

                                                <v-list-item>
                                                    <v-list-item-content><b>1979–1984</b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Master of the Laws, University Zurich
                                                    </v-list-item-content>
                                                </v-list-item>

                                            </template>

                                            <v-list-item-title>
                                                <v-list-item-content>
                                                    Professional Experience
                                                </v-list-item-content>
                                            </v-list-item-title>

                                            <template>
                                                <v-list-item>
                                                    <v-list-item-content><b>1985–1988 </b>
                                                    </v-list-item-content>
                                                    <v-list-item-content>
                                                        Assistant Treasurer, J.P. Morgan Bank, Zurich/New York
                                                    </v-list-item-content>
                                                </v-list-item>


                                                <v-list-item>
                                                    <v-list-item-content><b>1988–1990 </b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Consultant, The Boston Consulting Group, Munich
                                                    </v-list-item-content>
                                                </v-list-item>


                                                <v-list-item>
                                                    <v-list-item-content><b>1990–1992 </b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Project Leader, The Boston Consulting Group, Zurich
                                                    </v-list-item-content>
                                                </v-list-item>

                                                <v-list-item>
                                                    <v-list-item-content><b>1992–1995 </b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Manager, The Boston Consulting Group, New York
                                                    </v-list-item-content>
                                                </v-list-item>


                                                <v-list-item>
                                                    <v-list-item-content><b>1995–2004 </b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Partner and Director, The Boston Consulting Group, Zurich
                                                    </v-list-item-content>
                                                </v-list-item>

                                                <v-list-item>
                                                    <v-list-item-content><b>Since 2004 </b></v-list-item-content>
                                                    <v-list-item-content>
                                                        CEO, Swiss-American Chamber of Commerce, Zurich
                                                    </v-list-item-content>
                                                </v-list-item>

                                            </template>

                                            <v-list-item-title>
                                                <v-list-item-content>
                                                    Current Board Mandates
                                                </v-list-item-content>
                                            </v-list-item-title>

                                            <template>
                                                <v-list-item>
                                                    <v-list-item-content><b>Since 2002 </b></v-list-item-content>
                                                    <v-list-item-content>
                                                        Chairman (since 2004), Zoo Zurich Inc.
                                                    </v-list-item-content>
                                                </v-list-item>


                                            </template>
                                        </v-list>
                                    </v-card-text>

                                    <v-card-text>
                                        Zeo Grayson has not held official functions or political posts in 2019. With the
                                        exception of the above-mentioned activities,
                                        he has no significant business connections with the Company or one of the Company's
                                        subsidiaries.

                                    </v-card-text>
                                </v-card>
                            </v-dialog>
                        </p>

                    </v-sheet>
                </v-col>




            </v-row>
        </v-container>

    </our-team>


@endsection
