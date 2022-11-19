<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="v1ad4525CykoO7d8s5q6qigPjRTKnavnnGYguozV">

    <title>Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="{{ asset('backend/main.css') }}">
</head>

<body>
    @include('layouts.backend.header')
    @include('layouts.backend.sidebar')
    {{ $slot }}
    @include('layouts.backend.footer')
    <script type="text/javascript" src="{{ asset('backend/main.min.js') }}"></script>
</body>

</html>
