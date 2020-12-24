<div>
       <v-system-bar app height="60" color="blue-grey darken-4" dark>
       <div class="ml-sm-12 d-none d-sm-flex">
           <span class="caption d-flex ">
               Call us on: {{ $ukNumber }} <v-img src="/images/uk.png" class="ml-2 mr-2 mt-1" style="width: 20px; height: 15px"></v-img>
               | {{ $arabicNumber }} <v-img src="/images/flag.png" class="ml-2 mr-2 mt-1" style="width: 20px; height: 15px"></v-img>

           </span>
       </div>

        <div class="d-flex d-sm-none">
           <div class="caption " style="font-size: 5px">
               <div class="d-flex">
               +44 745127583 <v-img src="/images/uk.png" class="ml-1 mt-1" contain style="width: 15px; height: 10px"></v-img>
               </div>
               <div class="d-flex">
               
               +1 (480) 630-6647 <v-img src="/images/flag.png" class=" mt-1  ml-1" style="width: 15px; height: 10px"></v-img>
               </div>

           </div>
       </div>
       <v-spacer></v-spacer>
       <div class="mr-sm-12 d-none d-sm-flex">
           @guest
           <v-btn link href="/login" small color="red" class="text-capitalize mr-2" dark>Login</v-btn>
           <v-btn link href="/register" small color="teal" class="text-capitalize" dark>Register</v-btn>

           @else

           <v-btn link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" small color="red" class="text-capitalize" dark>

               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                   @csrf</form>
               Logout
           </v-btn>

           @endguest
       </div>

         <div class="d-flex d-sm-none">

           @guest
           <v-btn link href="/login" x-small color="red" class="text-none mr-2" dark>Login</v-btn>
           <v-btn link href="/register" x-small color="teal" class="text-none" dark>Register</v-btn>
           @else

           <v-btn icon link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" x-small  class="text-capitalize mr-4" dark>

               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                   @csrf</form>
               <v-icon>mdi-logout</v-icon>Logout
           </v-btn>

           @endguest
       </div>
 
   </v-system-bar>

   <div class="d-none d-sm-flex">
       <v-app-bar app height="100" color="white" flat>

           <v-toolbar-title class="ml-12">
               <div class="d-flex mt-4">
                   <v-img src="/images/73.jpeg" width="70" class="mr-4"></v-img>
                   <v-divider vertical inset style="background: #b17c2e;"></v-divider>
                   <v-img src="/images/logo-2.jpeg" width="95"></v-img>
               </div>
               <p>

                   <i class="caption">
                       Where Clever investors profits
                   </i>
               </p>

           </v-toolbar-title>
           {{-- </v-col> --}}
           <v-spacer></v-spacer>


           <div class="mx-2">
               <v-btn link href="/" small text color="{{ Request::is('/') ? '#b17c2e' : '' }}">Home</v-btn>

               <v-btn link href="/account-type" color="{{ Request::is('account-type') ? '#b17c2e' : '' }}" small text>Account type</v-btn>


               <v-menu v-model="menu" :close-on-content-click="false" :nudge-width="200" offset-y>
                   <template v-slot:activator="{ on, attrs }">
                       <v-btn link href="" small v-on="on" color="{{ Request::is('about-us') || Request::is('history')
                        || Request::is('abuse-warning') || Request::is('management') || Request::is('why-CFI')
                 ? '#b17c2e' : ''}}" text>About CFI
                           <v-spacer></v-spacer>
                           <v-icon>mdi-chevron-down</v-icon>
                       </v-btn>

                   </template>

                   <v-card width="">

                       <v-list color="#b17c2e" dark>
                           <v-list-group-item>
                               <v-list-item link href="/about-us">
                                   <v-list-item-icon>
                                       <v-icon>mdi-cog</v-icon>
                                   </v-list-item-icon>
                                   <v-list-item-content>
                                       About us
                                   </v-list-item-content>
                               </v-list-item>



                               <v-list-item link href="/history">
                                   <v-list-item-icon>
                                       <v-icon>mdi-death-star</v-icon>
                                   </v-list-item-icon>
                                   <v-list-item-content>
                                       Our History
                                   </v-list-item-content>
                               </v-list-item>

                               <v-list-item link href="/why-CFI">
                                   <v-list-item-icon>
                                       <v-icon>mdi-frequently-asked-questions</v-icon>
                                   </v-list-item-icon>
                                   <v-list-item-content>
                                       Why CFI
                                   </v-list-item-content>
                               </v-list-item>

                               <v-list-item link href="/management">
                                   <v-list-item-icon>
                                       <v-icon>mdi-dns</v-icon>
                                   </v-list-item-icon>
                                   <v-list-item-content>
                                       Management
                                   </v-list-item-content>
                               </v-list-item>

                               <v-list-item link href="/abuse-warning">
                                   <v-list-item-icon>
                                       <v-icon>mdi-alert-circle</v-icon>
                                   </v-list-item-icon>
                                   <v-list-item-content>
                                       Abuse warning
                                   </v-list-item-content>
                               </v-list-item>

                               <v-list-item link href="/awards">
                                   <v-list-item-icon>
                                       <v-icon>mdi-license</v-icon>
                                   </v-list-item-icon>
                                   <v-list-item-content>
                                       Awards
                                   </v-list-item-content>
                               </v-list-item>

                               <v-list-item link href="/contact-us">
                                   <v-list-item-icon>
                                       <v-icon>mdi-account</v-icon>
                                   </v-list-item-icon>
                                   <v-list-item-content>
                                       Contact us
                                   </v-list-item-content>
                               </v-list-item>




                           </v-list-group-item>
                       </v-list>
                   </v-card>
               </v-menu>


               {{-- <v-btn link href="/about-us" color="{{ Request::is('about-us') ? '#b17c2e' : '' }}" small text>About Us</v-btn> --}}
               <v-btn link href="/how-it-works" color="{{ Request::is('how-it-works') ? '#b17c2e' : '' }}" small text>How it works</v-btn>
               <v-menu v-model="menu" :close-on-content-click="false" :nudge-width="200" offset-y>
                   <template v-slot:activator="{ on, attrs }">
                       <v-btn link href="#" small v-on="on" color="{{ Request::is('introduction') || Request::is('beginner-education')
                        || Request::is('finacial-news-analysis') || Request::is('advance-course-and-metatrader4&5-training')
                 ? '#b17c2e' : ''}}" text>Academy
                           <v-spacer></v-spacer>
                           <v-icon>mdi-chevron-down</v-icon>
                       </v-btn>

                   </template>

                   <v-card width="">

                       <v-list color="#b17c2e" dark>
                           <v-list-group-item>
                               <v-list-item link href="{{ route('introduction') }}">
                                   <v-list-item-icon>
                                       <v-icon>mdi-credit-card-clock</v-icon>
                                   </v-list-item-icon>
                                   <v-list-item-content>
                                       Introduction to Forex
                                   </v-list-item-content>
                               </v-list-item>
                               <v-divider></v-divider>
                               <v-list-item link href="{{ route('beginner') }}">
                                   <v-list-item-icon>
                                       <v-icon>mdi-school</v-icon>
                                   </v-list-item-icon>
                                   <v-list-item-content>
                                       Beginner education
                                   </v-list-item-content>
                               </v-list-item>
                               <v-divider></v-divider>
                               <v-list-item link href="{{ route('finacial') }}">
                                   <v-list-item-icon>
                                       <v-icon>mdi-wallet</v-icon>
                                   </v-list-item-icon>
                                   <v-list-item-content>
                                       Financial news and analysis
                                   </v-list-item-content>
                               </v-list-item>
                               <v-divider></v-divider>
                               <v-list-item link href="{{ route('advance') }}">
                                   <v-list-item-icon>
                                       <v-icon>mdi-cube</v-icon>
                                   </v-list-item-icon>
                                   <v-list-item-content>
                                       Advance course and metatrader4&5 training
                                   </v-list-item-content>
                               </v-list-item>
                               <v-divider></v-divider>
                           </v-list-group-item>
                       </v-list>
                   </v-card>
               </v-menu>

               <v-btn link href="{{ route('faq') }}" color="{{ Request::is('frequently-asked-questions') ? '#b17c2e' : '' }}" x-mall text>FAQ</v-btn>
               <v-btn link href="/terms-and-conditions" color="red" small text >Terms & Conditons</v-btn>

           </div>
           <v-spacer></v-spacer>
           @guest

           

           @else
           <div class="mx-2 mr-12">
               <v-menu offset-y>
                   <template v-slot:activator="{ on, attrs }">
                       <v-btn v-bind="attrs" v-on="on" small color="#b17c2e" outlined class="text-capitalize" dark>
                           <v-icon>mdi-account-outline</v-icon>
                           My account

                           <v-icon>mdi-chevron-down</v-icon>
                       </v-btn>
                   </template>

                   <v-list>
                       <v-list-item-group>

                           <v-list-item link href="/dashboard">
                               <v-list-icon>
                                   <v-icon>mdi-view-dashboard</v-icon>
                               </v-list-icon>
                               <v-list-item-content>
                                   Dashboard
                               </v-list-item-content>
                           </v-list-item>
                           <v-divider></v-divider>
                           <v-list-item link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                   @csrf
                               </form>
                               <v-list-icon>
                                   <v-icon>mdi-logout</v-icon>
                               </v-list-icon>
                               <v-list-item-content>
                                   Logout
                               </v-list-item-content>
                           </v-list-item>
                       </v-list-item-group>
                   </v-list>

               </v-menu>
           </div>
           @endguest

       </v-app-bar>

   </div>

   <div class="d-flex d-sm-flex d-md-none d-lg-none">
       <v-app-bar app height="100" color="white" dark flat>

           <v-toolbar-title class="">
               <div class="d-flex mt-5">
                   <v-img src="/images/73.jpeg" width="72" class="mr-4"></v-img>
                   <v-divider vertical inset style="background: #b17c2e;"></v-divider>
                   <v-img src="/images/logo-2.jpeg" width="95"></v-img>
                </div>
                <p>
                    <i class="caption" style="color: black; ">Where clever investors profits</i>

                </p>
           </v-toolbar-title>
           <v-spacer></v-spacer>
           <v-app-bar-nav-icon color="black" dark @click="drawer = !drawer"></v-app-bar-nav-icon>
       </v-app-bar>
   </div>


   <v-navigation-drawer v-model="drawer" right fixed temporary width="300" color="blue-grey darken-4" dark>
       <v-list-item>
           <v-list-item-content>
               Menu
           </v-list-item-content>
       </v-list-item>

       <v-divider></v-divider>
       <v-list dense nav>
           <v-list-item link href="/">
               <v-list-item-icon>
                   <v-icon>mdi-home</v-icon>
               </v-list-item-icon>

               <v-list-item-content>
                   <v-list-item-title>HOME</v-list-item-title>
               </v-list-item-content>
           </v-list-item>

           <v-divider></v-divider>

           <v-list-item link href="/account-type">
               <v-list-item-icon>
                   <v-icon>mdi-notebook-outline</v-icon>
               </v-list-item-icon>

               <v-list-item-content>
                   <v-list-item-title>ACCOUNT TYPE</v-list-item-title>
               </v-list-item-content>
           </v-list-item>

           <v-divider></v-divider>



           <v-list-group v-model="activate_about" no-action prepend-icon="mdi-cog" dark color="white">
               <template v-slot:activator>

                   <v-list-item-content>
                       <v-list-item-title>ABOUT CFI</v-list-item-title>
                   </v-list-item-content>
               </template>
               <v-divider></v-divider>

               <v-list-item link href="/about-us">
                   <v-list-item-content>
                       <v-list-item-title>
                           About us
                       </v-list-item-title>
                   </v-list-item-content>

               </v-list-item>
               <v-divider></v-divider>

               <v-list-item link href="/history">
                   <v-list-item-content>
                       <v-list-item-title>
                           Our history
                       </v-list-item-title>
                   </v-list-item-content>

               </v-list-item>
               <v-divider></v-divider>
               <v-list-item link href="/management">
                   <v-list-item-content>
                       <v-list-item-title>
                           Management
                       </v-list-item-title>
                   </v-list-item-content>

               </v-list-item>
               <v-divider></v-divider>

               <v-list-item link href="/why-CFI">
                   <v-list-item-content>
                       <v-list-item-title>
                           why CFI
                       </v-list-item-title>
                   </v-list-item-content>

               </v-list-item>

               <v-divider></v-divider>
               <v-list-item link href="/abuse-warning">
                   <v-list-item-content>
                       <v-list-item-title>
                           Abuse warning
                       </v-list-item-title>
                   </v-list-item-content>

               </v-list-item>

               <v-divider></v-divider>
               <v-list-item link href="/awards">
                   <v-list-item-content>
                       <v-list-item-title>
                           Awards
                       </v-list-item-title>
                   </v-list-item-content>

               </v-list-item>

               <v-divider></v-divider>
               <v-list-item link href="/contact-us">
                   <v-list-item-content>
                       <v-list-item-title>
                           Contact us
                       </v-list-item-title>
                   </v-list-item-content>

               </v-list-item>



           </v-list-group>

           <v-divider></v-divider>

           <v-list-item link href="/how-it-works">
               <v-list-item-icon>
                   <v-icon>mdi-briefcase</v-icon>
               </v-list-item-icon>

               <v-list-item-content>
                   <v-list-item-title>HOW IT WORKS</v-list-item-title>
               </v-list-item-content>
           </v-list-item>

           <v-divider></v-divider>

           <v-list-group v-model="active" no-action prepend-icon="mdi-school" dark color="white">
               <template v-slot:activator>

                   <v-list-item-content>
                       <v-list-item-title>ACADEMY</v-list-item-title>
                   </v-list-item-content>
               </template>
               <v-divider></v-divider>

               <v-list-item link href="/introduction">
                   <v-list-item-content>
                       <v-list-item-title>
                           Introduction to forex
                       </v-list-item-title>
                   </v-list-item-content>

               </v-list-item>
               <v-divider></v-divider>

               <v-list-item link href="/beginner-education">
                   <v-list-item-content>
                       <v-list-item-title>
                           Beginner education
                       </v-list-item-title>
                   </v-list-item-content>

               </v-list-item>
               <v-divider></v-divider>
               <v-list-item link href="/finacial-news-analysis">
                   <v-list-item-content>
                       <v-list-item-title>
                           Financial news and analysis
                       </v-list-item-title>
                   </v-list-item-content>

               </v-list-item>
               <v-divider></v-divider>

               <v-list-item link href="/advance-course-and-metatrader4&5-training">
                   <v-list-item-content>
                       <v-list-item-title>
                           Advance course and metatrader4&5 training
                       </v-list-item-title>
                   </v-list-item-content>

               </v-list-item>



           </v-list-group>

           <v-divider></v-divider>

           <v-list-item link href="/frequently-asked-questions">
               <v-list-item-icon>
                   <v-icon>mdi-frequently-asked-questions</v-icon>
               </v-list-item-icon>

               <v-list-item-content>
                   <v-list-item-title>FAQ</v-list-item-title>
               </v-list-item-content>
           </v-list-item>
           <v-divider></v-divider>
           <v-list-item link href="/terms-and-conditions">
               <v-list-item-icon>
                   <v-icon>mdi-information</v-icon>
               </v-list-item-icon>

               <v-list-item-content>
                   <v-list-item-title>TERMS & CONDITONS</v-list-item-title>
               </v-list-item-content>
           </v-list-item>
           <v-divider></v-divider>



           @if (Auth::check())
           <v-list-group v-model="activate" no-action prepend-icon="mdi-account" dark color="white">
               <template v-slot:activator>

                   <v-list-item-content>
                       <v-list-item-title>MY ACCOUNT</v-list-item-title>
                   </v-list-item-content>
               </template>

               <v-list-item link href="/dashboard">
                   <v-list-item-content>
                       <v-list-item-title>
                           Dashboard
                       </v-list-item-title>
                   </v-list-item-content>

               </v-list-item>
           </v-list-group>
           @endif




       </v-list>
       @if (Auth::check())
       <template v-slot:append>
           <div class="pa-2">
               <v-btn block color="white">
                   <span style="color: black">Logout</span>
               </v-btn>
           </div>
       </template>
       @endif
   </v-navigation-drawer>

</div>
