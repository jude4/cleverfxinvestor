<header class="header-area">
    <!-- Navbar Area -->
    <div class="cryptos-main-menu" id="nav-bar" style="height: 120px; ">
        <div class="classy-nav-container breakpoint-off">
            <div class="container ">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between"  id="cryptosNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="{{ url('/') }}"><img src="{{ asset('img/core-img/logo.png')}}" alt="" width="150" class="secert"></a>
                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav ">
                            <ul>
                                <li><a href="{{ url('/') }}"><i class="fa fa-home"></i>Home</a></li>
                                <li><a href="{{ url('how-it-work') }}"><span class="fa fa-briefcase"></span>How it work</a></li>
                                <li><a href="{{ url('about-us') }}"><b class="fa fa-info"></b>About us</a></li>
                                <li><a href="{{ url('faq') }}"><b class="fa fa-question"></b>FAQ</a></li>
                                {{-- <li><a href="{{ url('training') }}"><b class="fa fa-school"></b>Training</a></li> --}}
                                <!-- Authentication Links -->
                                @guest
                                    <li><a href="{{ route('login')}}">Login</a></li>
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                @else
                                    <li><a href="#"<b class="fa fa-user"></b>My Account</a>
                                        <ul class="dropdown">
                                            <li><a href="{{ url('dashboard') }}"><b class="fa fa-dashboard"></b>Dashboard</a></li>
                                            <li><a href="{{ route('logout') }}"   onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();"><b class="fa fa-sign-out"></b>Logout</a></li>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>

                                        </ul>
                                    </li>
                               @endguest
                               {{--  <li><a href="#" @click.prevent="changeLang()"><img src="{{ asset('img/custom/us.png') }}" width="20px">@{{lang}}</a>  --}}
                                {{--  <ul class="dropdown">
                                    <li v-for="(locale, index) in locales">
                                        <a href="#" @click.prevent="changeLang(locale.language)"><img src="@{{ locale.image }}" width="20px">@{{locale.language}} </a>
                                    </li>
                                </ul>  --}}
                            {{--  </li>  --}}
                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

