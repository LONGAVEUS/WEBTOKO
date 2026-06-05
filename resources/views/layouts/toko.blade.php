<!DOCTYPE html>
<html lang="en">`
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toko</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">
    @include('components.sidebar')

    <div class="p-4 md:ml-64">
        <div class="p-4 mt-14">
        @yield('content')
    </div>

    <div class="p-4">
        @include('components.footer')
    </div>
    </div>
</div>
</body>
</html>
