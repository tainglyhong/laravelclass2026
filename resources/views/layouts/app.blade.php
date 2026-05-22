<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Apple Product Landing Page</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: #f5f5f7;
            color: #1d1d1f;
        }

        /* Navbar */
        nav {
            background: #ffffff;
            padding: 18px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .logo {
            font-size: 28px;
            font-weight: 700;
        }

        .logo span {
            color: #0071e3;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 30px;
        }

        nav ul li a {
            text-decoration: none;
            color: #1d1d1f;
            font-weight: 500;
            transition: 0.3s;
        }

        nav ul li a:hover {
            color: #0071e3;
        }

        /* Hero Section */
        .hero {
            min-height: 90vh;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 60px 8%;
            gap: 40px;
            flex-wrap: wrap;
        }

        .hero-text {
            flex: 1;
            min-width: 300px;
        }

        .hero-text h1 {
            font-size: 64px;
            line-height: 1.1;
            margin-bottom: 20px;
        }

        .hero-text h1 span {
            color: #0071e3;
        }

        .hero-text p {
            font-size: 18px;
            color: #555;
            margin-bottom: 30px;
            line-height: 1.8;
        }

        .btn-group {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .btn {
            padding: 14px 28px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-primary {
            background: #0071e3;
            color: white;
        }

        .btn-primary:hover {
            background: #005bb5;
        }

        .btn-secondary {
            border: 2px solid #0071e3;
            color: #0071e3;
        }

        .btn-secondary:hover {
            background: #0071e3;
            color: white;
        }

        .hero-image {
            flex: 1;
            text-align: center;
            min-width: 300px;
        }

        .hero-image img {
            width: 100%;
            max-width: 500px;
            filter: drop-shadow(0 20px 30px rgba(0, 0, 0, 0.2));
        }

        /* Features */
        .features {
            padding: 80px 8%;
            background: white;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title h2 {
            font-size: 42px;
            margin-bottom: 10px;
        }

        .section-title p {
            color: #666;
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
        }

        .feature-card {
            background: #f5f5f7;
            padding: 30px;
            border-radius: 20px;
            transition: 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-8px);
        }

        .feature-card h3 {
            margin-bottom: 15px;
            font-size: 24px;
        }

        .feature-card p {
            color: #666;
            line-height: 1.7;
        }

        /* Product Section */
        .products {
            padding: 80px 8%;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .product-card {
            background: white;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: 0.3s;
        }

        .product-card:hover {
            transform: translateY(-10px);
        }

        .product-card img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        .product-info {
            padding: 25px;
        }

        .product-info h3 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        .product-info p {
            color: #666;
            line-height: 1.7;
            margin-bottom: 20px;
        }

        .price {
            font-size: 24px;
            font-weight: 700;
            color: #0071e3;
            margin-bottom: 20px;
        }

        /* Footer */
        footer {
            background: #111;
            color: white;
            text-align: center;
            padding: 30px;
            margin-top: 60px;
        }

        @media(max-width:768px) {

            .hero {
                text-align: center;
            }

            .hero-text h1 {
                font-size: 42px;
            }

            nav {
                flex-direction: column;
                gap: 15px;
            }

            nav ul {
                gap: 15px;
                flex-wrap: wrap;
                justify-content: center;
            }

            .btn-group {
                justify-content: center;
            }
        }
    </style>
</head>

<body>

    @include('components.nav')

    @yield('main')

    @include('components.footer')

    <!-- Bootstrap JS (Optional but good to have) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>