<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("css/app.css")}}">
    
    {{-- Para que no haga cache, porque sino los componentes de livewire se muestran en su estado anterior
        e inmediatamente se actualizan, pero se ve, y queda feo... --}}
    <meta name="turbolinks-cache-control" content="no-cache">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    
    <title>SPA</title>
    
    @livewireStyles
    @livewireScripts
    
    {{-- TurboLinks - Livewire --}}
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false"></script>    
        
    {{-- Propio --}}
    <script src="{{ asset("js/app.js") }}"></script>

</head>
<body class="prueba">     
    @yield("contenido")        
</body>
</html>