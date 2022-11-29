<?php $baseClass = "font-semibold text-gray-800" ?>

@switch($level)
    @case(6)
    <h6 class="text-sm {{ $baseClass }} {{ $class }}">
        {{ $slot }}
    </h6>
    @break

    @case(5)
    <h5 class="text-base {{ $baseClass }} {{ $class }}">
        {{ $slot }}
    </h5>
    @break

    @case(4)
    <h4 class="text-lg {{ $baseClass }} {{ $class }}">
        {{ $slot }}
    </h4>
    @break

    @case(3)
    <h3 class="text-xl{{ $baseClass }} {{ $class }}">
        {{ $slot }}
    </h3>
    @break

    @case(2)
    <h2 class="text-2xl {{ $baseClass }} {{ $class }}">
        {{ $slot }}
    </h2>
    @break

    @default
        <h1 class="text-3xl {{ $baseClass }} {{ $class }}">
            {{ $slot }}
        </h1>
@endswitch
