<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/css/app.css')
    <title>Home</title>

    @livewireStyles
</head>
<body class="flex flex-col h-full text-white">
@if(Auth::guest())
    <livewire:welcome.navigation/>

@else
    @auth
        <livewire:layout.navigation/>
    @endauth
@endif

<div class="flex flex-row h-full">
    <div class="flex flex-col h-full">
        <livewire:category/>
    </div>

    <div class="flex flex-col w-full gap-4 bg-neutral-800">
        <livewire:materials :resultId="$resultId"/>
    </div>
</div>

</body>
@livewireScripts
</html>
