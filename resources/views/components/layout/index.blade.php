<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ ($title . ' / ' ?? '') . (config('app.name') ?? 'CLIC') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/Loopple/loopple-public-assets@main/motion-tailwind/motion-tailwind.css"
        rel="stylesheet">
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
    <!-- Styles -->
    @vite('resources/css/app.css')
</head>

<body class="font-sans antialiased  ">
    {{ $slot }}
</body>

</html>
