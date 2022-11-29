<!DOCTYPE html>
<html lang="id">

<head>
    @include('components.head')
</head>

<body>
    <div class="flex min-h-screen bg-gray-50">
        <div class="flex flex-col flex-1 w-full">
            @include('components.navigation')
            <div class="container relative mx-auto p-4 md:p-6">
                @yield('contents')
            </div>
        </div>

        @include('components.footer')
    </div>
</body>

</html>
