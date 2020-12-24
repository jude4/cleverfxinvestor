@component('mail::layout')
    {{-- Header --}}
    @slot('header')
    @component('mail::header', ['url' => config('app.url')])
    <img src="{{ asset('img/core-img/logo.png')}}" alt="" width="150" alt="FxClassicNetwork">

        @endcomponent
    @endslot

    {{-- Body --}}
    {{ $slot }}

    {{-- Subcopy --}}
    @isset($subcopy)
        @slot('subcopy')
            @component('mail::subcopy')
                {{ $subcopy }}
            @endcomponent
        @endslot
    @endisset

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            © {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
        @endcomponent
    @endslot
@endcomponent
