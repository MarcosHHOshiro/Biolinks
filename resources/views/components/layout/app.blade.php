<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')

    <title> {{ config('app.name') }} </title>
</head>

<body class="bg-slate-900 text-slate-50 min-h-screen">
    {{ $slot }}
</body>

</html>