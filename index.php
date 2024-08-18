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
    <title>Home | CRT Cabanatuan</title>
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
                                <li><a href="forms/bsit.php">BS in Information Technology</a></li>
                                <li><a href="forms/bshm.php">BS in Hospitality Management</a></li>
                                <li><a href="forms/bsais.php">BS in Accounting Information System</a></li>
                                <li><a href="forms/bstm.php">BS in Tourism Management</a></li>
                                <li><a href="forms/btvte.php">Bachelor of Technical Vocational Teacher Education</a></li>
                            </ul>
                        </li>
                        <li><a href="courseoffered.php" class="links">Courses Offered</a></li>
                        <li><a href="#" class="links">News</a></li>
                        <li><a href="contact.php" class="links">Contact Us</a></li>
                        <li class="dropdown">
                            <a href="#" class="links">Account</a>
                            <ul class="dropdown-menu">
                                <li><a href="student-login-form.php">Student Login</a></li>
                                <li><a href="#">Intructor Login</a></li>
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
        <img src="img/welcomeImage.webp" alt="" id="homeWelcomeImage">
        <div class="overlay">
            <div class="type-class">
                <h1 id="overlayTitle">EMPOWER YOUR FUTURE</h1>
                <h2 id="overlayText">JOIN A COLLEGE THAT EMPOWER YOUR POTENTIAL!&nbsp;&nbsp;</h2>
                <h3 id="tagline">“Where Learning Leads to Lasting Success”</h3>
            </div>
            <div class="enroll-now-btn">
                <a href="enroll.php" id="enrollBtn">Enroll Now&nbsp;&nbsp;<i class="fa-solid fa-file-pen"></i></a>
            </div>
        </div>
    </div>
    <div class="carousel-container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000" data-bs-pause="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/slides/slideFour.webp" alt="..." class="carousel-image">
                </div>
                <div class="carousel-item">
                    <img src="img/slides/slideOne.webp" alt="..." class="carousel-image">
                </div>
                <div class="carousel-item">
                    <img src="img/slides/slideThree.webp" alt="..." class="carousel-image">
                </div>
                <div class="carousel-item">
                    <img src="img/slides/slideTwo.webp" alt="..." class="carousel-image">
                </div>
                <div class="carousel-item">
                    <img src="img/slides/slideFive.webp" alt="..." class="carousel-image">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <i class="fa-solid fa-chevron-left" id="carouselArrow"></i>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <i class="fa-solid fa-chevron-right" id="carouselArrow"></i>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="career-connects">
            <div class="cc-item">
                <a href="https://crtcareers.seemeconnect.com/">
                    <img src="img/slides/seemecv2.webp" alt="career-connect-image" class="seeme-cv">
                </a>
            </div>
        </div>
    </div>

    <div class="arrow-svg">
        <img src="img/arrow-object-dark.svg" alt="">
    </div>
    <div class="campus-container">
        <div class="campus">
            <img src="img/campus/cab.png" alt="" id="dropdown">
            <div class="campus-text">
                <p><i class="fa-solid fa-building"></i>&nbsp;&nbsp;CRT MAIN</p>
                <p><i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp;Burgos Ave., Cabanatuan City</p>
                <p><i class="fa-solid fa-phone"></i>&nbsp;&nbsp;(044) 463-2735</p>
                <p><i class="fa-solid fa-mobile"></i>&nbsp;&nbsp;0917-652-3284</p>
                <p><i class="fa-solid fa-envelope"></i>&nbsp;&nbsp;crt.cabanatuan@gmail.com</p>
            </div>
        </div>
        <div class="campus">
            <img src="img/campus/delpilar.png" alt="" id="dropdown">
            <div class="campus-text">
                <p><i class="fa-solid fa-building"></i>&nbsp;&nbsp;SHS CABANATUAN</p>
                <p><i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp;Del Pilar St., Cabanatuan City</p>
                <p><i class="fa-solid fa-phone"></i>&nbsp;&nbsp;(044) 940-2029</p>
                <p><i class="fa-solid fa-mobile"></i>&nbsp;&nbsp;0998-980-2398 / 0916-333-6968</p>
                <p><i class="fa-solid fa-envelope"></i>&nbsp;&nbsp;crt.cabanatuan@gmail.com</p>
            </div>
        </div>
        <div class="campus">
            <img src="img/campus/gapan.png" alt="" id="dropdown">
            <div class="campus-text">
                <p><i class="fa-solid fa-building"></i>&nbsp;&nbsp;GAPAN CAMPUS</p>
                <p><i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp;Anamel Village, Brgy. Bayanihan, Gapan City</p>
                <p><i class="fa-solid fa-phone"></i>&nbsp;&nbsp;0926-292-8917</p>
                <p><i class="fa-solid fa-mobile"></i>&nbsp;&nbsp;0926-292-8917</p>
                <p><i class="fa-solid fa-envelope"></i>&nbsp;&nbsp;crtgapancampus@gmail.com</p>
            </div>
        </div>
        <div class="campus">
            <img src="img/campus/guimba.png" alt="" id="dropdown">
            <div class="campus-text">
                <p><i class="fa-solid fa-building"></i>&nbsp;&nbsp;GUIMBA CAMPUS</p>
                <p><i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp;Parairo St., Saranay Guimba, Nueva Ecija</p>
                <p><i class="fa-solid fa-phone"></i>&nbsp;&nbsp;(044) 335-1170</p>
                <p><i class="fa-solid fa-mobile"></i>&nbsp;&nbsp;0917-118-2873</p>
                <p><i class="fa-solid fa-envelope"></i>&nbsp;&nbsp;crtguimbaassesment@gmail.com</p>
            </div>
        </div>
        <div class="campus">
            <img src="img/campus/sanjose.png" alt="" id="dropdown">
            <div class="campus-text">
                <p><i class="fa-solid fa-building"></i>&nbsp;&nbsp;SAN JOSE CAMPUS</p>
                <p><i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp;Sanchez St., San Jose City</p>
                <p><i class="fa-solid fa-phone"></i>&nbsp;&nbsp;(044) 803-3630</p>
                <p><i class="fa-solid fa-mobile"></i>&nbsp;&nbsp;0997-956-4938</p>
                <p><i class="fa-solid fa-envelope"></i>&nbsp;&nbsp;crt.sanjoseregistrar@gmail.com</p>
            </div>
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
            <div class="li mb-5">
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
    <div class="why-crt">
        <div class="title">
            <i class="fa-regular fa-heart" id="heart"></i>
            <h1 id="whyCrt">Why Choose CRT?</h1>
        </div>
        <div class="card-container">
            <div class="card-content">
                <h2 id="bcuz">Guaranteed Quality Education</h2>
                <img src="img/why/card1.webp" alt="">
                <p id="desc">All courses are recognized by the CHED, TESDA, and DepEd. The students are assured of the standards set by the government, for the curriculum, facilities and the like.</p>
            </div>
            <div class="card-content">
                <h2 id="bcuz">Flexible Learning</h2>
                <img src="img/why/card2.webp" alt="">
                <p id="desc">A Learning Management System is readily available for the students who are given individual account to access lessons using the online platform other than their face-to-face classes.</p>
            </div>
            <div class="card-content">
                <h2 id="bcuz">Competency Based Training</h2>
                <img src="img/why/card3.webp" alt="">
                <p id="desc">The students are being prepared to gain competency required to pass Competency Assessment for National Certification and Eligibility.</p>
            </div>
            <div class="card-content">
                <h2 id="bcuz">Wifi-Zone Campus with Virtual Library</h2>
                <img src="img/why/card4.webp" alt="">
                <p id="desc">Other than books available, it has computers with internet access and students can avail of free WiFi connectivity powered by CRT Globe GoWiFi and CRT Smart Free WiFi.</p>
            </div>
            <div class="card-content">
                <h2 id="bcuz">State-of-the-art Facilities</h2>
                <img src="img/why/card5.webp" alt="">
                <p id="desc">The laboratory facilities are updated and upgraded from time to time to keep abreast with the ever-changing development in technology. All the laboratories use the standards set for college courses.</p>
            </div>
            <div class="card-content">
                <h2 id="bcuz">Air-Conditioned Classrooms</h2>
                <img src="img/why/card6.webp" alt="">
                <p id="desc">CRT provides an environment conducive to learning. Both the instructors and the students maximize their face-to-face interactions and learning with a cozy environment.</p>
            </div>
            <div class="card-content">
                <h2 id="bcuz">Industry Support</h2>
                <img src="img/why/card7.webp" alt="">
                <p id="desc">Other that classroom training, students undergo On-the-Job Training (OJT) in the private or government institutions to better equip them to become highly competitive professionals.</p>
            </div>
            <div class="card-content">
                <h2 id="bcuz">Accredited Assessment Center</h2>
                <img src="img/why/card8.webp" alt="">
                <p id="desc">CRT is an accredited assessment center for Hospitality, Tourism, Computer, and Education Competency Requirement.</p>
            </div>
            <div class="card-content">
                <h2 id="bcuz">Holistic Development Approach</h2>
                <img src="img/why/card9.webp" alt="">
                <p id="desc">At CRT, we believe that both skills and values should be honed hand in hand to mold a more responsible and competent person. Total development of a person is our concern.</p>
            </div>
            <div class="card-content">
                <h2 id="bcuz">Affordable Tuition Fee</h2>
                <img src="img/why/card10.webp" alt="">
                <p id="desc">Above all, quality education is provided with affordable tuition fees no other college of our class can offer.</p>
            </div>
        </div>
    </div>

    <div class="map">
        <div id="map">
            <div class="title">
                <h1 id="where">Where is CRT Cabanatuan?</h1>
            </div>
            <div class="map-frame">
                <iframe id="indexMap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3844.9121727244624!2d120.96438377416747!3d15.489155654707622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33972e955348cf89%3A0x8a1d57bc0e712e17!2sCollege%20for%20Research%20and%20Technology%20of%20Cabanatuan!5e0!3m2!1sen!2sph!4v1723729859932!5m2!1sen!2sph" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/animation.js"></script>
</body>
</html>