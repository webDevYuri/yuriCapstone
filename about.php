<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo/crtlogo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/about.css">
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
    <div class="slide-show">
        <img src="img/welcomeImage.webp" alt="">
        <img src="img/white.svg" alt="" id="arrowWhite">
        <div class="page-on">
            <h1 id="pageOn">ABOUT</h1>
            <p id="pageOnText">College for Research and Technology</p>
        </div>
    </div>
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
                <li><a href="courseoffered.php">Courses Offered</a></li>
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

    <div class="who-is-crt">
        <div class="title">
            <i class="fa-regular fa-heart" id="heart"></i>
            <h1 id="whoisCrt">Who is CRT?</h1>
        </div>
        <div class="crt-building">
            <div class="img">
                <img src="img/who-is-crt.webp" alt="">
            </div>
            <div class="mv">
                <div class="v">
                    <h4>Vision</h4>
                    <blockquote>To be recognized and respected as one of the premier members of the academic community that provides excellence in technological education.</blockquote>
                </div>
                <div class="m">
                    <h4>Mission</h4>
                    <blockquote>The College for Research & Technology of Cabanatuan is a nurturing community devoted in providing accessible and affordable technological education by being a catalyst of innovation in the promotion of holistic development to empower individuals discovers their true worth and become productive members of the society.</blockquote>
                </div>
            </div>
        </div>
    </div>

    <div class="crt-now-then">
    <div class="title">
            <h1 id="crtNowThen">CRT Now and Then</h1>
            <blockquote>
                The College for Research and Technology of Cabanatuan (CRT) started as a computer school and has been known to be the first computer school in Nueva Ecija. It pioneered in applying a different approach in education like embedding competency courses to baccalaureate course that even the more established colleges and universities followed. After the main campus was established in 1988 at Cabanatuan City, a strategic plan was laid-out by its president, Dr. Reynato C. Arimbuyutan to establish campuses in all of the four districts of Nueva Ecija. In this way, it was envisioned to contend with the growing desire of students to study in their places of abode but with the quality of education comparable to its main campus. The first Branch established after its Main Campus was the Gapan Branch which opened in 1997. Currently, it is located at Abad Santos Street, Barangay Santo Nino, Gapan City with the hope that the college-owned campus will be built on its lot along Maharlika Highway, Bayanihan, Gapan City in the near future. After three years Guimba Campus was built, located at Parairo St., Saranay Dist., Guimba, Nueva Ecija and followed by San Jose Campus located at Sanchez St., San Jose City. The Gapan, Guimba and San Jose branches are Extension Campuses of the Main Branch that offers two years Technical Courses preparatory to a degree course applying the ladderized education approach. TechVoc courses are embedded in all of its curricular courses. This system had been institutionalized by CHED and TESDA to produce more skilled students and increase the chance for employment of graduates. Presently, CRT had been given by the Department of Education permit to operate the Senior High School in all of its branches. Its expertise in TechVoc education for the past two decades had been considered. In this instance, CRT had been given permits and recognition of the trifocalized system of education in the Philippines: CHED, TESDA and DepEd. The last four years had been a tremendous moment for the college with the completion of three additional buildings in Guimba, San Jose and Cabanatuan and the Gymnasium in Gapan. Winning back to back Championship in Cheerdance Competition at the Nueva Ecija Collegiate Students League (NECSL), Championship at NECSL Women Volleyball Competition, the provincial Step-Up Dance Competition championship, and many more representing the best of a true Crtian. Also, the college witnessed the first batch of BTTE graduates who passed the Licensure Examination for Teachers (LET). All the baccalaureate degrees offered by the college: B.S. in Information Technology, B.S. in Hotel and Restaurant Management, B.S. in Tourism Management, B.S. in Accounting Technology, and Bachelor in Technical Teacher Education had been recognized by the Commission on Higher Education (CHED). Scholarships, the quality of education and the everimproving facilities provided by the college had been the main reason why CRT continuously grow and develop.
            </blockquote>
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

<script type="text/javascript" src="js/script.js"></script>
</body>
</html>