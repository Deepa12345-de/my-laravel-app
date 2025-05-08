<!-- resources/views/auth.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login & Register Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #007bff, #001f3f);

            color: #fff;
            min-height: 100vh;
        }
        .card {
            border: none;
            border-radius: 20px;
        }
        .form-section {
            display: none;
        }
        .form-section.active {
            display: block;
        }
        .role-select {
            margin-bottom: 1.5rem;
        }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow-lg p-4 bg-white text-dark">
                <h3 class="text-center mb-3">Welcome</h3>
                <p class="text-center text-muted">Choose your action</p>

                <!-- Role Dropdown -->
                <select id="roleSelect" class="form-select role-select">
                    <option value="admin">Admin Login</option>
                    <option value="student_login">Student Login</option>
                    <option value="student_register">Student Registration</option>
                </select>

                <!-- Admin Login -->
                <div id="adminForm" class="form-section active">
                    <form action="{{ route('admin.admindashboard') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required />
                        </div>
                        <div class="mb-3">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required />
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Login as Admin</button>
                    </form>
                </div>

                <!-- Student Login -->
                <div id="studentLoginForm" class="form-section">
                    <form action="/student_login" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required />
                        </div>
                        <div class="mb-3">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required />
                        </div>
                        <button type="submit" class="btn btn-info w-100">Login as Student</button>
                    </form>
                </div>

                <!-- Student Registration -->
                <div id="studentRegisterForm" class="form-section">
                <form method="POST" action="{{ route('student.register') }}">

                        @csrf
                        <div class="mb-3">
                            <label>Full Name</label>
                            <input type="text" name="name" class="form-control" required />
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required />
                        </div>
                        <div class="mb-3">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required />
                        </div>
                        <div class="mb-3">
                            <label>Select Course</label>
                            <select class="form-select" name="course">
                                <option>Web Development</option>
                                <option>Python Programming</option>
                                <option>UI/UX Design</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success w-100">Register as Student</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS & Toggle Script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const roleSelect = document.getElementById('roleSelect');
    const adminForm = document.getElementById('adminForm');
    const studentLoginForm = document.getElementById('studentLoginForm');
    const studentRegisterForm = document.getElementById('studentRegisterForm');

    function toggleForms(role) {
        adminForm.classList.remove('active');
        studentLoginForm.classList.remove('active');
        studentRegisterForm.classList.remove('active');

        if (role === 'admin') adminForm.classList.add('active');
        if (role === 'student_login') studentLoginForm.classList.add('active');
        if (role === 'student_register') studentRegisterForm.classList.add('active');
    }

    roleSelect.addEventListener('change', function () {
        toggleForms(this.value);
    });

    // Initial form show
    toggleForms(roleSelect.value);
</script>

</body>
</html>
