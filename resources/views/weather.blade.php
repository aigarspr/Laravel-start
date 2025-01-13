<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>{{ $city }}</title>
</head>

<body>
    <header>
        <h1 class="text-3xl font-semibold text-center  mb-6">{{ $city }}</h1>
    </header>
    <div>
        <p class="text-2xl   mb-6">The current temperature in {{ $city }} is {{ $temp }}°C</p>
    </div>

</body>

</html>
