<div class="min-w-0 p-4 bg-white rounded-lg shadow-lg {{ $class }}">
    @if (isset($title))
        <h4 class="text-lg mb-4 font-semibold text-gray-600">
            {{ $title }}
        </h4>
        <hr />
    @endif
    {{ $slot }}
</div>
