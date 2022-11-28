<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - @yield('title')</title>

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="flex items-center min-h-screen bg-white">
        <div class="flex-1 h-full w-full overflow-hidden">
            <div class="flex flex-col overflow-y-auto md:flex-row h-screen">
                <div class="flex items-center justify-center md:w-1/3 md:p-6 w-full">
                    <div class="md:max-w-lg p-4 md:p-0">
                        <img class="w-[180px] mx-auto mb-6" src="{{ URL('assets/img/logo-umby.png') }}" />
                        <h1 class="mb-2 text-2xl md:text-3xl text-gray-600">Masuk ke <span class="font-semibold">SIA</span></h1>
                        <p class="mb-4 text-cool-gray-400 text-sm md:text-base">Sistem Informasi Akademik <span class="font-semibold">Univeritas Mercubuana Yogyakarta</span></p>

                        <!-- Form section -->
                        <form>
                            <label class="block">
                                <input type="text" name="username" placeholder="Username" class="form-input rounded block w-full mt-1 focus:border-blue-400 focus:outline-none focus:shadow-outline-blue my-4 border-cool-gray-100 text-gray-600 py-4" />
                            </label>

                            <label class="block">
                                <input type="password" name="password" placeholder="Password" class="form-input rounded block w-full mt-1 focus:border-blue-400 focus:outline-none focus:shadow-outline-blue my-4 border-cool-gray-100 text-gray-600 py-4" />
                            </label>

                            <div class="flex mb-10">
                                <label class="block">
                                    <input type="checkbox" id="toggle-password" class="form-checkbox rounded">
                                    <span class="text-cool-gray-500">Tampilkan password</span>
                                </label>
                                <p class="ml-auto">
                                    <a class="text-sm font-medium text-blue-600 hover:underline" href="./forgot-password.html">
                                        Lupa password?
                                    </a>
                                </p>
                            </div>

                            <button type="submit" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-blue-500 border border-transparent rounded-lg active:bg-blue-500 hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue" href="../index.html">
                                Log in
                            </button>
                        </form>
                        <div class="block">
                            <a class="text-sm font-medium text-cool-gray-400 underline mx-1" href="./forgot-password.html">
                                Helpdesk
                            </a>
                            <a class="text-sm font-medium text-cool-gray-400 underline mx-1" href="./forgot-password.html">
                                HOTLINE
                            </a>
                            <p class="text-sm text-cool-gray-400 italic">Bagi mahasiswa diharap menyertakan NIM dan nama lengkap untuk dapat ditanggapi.</p>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block h-full md:w-2/3">
                    <img aria-hidden="true" class="object-cover w-full h-full" src="../assets/img/login-office.jpeg" alt="Office" />
                </div>
            </div>

        </div>
    </div>

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        // toggling: tampilkan passowrd
        const checkboxTogglePass = $('#toggle-password')

        // event listener change
        checkboxTogglePass.on("change", function onClick() {
            const passwordInput = $('input[name="password"]')

            if (passwordInput.attr('type') === "password") passwordInput.attr('type', 'text')
            else passwordInput.attr('type', 'password')
        })
    </script>
</body>

</html>