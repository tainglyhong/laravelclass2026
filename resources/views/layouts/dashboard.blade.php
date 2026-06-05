<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body {
            background-color: #f4f6f9;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #0b1f3a;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 20px;
        }

        .sidebar h3 {
            color: white;
            text-align: center;
            margin-bottom: 30px;
            font-weight: bold;
        }

        .sidebar a {
            display: block;
            color: white;
            padding: 15px 20px;
            text-decoration: none;
            transition: 0.3s;
        }

        .sidebar a:hover {
            background-color: #16345f;
        }

        .sidebar i {
            margin-right: 10px;
        }

        .main-content {
            margin-left: 250px;
            padding: 20px;
        }

        .top-navbar {
            background-color: white;
            padding: 15px 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .dashboard-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            transition: 0.3s;
        }

        .dashboard-card:hover {
            transform: translateY(-5px);
        }

        .card-icon {
            font-size: 40px;
            color: #0b1f3a;
        }

        .card-title {
            color: #0b1f3a;
            font-weight: bold;
        }

        .card-text {
            font-size: 28px;
            font-weight: bold;
        }
    </style>
</head>

<body>

    @include('components.sidebar')


    <!-- Main Content -->
    @yield('main')
    

</body>

</html>