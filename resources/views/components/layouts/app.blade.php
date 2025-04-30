<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @vite('resources/css/app.css')
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="https://kit.fontawesome.com/9d5bf2e3d5.js" crossorigin="anonymous"></script>
        <link rel="icon" type="image" href="{{ Vite::asset('public/images/logo.png') }}" />
        <title>Sorok Foundation</title>
        @livewireStyles

    </head>
    <body class="font-primary overflow-x-hidden">
        <header>
            @include('components.layouts.navbar')
        </header>
        
        
     

        <main class="mb-8">

            {{ $slot }}

        </main>

        @include('components.layouts.footer')
        
        
        
        @livewireScripts
    
        @vite(['resources/js/app.js'])



        <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/67e0ec56241a85190f5bbba7/1in39mcps';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
            })();
        </script>

    </body>
</html>
