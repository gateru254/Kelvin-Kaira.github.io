<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Portfolio')</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/projects.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        /* Sidebar default */
        #sidebar {
            width: 250px;
            height: 100vh;
            transition: width 0.3s ease;
            float: left;
        }

        /* Collapsed sidebar */
        #sidebar.collapsed {
            width: 0;
        }

        /* Main content shifts */
        #main-content {
            margin-left: 250px;
            transition: margin-left 0.3s ease;
        }

        #main-content.collapsed {
            margin-left: 0;
        }

        /* Hamburger positioning */
        .hamburger {
            position: fixed;
            top: 10px;
            left: 10px;
            cursor: pointer;
            z-index: 1000;
        }
    </style>
</head>
<body>

    <!-- Hamburger -->
    <div class="hamburger" id="hamburger">&#9776;</div>

    <!-- Sidebar -->
    @include('layouts.sidebar')

    <!-- Main Content -->
    <div id="main-content" class="content">
        @yield('content')
    </div>

    <!-- JavaScript -->
    <script>
        const sidebar = document.getElementById('sidebar');
        const hamburger = document.getElementById('hamburger');
        const mainContent = document.getElementById('main-content');

        hamburger.addEventListener('click', () => {
            sidebar.classList.toggle('collapsed');
            mainContent.classList.toggle('collapsed');
        });
    </script>
</body>
</html>
