<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard - Institute</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap 5 + Icons + Chart.js -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
        /* Custom Styles */
        body {
            font-family: Arial, sans-serif;
        }
        .topbar{
            background-color: darkblue;
            color:wheat;
            padding: 20px;
        }
        #d1{
            color: wheat;
            font-weight: bold;
        }
        .navbar-toggler-icon{
          border-radius: 20%;
          background-color: white;
          
        }
        
        .sidebar {
            margin-top: 48px;
            height: 100vh;
            background-color: darkblue;
            color:white;
            font-weight: bold;
        }
        .sidebar .nav-item {
            width: 100%;
             border-bottom: 1px solid gray;
            
        }
        .sidebar .nav-link {
            color: white;
           
        }
        .sidebar .nav-item:hover {
            background-color:blue;
        }
        .content {
            margin-left: 210px;
            margin-top: 8px;
            padding: 20px;
            padding-top: 50px;
            color:darkblue;
        }
        .content .container {
            margin-top: 20px;
            border-radius: 10px;
            padding: 40px;
            box-shadow: rgb(204, 219, 232) 3px 3px 6px 0px inset, rgba(255, 255, 255, 0.5) -3px -3px 6px 1px inset;
        }
        .sec{
            padding: 20px;
        }
        .total{
            font-style: italic;
            color: darkblue;
            font-weight: bold;

        }
        .card{
            padding: 20px;
          box-shadow: rgba(0, 0, 0, 0.35) 0px -50px 36px -28px inset;
        }
        .card:hover{
            background-color: darkblue;
            color:white;
            font-style: italic;
            
        }
        .card-title{
            font-family:Arial, Helvetica, sans-serif;
            font-weight: bold;
        }
        .card-text{
            color:black;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        .card-body:hover .card-text{
            color:black;
            
        }
        .click{
          box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        }
        .click:hover{
            background-color: red;
            color:blue;
        }
        #logoutDropdown:hover{
            background-color: blue;
            color:blue;
            
        }
        @media (max-width: 992px) {
            .sidebar {
                position: absolute;
                padding-top: 30px;
                top: 80;
                left: -250px;
                width: 220px;
                z-index: 999;
                transition: all 0.3s;
            }
            .sidebar.active {
                left: 0;
            }
            .content {
                margin-left: 0;
            }
            .navbar-toggler {
                display: block;
            }
        }
    </style>
</head>
<body>
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif


<nav class="navbar navbar-expand-lg topbar fixed-top">
    <div class="container-fluid"> 
    <div class="row align-items-center">
    <div class="col">
    <button class="navbar-toggler" type="button"data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="col">
        <a class="navbar-brand" id="d1">Admin Dashboard</a>
    </div>
    <div class="col">
       <div class="collapse navbar-collapse" id="navbarNav">
            
            <div class="dropdown " style="position: absolute; top: 10px; right: 30px;">
            <button class="btn btn-link " type="button" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            <span  style="color:white;font-size:20px;font-weight:bold;">
             <img src="img/logout.png"height="23px"width="23px" style="color:white;font-weight:bold;background-color:white;border-radius:50%">
            </span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="profileDropdown">
                <li><a class="dropdown-item" href="#" id="logoutButton">Logout</a></li>
            </ul>
        </div>
        </div>
    </div>
  </div>
</div>
</nav>
    <!-- Sidebar -->
    <div class="sidebar bg-darkblue position-fixed" id="sidebar">
        <ul class="nav flex-column p-3">
            <li class="nav-item">
                <a class="nav-link active" href="{{url('/admindashboard')}}">Dashboard</a>
            </li>
            <li class="nav-item">
            <span class="fa fa-users"style="display:inline-block"></span>
                <a class="nav-link" href="{{url('/adminstudent')}}"style="display:inline-block">Students Details</a>
            </li>
            <li class="nav-item">
                <span class="fa fa-user"style="display:inline-block"></span>
                <a class="nav-link" href="{{url('/adminteacher')}}"style="display:inline-block">Teachers Details</a>
            </li>
            <li class="nav-item">
            <span class="fa fa-layer-group"style="display:inline-block"></span>
                <a class="nav-link" href="{{url('/admincourses')}}"style="display:inline-block">Courses Details</a>
            </li>
            <li class="nav-item">
            <span class="fa fa-money-bill"style="display:inline-block"></span>
                <a class="nav-link" href="{{url('/adminfees')}}"style="display:inline-block">Fees Details</a>
            </li>
            <li class="nav-item">
            <span class="fa fa-file-alt"style="display:inline-block"></span>
                <a class="nav-link" href="{{url('/admincourses')}}"style="display:inline-block">Reports Details</a>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="content">
        <div class="container">
        <h2 class="mb-4">Dashboard Overview</h2>
        <!-- Stats Cards -->
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card shadow-sm border-0 bg-white">
                    <div class="card-body d-flex align-items-center">
                        <i class="bi bi-people-fill fs-2 text-primary me-3"></i>
                        <div>
                            <h6 class="mb-0 total">Total Students</h6>
                            <h4>{{ $studentCount ?? 0 }}</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm border-0 bg-white">
                    <div class="card-body d-flex align-items-center">
                        <i class="bi bi-person-video3 fs-2 text-success me-3"></i>
                        <div>
                            <h6 class="mb-0 total">Total Teachers</h6>
                            <h4>{{ $teacherCount ?? 0 }}</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm border-0 bg-white">
                    <div class="card-body d-flex align-items-center">
                        <i class="bi bi-book fs-2 text-warning me-3"></i>
                        <div>
                            <h6 class="mb-0 total">Total Courses</h6>
                            <h4>{{ $courseCount ?? 0 }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Chart + Table -->
        <div class="row sec">
    <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Student Details</h5>
        <p class="card-text">Admin Manage Students Details...</p>
        <a href="#" class="btn btn-primary click">Click</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Teacher Details</h5>
        <p class="card-text">Admin Manage Teachers Details...</p>
        <a href="#" class="btn btn-primary click">Click</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Courses Details</h5>
        <p class="card-text">Admin Manage Courses Details...</p>
        <a href="#" class="btn btn-primary click">Click</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Fees Details</h5>
        <p class="card-text">Admin Manage Fees Details...</p>
        <a href="#" class="btn btn-primary click">Click</a>
      </div>
    </div>
  </div>
</div>
        </div>
    </div>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<!-- Sidebar Toggle Script -->
    <script>
        const sidebar = document.getElementById('sidebar');
        const toggleButton = document.querySelector('.navbar-toggler');
        
        toggleButton.addEventListener('click', () => {
            sidebar.classList.toggle('active');
        });
    </script>
    <script>
    document.getElementById('logoutButton').addEventListener('click', function() {
        window.location.href = '/logout'; // Redirect to your logout route
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
