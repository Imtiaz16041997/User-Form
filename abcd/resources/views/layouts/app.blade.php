<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>abcd</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body class="bg-gray-200">
        <nav class="p-6 bg-white flex justify-between mb-6">
            <ul class="flex items-center">
                <li>
                    <a href="" class="p-5">Home</a>
                </li>

                <li>
                    <a href=""class="p-5">Dashboard</a>
                </li>

                <li>
                    <a href=""class="p-5">Post</a>
                </li>
            </ul>

            <ul class="flex items-center">
                <li>
                    <a href="" class="p-5"> Ibnul Imtiaz</a>
                </li>

                <li>
                    <a href=""class="p-5">Login</a>
                </li>

                <li>
                    <a href="{{route('register')}}"class="p-5">Register</a>
                </li>

                <li>
                    <a href=""class="p-5">Logout</a>
                </li>
            </ul>

        </nav>
        @yield('content')
    </body>

</html>
