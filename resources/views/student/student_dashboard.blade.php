<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons (optional) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }
        .tnav{
            background-color: darkblue;
            color: #f8f9fa;
        }
        .tnav .navbar-brand{
            color: wheat;
            font-weight: bold;
            padding: 20px;
        }
        .tnav .nav-item .nav-link{
            color: wheat;
            font-weight: bold;
            
        }
        .sidebar {
            height: 100vh;
            background-color:darkblue;
            color: white;
            border-right: 1px solid #dee2e6;
        }
        .sidebar .nav-link.active {
            color: white;
           
        }
        .sidebar .nav-link{
            color: #dee2e6;
            font-weight: bold;
        }
        .stwel{
            color:darkblue;
            font-style: italic;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
        }
        .navbar-toggler-icon{
            background-color: #dee2e6;
            border-radius: 10px;
        }
        @media (max-width: 768px) {
            .sidebar {
                height: auto;
                border-right: none;
            }
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg sticky-top tnav">
    <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Student Panel</a>
       
        <div class="collapse navbar-collapse justify-content-end" id="topNav">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-sm btn-light ms-2" href="#">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav class="col-md-3 col-lg-2 d-md-block sidebar pt-3 collapse show" id="sidebarMenu">
            <ul class="nav flex-column px-3">
                <li class="nav-item">
                    <a class="nav-link active" href="#">
                        <i class="bi bi-speedometer2"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-book"></i> My Courses
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-person"></i> Profile
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Main Content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
            <h1 class="mb-4 stwel">Welcome to Your Dashboard</h1>

            <div class="row">
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Total Courses</h5>
                            <p class="card-text">3 Enrolled</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Modules Completed</h5>
                            <p class="card-text">15</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Upcoming Exams</h5>
                            <p class="card-text">2 This Week</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
