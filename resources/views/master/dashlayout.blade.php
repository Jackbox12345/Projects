<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
   
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
</head>
<body>
    <!-- Entire body content goes here -->
    <div class="master-layout">
        <!-- Sidebar -->
        <div class="sidebar">

            <div class="logo">
                <img src="{{asset('pictures/2.jpg')}}" alt="">
            </div>
        <x-buttons.side />
        </div>

        <!-- Page content -->
        <div class="content">
            <!-- Navbar -->
            <nav class="navbar">
                <span class="navbar-brand">Dashboard</span>
            </nav>

            <!-- Main content -->
            <div class="container">
                
                <!-- Your dashboard content goes here -->
                @yield('content')
                
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>