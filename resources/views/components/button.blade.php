<?php
$classSize = "";

switch ($size) {
    case 'sm':
        $classSize = "px-2 py-1 text-xs rounded";
        break;
    
    case 'lg':
        $classSize = "px-4 py-2 text-base rounded";
        break;
    
    default:
        $classSize = "px-4 py-2 text-sm rounded";
        break;
}
?>

@if ($asLink)
    {{--<a
        {{ $attributes->merge(['class' => 'inline-flex items-center ' . $classSize .' my-2 font-medium leading-5 text-center text-white transition-colors duration-150 bg-' . $color .'-500 border border-transparent active:bg-' . $color .'-500 hover:bg-' . $color .'-600 focus:outline-none focus:shadow-outline-' . $color .'']) }}>{{ $slot }}</a>--}}

    <a
        {{ $attributes->merge(['class' => 'inline-flex items-center ' . $classSize .' my-2 font-medium leading-5 text-center text-white transition-colors duration-150 bg-' . $color .'-500 border  active:bg-' . $color .'-500 hover:bg-' . $color .'-600 focus:outline-none focus:shadow-outline-' . $color .'']) }}>{{ $slot }}</a>
@else
    <button {{ $attributes->merge(['class' => 'inline-flex items-center ' . $classSize .' my-2 font-medium leading-5 text-center text-white transition-colors duration-150 bg-' . $color .'-500 border border-transparent active:bg-' . $color .'-500 hover:bg-' . $color .'-600 focus:outline-none focus:shadow-outline-' . $color .'']) }}> {{ $slot }} </button>
@endif
