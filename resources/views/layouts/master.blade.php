<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | Cleverfxinvestor</title>
    <!-- Scripts -->
    {{-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <v-app id="app">
        <v-content>
            <v-app id="inspire">
                <app-bar inline-template>
                    <v-sheet color="grey lighten-4">
                       
                        
                       
                        {{-- Navbar --}}
                        {{-- @include('partials._navbar') --}}
                        
                         <v-btn fixed right elevation="2" small link href="mailto:support@cleverfxinvestor.com" fab color="red" dark style="margin-top: 240px">
                            <v-icon>mdi-email</v-icon>
                        </v-btn>
                        
                          <v-btn fixed right elevation="2" small link href="https://t.me/cleverfxinvestor" fab color="blue" dark style="margin-top: 290px">
                            <v-icon>mdi-telegram</v-icon>
                        </v-btn>
                        @yield('content')
                        
                       
                    </v-sheet>
                </app-bar>
            </v-app>
            @include('partials._footer')
        </v-content>
    </v-app>

    <script src="//code.jivosite.com/widget/GDshIUaHiD" async></script>
    {{-- <script src="https://unpkg.com/aos@next/dist/aos.js"></script> --}}
    <script src="{{ asset('js/app.js') }}"></script>
<script>
    AOS.init();
</script>
</body>
</html>
