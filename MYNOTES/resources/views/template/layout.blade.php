<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Notes</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/app.css">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }


        .hero {
            height: 10vh;
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
            position: relative;
            overflow: hidden;
        }

            .hero::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.5);
            }

            .hero h1 {
                font-size: 2.5rem;
                margin-left: 45%;
                z-index: 1;
            }

            .hero .btn-custom {
                margin-top: 20px;
                background-color: #ff6f61;
                color: white;
                border: none;
                border-radius: 30px;
                margin-bottom: 15px;
                padding: 10px 30px;
                font-size: 1.1rem;
                text-transform: uppercase;
                transition: background-color 0.3s, transform 0.3s;
                z-index: 1;
            }

                .hero .btn-custom:hover {
                    background-color: #e55d50;
                    transform: scale(1.05);
                }

        .navbar {
            background-color: #343a40;
            color: white;
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: 250px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
        }

            .navbar h2 {
                color: #ff6f61;
                margin-bottom: 20px;
            }

            .navbar .nav-links {
                flex: 1;
            }

                .navbar .nav-links a {
                    color: #ffffff;
                    text-decoration: none;
                    font-size: 1.1rem;
                    display: flex;
                    align-items: center;
                    padding: 10px;
                    border-radius: 5px;
                    transition: background-color 0.3s, color 0.3s;
                }

                    .navbar .nav-links a:hover {
                        background-color: #495057;
                        color: #ff6f61;
                    }

                    .navbar .nav-links a i {
                        margin-right: 10px;
                    }

        .main-content {
            margin-left: 300px;
            padding: 20px;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

            .card:hover {
                transform: translateY(-5px);
                box-shadow: 0 6px 15px rgba(0,0,0,0.2);
            }

        .card-header {
            background-color: #ff6f61;
            color: white;
            border-bottom: none;
            padding: 15px;
        }

        .card-body {
            padding: 20px;
        }

        .footer {
            background-color: #343a40;
            color: white;
            padding: 20px;
            text-align: center;
            border-top: 2px solid #495057;
        }

            .footer p {
                margin: 0;
            }

        /* Font Icons */

    </style>
</head>
<body>
    <header class="hero">
        <h1>This Is My Notes</h1>
        <a class="btn btn-custom" href="{{route('logout')}}">Logout</a>
    </header>
    <nav class="navbar">
        <h2>MyNotes</h2>
        <div class="nav-links">
            <a href="https://localhost:44352/My/Index"><i class="fas fa-home"></i> Home</a>
            <a href="https://localhost:44352/My/About"><i class="fas fa-info-circle"></i> About</a>
            <a href="https://localhost:44352/My/ContactUs"><i class="fas fa-envelope"></i> Contact Us</a>
        </div>
        <footer class="footer">
            <p>&copy; 2024 MySite. All rights reserved.</p>
        </footer>
    </nav>
    <main class="main-content">
        @yield('content')
        <!-- Example Card Component -->
        <div class="card mb-4">
            <div class="card-body">
            </div>
        </div>
    </main>

    <!-- Bootstrap JS Bundle (including Popper) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>


