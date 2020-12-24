<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
<title>@yield('title') Cleverfxinvestor</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    {{--  Firefox, Chrome, Opera min  --}}
    {{-- <meta name="theme-color" content="#000000" /> --}}
    {{--  Window phones  --}}
    {{-- <meta name="msapplication-navbutton-color" content="#000000" /> --}}
    {{--  IOS devices  --}}
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/AdminLTE.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/skins/_all-skins.min.css">
    {{--  <link href="https://cdn.jsdelivr.net/npm/vuetify@1.x/dist/vuetify.min.css" rel="stylesheet">  --}}
    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/_all.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>
    <link rel="icon" href="{{ asset('img/core-img/favicon.ico')}}">
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>
    <link ref="stylesheet" href="{{ asset('css/app.css') }}" />
    @yield('css')
     @livewireStyles
</head>

<body class="skin-black sidebar-mini" >

        @if (!Auth::guest())
            <div class="wrapper" id="app">
                <!-- Main Header -->
                <header class="main-header" >

                    <!-- Logo -->
                     <a href="{{ url('/') }}" class="logo" style="background: #fff; height: 70px" >
                        <img src="/images/logo-2.jpeg" alt="" width="100" style="margin-top: -10px; "  class="secert">
                    </a>

                    <!-- Header Navbar -->
                    <nav class="navbar navbar-static-top" role="navigation" >
                        <!-- Sidebar toggle button-->
                        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                            <span class="sr-only">Toggle navigation</span>
                        </a>
                        <!-- Navbar Right Menu -->
                        <div class="navbar-custom-menu">
                            <ul class="nav navbar-nav">
                                 {{--  <li><a href="#" @click.prevent="changeLang()"><img src="{{ asset('img/custom/us.png') }}" width="20px">EN</a>
                                 <ul class="dropdown">
                                    <li v-for="(locale, index) in locales">
                                        <a href="#" @click.prevent="changeLang(locale.language)"><img src="@{{ locale.image }}" width="20px">@{{locale.language}} </a>
                                    </li>
                                </ul>
                            </li>  --}}
                                <!-- User Account Menu -->
                                <li class="dropdown user user-menu">
                                    <!-- Menu Toggle Button -->
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <!-- The user image in the navbar-->
                                        @if (Auth::user()->profile_pic == null)
                                            <img src="{{ asset('images/avatar.png') }}" class="img-circle"
                                                 alt="User Image" width="30px" />
                                                @else
                                                <img src="{{ asset('storage/'.Auth::user()->profile_pic) }}" class="img-circle"
                                                alt="User Image" width="30px" />
                                            @endif
                                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                        <span class="hidden-xs">{{ ucfirst(Auth::user()->name) }}</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <!-- The user image in the menu -->
                                        <li class="user-header">
                                            @if (Auth::user()->profile_pic == null)
                                                <img src="{{ asset('images/avatar.png') }}" class="img-circle"
                                                    alt="User Image"/>
                                                    @else
                                                    <img src="{{ asset('storage/'.Auth::user()->profile_pic) }}" class="img-circle"
                                                    alt="User Image"/>
                                                @endif
                                            <p>
                                                {{ Auth::user()->name }}
                                                <small>Member since {{ Auth::user()->created_at->format('M. Y') }}</small>
                                            </p>
                                        </li>
                                        <!-- Menu Footer-->
                                        <li class="user-footer">
                                            <div class="pull-left">
                                                <v-dialog
                                                v-model="dialog"
                                                width="500"

                                                >
                                                <template v-slot:activator="{ on }">
                                                <v-btn
                                                    color="info lighten-2"
                                                    dark
                                                    v-on="on"
                                                    default
                                                    text
                                                    class="bg-blue text-white"
                                                    style="padding: 8px"
                                                >
                                                    Profile
                                                </v-btn>
                                                </template>

                                                <v-card>
                                                <v-card-title
                                                    class="headline grey lighten-2"
                                                    primary-title
                                                >
                                                   UPDATE PROFILE
                                                </v-card-title>

                                                <v-form action="{{ url('users/profile') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                <v-card-text>
                                                        <v-text-field
                                                            type="file"
                                                            name="profile_picture"
                                                            value="{{ old('profile_picture') }}"
                                                            required
                                                        ></v-text-field>
                                                </v-card-text>
                                                @if ($errors->has('profile_picture'))
                                                <p class="help is-danger text-danger text-center">{{ $errors->first('profile_picture') }}</p>
                                                 @endif
                                                <v-divider></v-divider>

                                                <v-card-actions>
                                                    <v-spacer></v-spacer>
                                                    <v-btn
                                                    color="info"
                                                    text
                                                    @click="dialog = false"
                                                    class="bg-green text-white "
                                                    style="padding: 8px"
                                                    type="submit"

                                                    >
                                                    Update
                                                    </v-btn>
                                                </v-card-actions>
                                            </v-form>

                                                </v-card>
                                            </v-dialog>
                                                {{--  <a href="#" class="btn btn-default btn-flat">Profile</a>  --}}

                                            </div>
                                            <div class="pull-right">
                                                <a href="{{ url('/logout') }}" class="btn btn-default btn-flat"
                                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    Sign out
                                                </a>
                                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </header>

                <!-- Left side column. contains the logo and sidebar -->
                @include('layouts.sidebar')
                <!-- Content Wrapper. Contains page content -->
                <div class="content-wrapper" >
                    
                   
                    @yield('content')
                   
                </div>

                <!-- Main Footer -->
                <footer class="main-footer" style="max-height: 100px;text-align: center">
                    <strong>Copyright © 2020 <a href="#">cleverfxinvestor</a>.</strong> All rights reserved.
                </footer>

            </div>
        @else
            <nav class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">

                        <!-- Collapsed Hamburger -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#app-navbar-collapse">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- Branding Image -->
                        <a class="navbar-brand" href="{{ url('/') }}">
                            cleverfxinvestor
                        </a>
                    </div>

                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <!-- Left Side Of Navbar -->
                        <ul class="nav navbar-nav">
                            <li><a href="{{ url('/home') }}">Home</a></li>
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div id="page-content-wrapper" >
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
            @endif

    <!-- jQuery 3.1.1 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/js/adminlte.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>

    @stack('scripts')

    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/vuetify@1.x/dist/vuetify.js"></script>
    @yield('script')

    <script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>

            <script  src="{{ asset('ckeditor/ckeditor.js') }}"></script>

            <script>
                CKEDITOR.replace('terms-and-conditions');
            </script>

             @livewireScripts

<script>
    AOS.init();
</script>
</body>
</html>
