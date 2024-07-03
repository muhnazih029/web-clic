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
    {{-- Galyon Font --}}
    <link href="https://db.onlinewebfonts.com/a/7B61B1MRpahLH1UJsLxgF3U3i9Xp33YZG3vnT2MNCmN1Ln2QKleT723e"
        rel="stylesheet" type="text/css" />
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
    <!-- Styles -->
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="font-sans antialiased ">
    {{ $slot }}
</body>

</html>
