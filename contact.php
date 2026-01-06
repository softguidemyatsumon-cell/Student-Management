<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- google font -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

    <title>Student System</title>

</head>

<body>
    <!-- header -->
    <header >
        <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
            <div class="container">
                <a class="navbar-brand fw-bold fs-4 fs-lg-1 text-warning">STUDENT SYSTEM WEB PAGE</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0 text-center">
                        <li class="nav-item pe-lg-4">
                            <a class="nav-link fw-bold" href="index.php">Home</a>
                        </li>
                         <li class="nav-item pe-lg-4">
                            <a class="nav-link fw-bold" href="class.php">Class</a>
                        </li>
                        <li class="nav-item pe-lg-4">
                            <a class="nav-link fw-bold" href="course.php">Course</a>
                        </li>
                       
                        <li class="nav-item pe-lg-4">
                            <a class="nav-link fw-bold active" href="contact.php">Contact</a>
                        </li>
                    </ul>
                     <div class="d-flex justify-content-center mt-3 mt-lg-0">
                        <a href="register.php" class="text-decoration-none">
                            <span class="fs-6 text-warning ">Register</span>
                            <i class="fa-solid fa-user fs-6 text-warning btn"></i>
                        </a>
                    </div>
                    <div class="d-flex justify-content-center mt-3 mt-lg-0">
                        <a href="login.php" class="text-decoration-none">
                            <span class="fs-6 text-warning ">Login</span>
                            <i class="fa-solid fa-user fs-6 text-warning btn"></i>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
  
    <!-- contact  -->
   <section id="contact" class="py-5">
  <div class="container">       
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="container my-5">
                <h3 class="mb-4">Get in Touch</h3>

                    <form>                      
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                        
                        <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Address">
                        </div>

                        <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Email">
                        </div>

                        <div class="mb-3">
                        <input type="tel" class="form-control" placeholder="Phone">
                        </div>

                        <div class="mb-4">
                        <textarea class="form-control" rows="5" placeholder="Message....."></textarea>
                        </div>

                        <button type="submit" class="btn btn-success w-100 py-2">
                        Send Message
                        </button>
                    </form>
            </div>

        </div>
    <!-- Contact Info -->
      <div class="col-md-6 mt-5 mt-md-0">
        <div class="container my-5 ">

            <iframe src="https://www.google.com/maps/place/575b+Pyay+Rd,+Yangon,+Myanmar+(Burma)/@16.829347,96.1301832,18z/data=!4m15!1m8!3m7!1s0x30c194b7d6dda76b:0x112e9f151bd16bda!2s575b+Pyay+Rd,+Yangon,+Myanmar+(Burma)!3b1!8m2!3d16.8304176!4d96.1317013!16s%2Fg%2F11lly779ww!3m5!1s0x30c194b7d6dda76b:0x112e9f151bd16bda!8m2!3d16.8304176!4d96.1317013!16s%2Fg%2F11lly779ww?authuser=0&entry=ttu&g_ep=EgoyMDI1MTIwOS4wIKXMDSoKLDEwMDc5MjA2OUgBUAM%3D" style="border:0; width:500px; height:300px" loading="lazy"></iframe>
            <p><strong>Address:</strong>No.(575), Pyay Road, Kamayut Township, Yangon Myanmar.</p>
            <p><strong>Phone:</strong> +1 234 567 890</p>
            <p><strong>Email:</strong> info@student-system.com</p>
          <!-- <h5 class="mb-4">Get in Touch</h5> -->
          <!-- <p><strong>Address:</strong>No.(575), Pyay Road, Kamayut.</p>
          <p><strong>Phone:</strong> +1 234 567 890</p>
          <p><strong>Email:</strong> info@student-system.com</p>
          <div class="mt-3">
            <a href="#" class="btn btn-outline-primary btn-sm me-2">Facebook</a>
            <a href="#" class="btn btn-outline-info btn-sm me-2">Twitter</a>
            <a href="#" class="btn btn-outline-danger btn-sm">Instagram</a>
          </div> -->
        </div>
      </div>
    </div>
  </div>
</section> 

    <!--footer -->
    <footer class="mt-5 pt-lg-5">
                <div class="container-fluid bg-success">
                      <div class="container">
            <div class="row pt-5">
                <div class="col-lg-4 md-12 mb-4">
                    <h5 class="text-warning mb-4">STUDENT SYSTEM</h5>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum quibusdam vel quo commodi sunt.</p>
                    
                </div>
                <div class="col-lg-4 md-12 mb-4">
                    <h5 class="text-warning mb-4">USEFUL LINKS</h5>
                    <p>
                        <a href="index.php" class="text-reset  text-decoration-none">Home</a>
                    </p>
                    <p>
                        <a href="#about" class="text-reset  text-decoration-none">About</a>
                    </p>
                    <p>
                        <a href="#contact" class="text-reset text-decoration-none">Contact</a>
                    </p>
                </div>
                <div class="col-lg-4 md-12 mb-4">
                    <h5 class="text-warning mb-4">CONTACT</h5>
                    <p>
                        <i class="fa-solid fa-house me-2"></i>
                        <span class="me-5">No.(575), Pyay Road, Kamayut Township,  </span>
                        <span>Yangon Myanmar.</span>
                    </p>
                    <p>
                        <i class="fa-solid fa-envelope  me-2"></i>
                        <span>student.hr@gmail.com</span>
                    </p>
                    <p>
                        <i class="fa-solid fa-phone  me-2"></i>
                        <span>+959 789321675</span>
                    </p>
                </div>
            </div>
        </div>

         <!-- <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <h6 class="text-center" style="font-family: 'Mountains of Christmas', serif; font-weight: 700;font-style: normal;">@2025 Student System. All right reserved.</h6>
            </div>
        </div> -->

    </div>
       
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
