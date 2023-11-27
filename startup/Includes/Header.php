<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- css -->
    <link rel="stylesheet" href="css/Bootstrap.css">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway&display=swap" rel="stylesheet">
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <title>Document</title>
</head>
<body>
    <!-- start nav -->
    <nav class="py-3 bg-white fixed-top">
        <div class="container">
            <div class="d-flex justify-content-between">
                <!-- left nav -->
                <a href="" class="text-decoration-none text-dark font-Raleway fw-bold h4">MULTI</a>
                <!-- right nav -->
                <ul class="nav text-decoration-none d-none d-lg-flex">
                    <li class="nav-item"><a href="" class="nav-link text-danger">Home</a></li>
                    <li class="nav-item"><a href="" class="text-dark nav-link link-danger">About</a></li>
                    <li class="nav-item"><a href="" class="text-dark nav-link link-danger">Services</a></li>
                    <li class="nav-item"><a href="" class="text-dark nav-link link-danger">Portfolio</a></li>
                    <li class="nav-item"><a href="" class="text-dark nav-link link-danger">Team</a></li>
                    <!-- start dropdown -->
                    <li class="nav-item dropdown">
                        <a href="" class="dropdown-toggle text-dark nav-link link-danger" role="button" data-bs-toggle="dropdown">Drop Down</a>
                        <ul class="dropdown-menu">
                            <li><a href="" class="dropdown-item">Drop Down 1</a></li>
                            <li><a href="" class="dropdown-item">Drop Down 2</a></li>
                            <li><a href="" class="dropdown-item">Drop Down 3</a></li>
                            <li><a href="" class="dropdown-item">Drop Down 4</a></li>
                        </ul>
                    </li>
                    <!-- end drop down -->
                    <li class="nav-item"><a href="" class="text-dark nav-link link-danger">Contact</a></li>
                    <li class="nav-item"><a href="" class="btn btn-danger">Get Started</a></li>
                </ul>
                <!-- Offcanvas Sidebar -->
                <div class="offcanvas offcanvas-start" id="demo">
                    <div class="offcanvas-header">
                        <h1 class="offcanvas-title fw-bold">Multi</h1>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="nav text-decoration-none flex-column align-items-start">
                            <li class="nav-item"><a href="" class="nav-link text-danger">Home</a></li>
                            <li class="nav-item"><a href="" class="text-dark nav-link link-danger">About</a></li>
                            <li class="nav-item"><a href="" class="text-dark nav-link link-danger">Services</a></li>
                            <li class="nav-item"><a href="" class="text-dark nav-link link-danger">Portfolio</a></li>
                            <li class="nav-item"><a href="" class="text-dark nav-link link-danger">Team</a></li>
                            <!-- start dropdown -->
                            <li class="nav-item dropdown">
                                <a href="" class="dropdown-toggle text-dark nav-link link-danger" role="button" data-bs-toggle="dropdown">Drop Down</a>
                                <ul class="dropdown-menu">
                                    <li><a href="" class="dropdown-item">Drop Down 1</a></li>
                                    <li><a href="" class="dropdown-item">Drop Down 2</a></li>
                                    <li><a href="" class="dropdown-item">Drop Down 3</a></li>
                                    <li><a href="" class="dropdown-item">Drop Down 4</a></li>
                                </ul>
                            </li>
                            <!-- end drop down -->
                            <li class="nav-item"><a href="" class="text-dark nav-link link-danger">Contact</a></li>
                            <li class="nav-item"><a href="" class="btn btn-danger">Get Started</a></li>
                        </ul>
                    </div>
                </div>
                
                <!-- Button to open the offcanvas sidebar -->
                <button class="btn Offcanvas-btn d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
                    <i class="bi bi-list fs-4"></i>
                </button>
            </div>
        </div>
    </nav>
    <!-- end nav -->