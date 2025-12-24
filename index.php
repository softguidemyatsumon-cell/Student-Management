<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <title>Responsive Navbar</title>

    <style>
        /* Responsive image fix */
        .home img {
            height: 100vh;
            object-fit: cover;
        }

        @media (max-width: 768px) {
            .home img {
                height: auto;
            }
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
        <a class="navbar-brand fw-bold fs-4 fs-lg-1 text-warning">
            MY FIRST WEB PAGE
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 text-center">
                <li class="nav-item pe-lg-4">
                    <a class="nav-link fw-bold" href="#">Home</a>
                </li>
                <li class="nav-item pe-lg-4">
                    <a class="nav-link fw-bold" href="#">Course</a>
                </li>
                <li class="nav-item pe-lg-4">
                    <a class="nav-link fw-bold" href="#">About</a>
                </li>
                <li class="nav-item pe-lg-4">
                    <a class="nav-link fw-bold" href="#">Contact</a>
                </li>
            </ul>

            <div class="d-flex justify-content-center mt-3 mt-lg-0">
                <a href="login.php"><i class="fa-solid fa-user fs-4 text-warning btn"></i></a>
                
            </div>

        </div>
    </div>
</nav>

<img src="./images/head.png" class="img-fluid" alt="...">

<!-- <section class="home">
    <img src="./images/light.png" class="img-fluid w-100" alt="">
</section> -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
