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


     <style>
/* Make images transition smoothly */
.card-img-top {
    transition: opacity 0.3s ease;
}

/* Hover effect */
.card-img-top:hover {
    opacity: 0.3;
}
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
                            <a class="nav-link fw-bold" href="index.php">Home</a>
                        </li>
                         <li class="nav-item pe-lg-4">
                            <a class="nav-link fw-bold" href="class.php">Class</a>
                        </li>
                        <li class="nav-item pe-lg-4">
                            <a class="nav-link fw-bold active" href="course.php">Course</a>
                        </li>
                       
                        <li class="nav-item pe-lg-4">
                            <a class="nav-link fw-bold" href="contact.php">Contact</a>
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

    <!-- web course title -->
    <section class="pt-5">
        <div class="container d-flex justify-content-center">
            <div class="row mb-5 mt-5">
                <h1 style="font-family:serif;  font-weight: bold; color:green;">Web Development</h1>
            </div>
        </div>
    </section>
    <!-- web course -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 md-12 mb-5">
                    <div style="width: 18rem;">
                        <img src="./images/html.avif" class="card-img-top" alt="Course Image" style="height: 200px;">                        
                            <h5 class="ms-2 mt-2">HTML</h5>    
                            <p>HTML (HyperText Markup Language) is the standard language used to create and structure web pages on the internet. 
                            </p>    
                    </div>
                </div>

                <div class="col-lg-4 md-12 mb-5">
                     <div class="col-lg-4 md-12 mb-5">
                        <div style="width: 18rem;">
                            <img src="./images/css.png" class="card-img-top" alt="Course Image" style="height: 200px;">                        
                                <h5 class="ms-2 mt-2">CSS</h5>    
                                <p>CSS (Cascading Style Sheets) is a styling language used to control the appearance and layout of web pages written in HTML. 
                                </p>    
                        </div>
                </div>
                </div>
                <div class="col-lg-4 md-12 mb-5">
                    <div class="col-lg-4 md-12 mb-5">
                    <div style="width: 18rem;">
                        <img src="./images/bootstrap.jpg" class="card-img-top" alt="Course Image" style="height: 200px;">                        
                            <h5 class="ms-2 mt-2">Bootstrap</h5>    
                            <p>Bootstrap is a popular front-end framework that helps developers quickly design responsive and mobile-first websites. 
                            </p>    
                    </div>
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 md-12 mb-5">
                    <div style="width: 18rem;">
                        <img src="./images/javascript-1.png" class="card-img-top" alt="Course Image" style="height: 200px;">                        
                            <h5 class="ms-2 mt-2">Javascript</h5>    
                            <p>JavaScript is a programming language used to make web pages interactive and dynamic. 
                            </p>    
                    </div>
                </div>

                     <div class="col-lg-4 md-12 mb-5">
                        <div style="width: 18rem;">
                            <img src="./images/jquery.jpg" class="card-img-top" alt="Course Image" style="height: 200px;">                        
                                <h5 class="ms-2 mt-2">jQuery</h5>    
                                <p>jQuery is a fast, lightweight JavaScript library designed to simplify common programming tasks. 
                                </p>    
                        </div>
                </div>
                    <div class="col-lg-4 md-12 mb-5">
                    <div style="width: 18rem;">
                        <img src="./images/php.png" class="card-img-top" alt="Course Image" style="height: 200px;">                        
                            <h5 class="ms-2 mt-2">PHP</h5>    
                            <p>PHP (Hypertext Preprocessor) is a server-side scripting language used to develop dynamic websites and web applications.
                            </p>    
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 md-12 mb-5">
                    <div style="width: 18rem;">
                        <img src="./images/laravel.avif" class="card-img-top" alt="Course Image" style="height: 200px;">                        
                            <h5 class="ms-2 mt-2">Laravel</h5>    
                            <p>Laravel is a free, open-source PHP web application framework designed to make web development faster, easier, and more organized.
                            </p>    
                    </div>
                </div>           
                
            </div>
        </div>
    </section>


       <!-- office course title -->
    <section class="pt-1">
        <div class="container d-flex justify-content-center">
            <div class="row mb-5 mt-5">
                <h1 style="font-family:serif;  font-weight: bold; color:green;">Microsoft Office</h1>
            </div>
        </div>
    </section>
    <!-- office course -->
    <section>
        <div class="container">
            <div class="row">
                    <div class="col-lg-4 md-12 mb-5">
                        <div style="width: 18rem;">
                            <img src="./images/Word.jpg" class="card-img-top" alt="Course Image" style="height: 200px;">                        
                                <h5 class="ms-2 mt-2">Microsoft Word</h5>    
                                <p>Microsoft Word is a word processing software developed by Microsoft that is used to create, edit, format, and print text-based documents.
                                </p>    
                        </div>
                    </div>                
                    <div class="col-lg-4 md-12 mb-5">
                    <div style="width: 18rem;">
                        <img src="./images/excel.jpg" class="card-img-top" alt="Course Image" style="height: 200px;">                        
                            <h5 class="ms-2 mt-2">Microsoft Excel</h5>    
                            <p>Microsoft Excel is a spreadsheet application developed by Microsoft that is used to organize, calculate, and analyze data in rows and columns. 
                            </p>    
                    </div>
                </div>
                     <div class="col-lg-4 md-12 mb-5">
                    <div style="width: 18rem;">
                        <img src="./images/powerpoint.jpg" class="card-img-top" alt="Course Image" style="height: 200px;">                        
                            <h5 class="ms-2 mt-2">Microsoft Powerpoint</h5>    
                            <p>Microsoft PowerPoint is a presentation software developed by Microsoft that is used to create visual slide-based presentations. 
                            </p>    
                    </div>
                </div>
            </div>
        </div>
    </section>


       <!-- programming course title -->
    <section class="pt-1">
        <div class="container d-flex justify-content-center">
            <div class="row mb-5 mt-5">
                <h1 style="font-family:serif;  font-weight: bold; color:green;">Programming</h1>
            </div>
        </div>
    </section>
    <!-- programming course -->
    <section>
        <div class="container">
            <div class="row">
                 <div class="col-lg-4 md-12 mb-5">
                    <div style="width: 18rem;">
                        <img src="./images/c++.png" class="card-img-top" alt="Course Image" style="height: 200px;">                        
                            <h5 class="ms-2 mt-2">C++</h5>    
                            <p>Microsoft PowerPoint is a presentation software developed by Microsoft that is used to create visual slide-based presentations. 
                            </p>    
                    </div>
                </div>

                <div class="col-lg-4 md-12 mb-5">
                    <div style="width: 18rem;">
                        <img src="./images/c.png" class="card-img-top" alt="Course Image" style="height: 200px;">                        
                            <h5 class="ms-2 mt-2">C#</h5>    
                            <p>Microsoft PowerPoint is a presentation software developed by Microsoft that is used to create visual slide-based presentations. 
                            </p>    
                    </div>
                </div>
                <div class="col-lg-4 md-12 mb-5">
                    <div style="width: 18rem;">
                        <img src="./images/java.avif" class="card-img-top" alt="Course Image" style="height: 200px;">                        
                            <h5 class="ms-2 mt-2">Java</h5>    
                            <p>Microsoft PowerPoint is a presentation software developed by Microsoft that is used to create visual slide-based presentations. 
                            </p>    
                    </div>
                </div>
            </div>
            <div class="row">
                  <div class="col-lg-4 md-12 mb-5">
                    <div style="width: 18rem;">
                        <img src="./images/python.avif" class="card-img-top" alt="Course Image" style="height: 200px;">                        
                            <h5 class="ms-2 mt-2">Python</h5>    
                            <p>Microsoft PowerPoint is a presentation software developed by Microsoft that is used to create visual slide-based presentations. 
                            </p>    
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
