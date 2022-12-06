<div class="min-w-0 p-4 bg-white rounded-lg shadow-lg {{ $class }}">
    <div class="flex items-center mb-4">
        @if (isset($title))
            <h4 class="text-lg font-semibold text-gray-600">
                {{ $title }}
            </h4>
        @endif

        @if (isset($button))
            {{ $button }}
        @endif

    </div>
    @if (isset($title) || isset($button))
        <hr />
    @endif
    {{ $slot }}
</div>
