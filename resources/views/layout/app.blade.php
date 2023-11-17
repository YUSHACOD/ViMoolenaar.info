<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ViMoolenaar</title>
    <link rel="shortcut icon" type="image/svg" href="{{ asset('favicon.svg') }}"/>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="width-full h-full">
        @include('layout.header')
        <main class="flex flex-col min-h-screen">
            @yield('appContents')
        </main>
        @include('layout.footer')
    </div>
</body>
</html>
