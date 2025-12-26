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

    <title>Responsive Navbar</title>

    <style>
        /* Responsive image fix */
        /* .home img {
            height: 100vh;
            object-fit: cover;
        } */

       
    </style>
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
                            <a class="nav-link fw-bold" href="#home">Home</a>
                        </li>
                        <li class="nav-item pe-lg-4">
                            <a class="nav-link fw-bold" href="#course">Course</a>
                        </li>
                        <li class="nav-item pe-lg-4">
                            <a class="nav-link fw-bold" href="#about">About</a>
                        </li>
                        <li class="nav-item pe-lg-4">
                            <a class="nav-link fw-bold" href="#contact">Contact</a>
                        </li>
                    </ul>

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

        <!-- home image -->
    <section id="home">
        <div class="container-fluid p-0 mb-5">
            <img src="./images/classroom.jpg" class="img-fluid w-100" alt="Student System" style="height: 90vh; object-fit: cover;">
        </div>
    </section>
        <!-- course title -->
    <section>
        <div class="container d-flex justify-content-center">
            <div class="row mb-5">
                <h1 style="font-family:serif;  font-weight: bold;">OUR COURSES</h1>
            </div>
        </div>
    </section>
    <!-- course -->
    <section id="course">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="card shadow-lg" style="width: 18rem;">
                        <img src="./images/gpt1.png" class="card-img-top" alt="Course Image">
                        <div class="card-body">
                            <h5 class="card-title">Web Development</h5>
                            <p class="card-text">
                            Learn HTML, CSS, Bootstrap, and JavaScript from scratch.
                            </p>
                            <a href="#" class="btn btn-success">Enroll Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="card shadow-lg" style="width: 18rem;">
                        <img src="./images/gpt1.png" class="card-img-top" alt="Course Image">
                        <div class="card-body">
                            <h5 class="card-title">Web Development</h5>
                            <p class="card-text">
                            Learn HTML, CSS, Bootstrap, and JavaScript from scratch.
                            </p>
                            <a href="#" class="btn btn-success">Enroll Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card shadow-lg" style="width: 18rem;">
                        <img src="./images/gpt1.png" class="card-img-top" alt="Course Image">
                        <div class="card-body">
                            <h5 class="card-title">Web Development</h5>
                            <p class="card-text">
                            Learn HTML, CSS, Bootstrap, and JavaScript from scratch.
                            </p>
                            <a href="#" class="btn btn-success">Enroll Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about title -->
    <section>
        <div class="container d-flex justify-content-center">
            <div class="row mb-5 mt-5">
                <h1 style="font-family:serif;  font-weight: bold;">ABOUT US</h1>
            </div>
        </div>
    </section>
    <!-- about -->
    <section id="about">
        <div class="container">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, quibusdam atque? Accusantium molestiae quod, ipsa exercitationem eum asperiores ex dolores provident amet omnis nulla repellat, porro voluptates iusto ad. Temporibus neque aperiam laboriosam reprehenderit quibusdam ipsam sequi aliquam quo provident hic tempora a exercitationem assumenda soluta sapiente nulla enim nihil necessitatibus minus, et aliquid explicabo? Velit incidunt saepe fugit, qui aperiam laborum, voluptatum minus, cupiditate doloremque ducimus quod sapiente sequi commodi? Accusamus ad quo maxime numquam sit architecto, porro repellendus aliquam, distinctio cupiditate blanditiis? Quisquam, eos unde. Doloribus ratione at iure, voluptas beatae harum itaque quis, molestiae dolores perspiciatis eos!</p>
        </div>
    </section>
    <!-- contact title -->
    <!-- <section>
        <div class="container d-flex justify-content-center">
            <div class="row mb-5 mt-5">
                <h1 style="font-family:serif;  font-weight: bold;">CONTACT US</h1>
            </div>
        </div>
    </section> -->
    <!-- contact -->
   <section id="contact" class="py-5">
  <div class="container">
     <h1 style="font-family:serif;  font-weight: bold; text-align:center">CONTACT US</h1>
    <p class="text-center mb-5">Have questions or feedback? Reach out to us!</p>
    
    <div class="row justify-content-center">
      <!-- Contact Form -->
      <div class="col-md-6">
        <div class="card shadow-sm">
          <div class="card-body">
            <form>
              <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
              </div>
              
              <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
              </div>
              
              <div class="mb-3">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" placeholder="Subject" required>
              </div>
              
              <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" rows="4" placeholder="Write your message" required></textarea>
              </div>
              
              <button type="submit" class="btn btn-primary w-100">Send Message</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Contact Info -->
      <div class="col-md-4 mt-4 mt-md-0">
        <div class="p-4 bg-white shadow-sm rounded">
          <h5>Get in Touch</h5>
          <p><strong>Address:</strong> 123 Student Road, College City</p>
          <p><strong>Phone:</strong> +1 234 567 890</p>
          <p><strong>Email:</strong> info@student-system.com</p>
          <div class="mt-3">
            <a href="#" class="btn btn-outline-primary btn-sm me-2">Facebook</a>
            <a href="#" class="btn btn-outline-info btn-sm me-2">Twitter</a>
            <a href="#" class="btn btn-outline-danger btn-sm">Instagram</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    <!-- footer -->
    <footer>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function scrollToSection(id) {
            document.getElementById(id).scrollIntoView({ behavior: 'smooth' });
        }
    </script>

</body>
</html>
