<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <title inertia>{{ config('app.name', '') }}</title>
    @viteReactRefresh
    @vite(['resources/react/Main.tsx', "resources/react/Pages/{$page['component']}/index.tsx"])
    @inertiaHead
</head>

<body>
    @inertia
</body>

</html>
