@extends('layouts.base')

@section('body')
    <div class="relative bg-lightblue-600 md:pt-32 pb-32 pt-12">
        <div class="px-4 md:px-10 mx-auto w-full">
            @yield('content')
        </div>
    </div>

    @isset($slot)
        {{ $slot }}
    @endisset
@endsection