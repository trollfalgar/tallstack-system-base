@extends('layouts.base')

@section('body')
    <div id="root">
        @include('layouts.partials.sidebar')
        <div class="relative md:ml-64 bg-bluegray-100">
            @include('layouts.partials.header')
            <div>
                @yield('content')
            </div>
        </div>
    </div>

    @isset($slot)
        {{ $slot }}
    @endisset
@endsection
