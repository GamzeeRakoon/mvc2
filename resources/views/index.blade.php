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

    <div id="productSection" class="flex flex-col w-full gap-4 bg-neutral-800">
        <livewire:product/>
    </div>

    <div id="materialsSection" class="flex flex-col w-full gap-4 bg-neutral-800">
        <livewire:materials :resultId="$resultId"/>
    </div>

</div>
<script>
    var currentUrl = '{{ Request::url() }}';
    var urlDepth = currentUrl.split('/').filter(Boolean).length;

    // You can use 'urlDepth' here or attach event listeners to detect URL changes
    console.log('URL depth:', urlDepth);

    // Conditionally show/hide content based on URL depth
    if (urlDepth > 3) {
        // For example, if the depth is more than 3, show the product content
        document.getElementById('productSection').style.display = 'none';
    } else {
        // Otherwise, show the materials content
        document.getElementById('materialsSection').style.display = 'none';
    }
</script>

</body>
@livewireScripts
</html>

