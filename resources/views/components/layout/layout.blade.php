<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title', 'Login Form')</title>
</head>

<body>
    <div class="root-container h-auto w-auto min-h-screen min-w-screen bg-gray-200 flex justify-center items-center ">
        @yield('content')
    </div>
</body>

</html>
