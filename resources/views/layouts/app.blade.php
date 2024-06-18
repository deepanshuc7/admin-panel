<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        <div class="min-vh-100 bg-light">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="container py-6">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->

            <!-- Add this part to show admin link if the user is an admin -->
            @auth
                @if(Auth::user()->is_admin)  
                    <div class="container py-6 d-flex justify-content-center align-items-center">
                        <li class="nav-item list-unstyled">
                            <a class="nav-link btn btn-primary btn-lg" href="{{ route('admin.index') }}" style="padding: 12px 20px; font-size: 30px;">
                                HELLO ADMINISTRATOR, here is the <span style="color: blue;">LINK TO ADMIN PANEL</span>
                            </a>
                        </li>
                    </div>
                @endif
            @endauth
         
            <main>
                @hasSection('content')
                    @yield('content')
                @else
                    {{ $slot }}
                @endif
            </main>
        </div>

        <!-- Bootstrap JS and Popper.js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
    </body>
</html>
