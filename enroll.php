<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo/crtlogo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/enroll.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>About | CRT Cabanatuan</title>
</head>
<body>
    <header id="header">
        <nav>
            <div class="org">
                <a href="index.php"><img src="img/logo/crtlogo.png" alt="" id="crtLogo"></a>
                <div id="headerText">
                    <h1 id="orgName">CRT CABANATUAN</h1>
                    <p id="crtEmail"><i class="fa-solid fa-envelope">&nbsp;</i>crt.cabanatuan@gmail.com</p>
                </div>
                <div class="ul" id="ul">
                <ul>
                        <li><a href="index.php" class="active">Home</a></li>
                        <li><a href="about.php" class="links">About CRT</a></li>
                        <li class="dropdown">
                            <a href="enroll.php" class="links">Admission</a>
                            <ul class="dropdown-menu">
                                <li><a href="forms/bsit.php" class="links">BS in Information Technology</a></li>
                                <li><a href="forms/bshm.php" class="links">BS in Hospitality Management</a></li>
                                <li><a href="forms/bsais.php" class="links">BS in Accounting Information System</a></li>
                                <li><a href="forms/bstm.php" class="links">BS in Tourism Management</a></li>
                                <li><a href="forms/btvte.php" class="links">Bachelor of Technical Vocational Teacher Education</a></li>
                            </ul>
                        </li>
                        <li><a href="courseoffered.php" class="links">Courses Offered</a></li>
                        <li><a href="#" class="links">News</a></li>
                        <li><a href="contact.php" class="links">Contact Us</a></li>
                        <li class="dropdown">
                            <a href="#" class="links">Account</a>
                            <ul class="dropdown-menu">
                                <li><a href="student-login-form.php" class="links">Student Login</a></li>
                                <li><a href="#" class="links">Intructor Login</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div id="menuBar">
                    <button id="menuBtn" onclick="showSidebar()"><i class="fa-solid fa-bars"></i></button>
                </div>
            </div>
        </nav>
    </header>
    
    <div class="sidebar">
        <ul>
            <div id="sidebarLogo">
                <a href="index.php"><img src="img/logo/crtlogo.png" id="sidebarLogo"></a>
                <div id="sidebarText">
                    <h1 id="orgName">CRT CABANATUAN</h1>
                    <p id="crtEmail">crt.cabanatuan@gmail.com</p>
                </div>
            </div>
            <div class="li">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About CRT</a></li>
                <li><a href="enroll.php">Admission</a></li>
                <li><a href="courseoffered.php">Course Offered</a></li>
                <li><a href="">News</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li>
                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" id="dropDownBtn">
                        Account
                    </button>
                    <ul class="dropdown-menu" id="sideBarDropdown">
                        <li><a class="dropdown-item" href="student-login-form.php" style="font-size: 15px;">Student Login</a></li>
                        <li><a class="dropdown-item" href="#" style="font-size: 15px;">Instructor Login</a></li>
                    </ul>
                    </div>
                </li>
            </div>
        </ul>
    </div>

    <div class="enroll-container">
        <div class="course-card-container">
            <div class="course-card">
                <div class="title">
                    <h2>BSIT</h2>
                </div>
                <p>BS in Information Technology</p>
                <button class="enroll-button" onclick="bsit()"><i class="fas fa-book"></i>Enroll Now</button>
            </div>
            <div class="course-card">
                <div class="title">
                    <h2>BSHM</h2>
                </div>
                <p>BS in Hospitality Management</p>
                <button class="enroll-button" onclick="bshm()"><i class="fas fa-book"></i>Enroll Now</button>
            </div>
            <div class="course-card">
                <div class="title">
                    <h2>BSAIS</h2>
                </div>
                <p>BS in Accounting Information System</p>
                <button class="enroll-button" onclick="bsais()"><i class="fas fa-book"></i>Enroll Now</button>
            </div>
            <div class="course-card">
                <div class="title">
                    <h2>BSTM</h2>
                </div>
                <p>BS in Tourism Management</p>
                <button class="enroll-button" onclick="bstm()"><i class="fas fa-book"></i>Enroll Now</button>
            </div>
            <div class="course-card">
                <div class="title">
                    <h2>BTVTE</h2>
                </div>
                <p>Bachelor of Technical Vocational Teacher Education</p>
                <button class="enroll-button" onclick="btvte()"><i class="fas fa-book"></i>Enroll Now</button>
            </div>
        </div>
    </div>

    <section id="footer">
        <footer>
            <div class="mission">
                <h4>Our Mission</h4>
                <h5 id="mission">The College for Research & Technology of Cabanatuan is a nurturing community devoted in providing accessible and affordable technological education by being a catalyst of innovation in the promotion of holistic development to empower individuals discovers their true worth and become productive members of the society.</h5>
            </div>
            <div class="contact-us">
                <h4>Contact Us</h4>
                <p><i class="fa-solid fa-phone">&nbsp;</i>(044) 463-2735</p>
                <p><i class="fa-solid fa-envelope">&nbsp;</i>crt.cabanatuan@gmail.com</p>
            </div>
            <div class="subscribe">
                <form action="">
                    <p id="subscribe">Subscribe to News</p>
                    <div class="input">
                        <input type="email" placeholder="Input your email here">
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </footer>
    <div class="copyright">
            <p id="copyright">&copy; 2024 College for Research and Technology. All rights reserved.</p>
        </div>
    </section>

<script type="text/javascript" src="js/redirect.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>