<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo/crtlogo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/courseoffered.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Courses | CRT Cabanatuan</title>
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
            <h1 id="pageOn">COURSES OFFER BY</h1>
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
                <li><a href="">Courses Offered</a></li>
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

    <div class="courses">
        <div class="title">
            <i class="fa-regular fa-heart" id="heart"></i>
            <h1 id="whoisCrt">Courses Offer by CRT</h1>
        </div>
        <div class="year-container">
            <div class="four-years">
                <div class="year">
                    <h2>4 Years</h2>
                </div>
                <div class="dropdown">
                    <p onclick="openModal('IT')"><i class="fa-regular fa-square-check" style="font-size: 25px; color: #00319c;">&nbsp;&nbsp;</i><span>B.S. in Information Technology</span></p>
                    <p onclick="openModal('AIS')"><i class="fa-regular fa-square-check" style="font-size: 25px; color: #00319c;">&nbsp;&nbsp;</i><span>B.S. in Accounting Information System</span></p>
                    <p onclick="openModal('HM')"><i class="fa-regular fa-square-check" style="font-size: 25px; color: #00319c;">&nbsp;&nbsp;</i><span>B.S. in Hospitality Management</span></p>
                    <p onclick="openModal('TM')"><i class="fa-regular fa-square-check" style="font-size: 25px; color: #00319c;">&nbsp;&nbsp;</i><span>B.S. in Tourism Management</span></p>
                    <p onclick="openModal('TVTE')"><i class="fa-regular fa-square-check" style="font-size: 25px; color: #00319c;">&nbsp;&nbsp;</i><span>Bachelor in Technical Vocational Teacher Education</span></p>
                </div>
            </div>
            <div class="two-years">
                <div class="year">
                    <h2>2 Years</h2>
                </div>
                <div class="dropdown">
                    <p onclick="openModal('ACT')"><i class="fa-regular fa-square-check" style="font-size: 25px; color: #00319c;">&nbsp;&nbsp;</i><span>Associate in Computer Technology</span></p>
                    <p onclick="openModal('HRS')"><i class="fa-regular fa-square-check" style="font-size: 25px; color: #00319c;">&nbsp;&nbsp;</i><span>Hotel and Restaurant Services</span></p>
                    <p onclick="openModal('FSM')"><i class="fa-regular fa-square-check" style="font-size: 25px; color: #00319c;">&nbsp;&nbsp;</i><span>Food Services Management</span></p>
                </div>
            </div>
        </div>
    </div>


    <div class="modal-container">
        <div id="modalIT" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal('IT')"><i class="fa-solid fa-xmark"></i></span>
                <h2>B.S. in Information Technology</h2>
                <p>BSIT is a four-year degree ladderized program that prepares students to become IT professionals with primary competencies in the areas of systems analysis and design, applications development, database administration, network administration, and systems implementation and maintenance. It likewise deals with the design and development of computer- based information systems for real-world business solutions.</p>
            </div>
        </div>
        <div id="modalAIS" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal('AIS')"><i class="fa-solid fa-xmark"></i></span>
                <h2>B.S. in Accounting Information System</h2>
                <p>BSAIS is a degree program that provides general accounting education to students wanting to pursue a professional career in Accounting Information System. It is a profession that combines knowledge in business, accounting and computer systems. Graduates of this program qualifies to take assessments leading to certifications in accounting information systems given by global professional Accounting Information System organizations.</p>
            </div>
        </div>
        <div id="modalHM" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal('HM')"><i class="fa-solid fa-xmark"></i></span>
                <h2>B.S. in Hospitality Management</h2>
                <p>BSHM is a four-year degree ladderized program that covers the process of conception, planning, development, human resource and management of the different aspects of businesses in the hospitality industry. The program provides students with technical skills, as well as knowledge in marketing, finance, budgeting, staffing and other fields of business. The program also aims to teach entrepreneurship skills.</p>
            </div>
        </div>
        <div id="modalTM" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal('TM')"><i class="fa-solid fa-xmark"></i></span>
                <h2>B.S. in Tourism Management</h2>
                <p>BSTM is a degree program that delivers education to people who are interested to build a career in the travel and leisure industry involving tourism planning, development, implementation and control management functions. The program professionally trains and equip students with competencies that are needed to execute tasks on tourism planning and development, transportation services, travel and tour services. They are also trained to excel as business managers or entrepreneurs operating their own travel and/orleisure enterprises.</p>
            </div>
        </div>
        <div id="modalTVTE" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal('TVTE')"><i class="fa-solid fa-xmark"></i></span>
                <h2>Bachelor in Technical Vocational Teacher Education</h2>
                <p>BTVTEd program is a four-year teacher education program designed to equip future teachers with adequate and relevant competencies in the area of technical vocational teacher education. The technical and vocational teacher education curriculum shall impart a body of knowledge, skills, attitudes, values and experiences that will provide prospective Grade 9 – 10 TLE Teachers, Senior High School teachers for Tech-Voc Livelihood track, TVET Trainers/Instructors, and faculty members in higher educational institutions with necessary competencies essential for effective teaching.</p>
            </div>
        </div>
        <div id="modalACT" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal('ACT')"><i class="fa-solid fa-xmark"></i></span>
                <h2>Associate in Computer Technology</h2>
                <p>The Associate in Computer Technology program (ACT) provides knowledge and skills in the fundamental of computer programming and basic computation.</p>
            </div>
        </div>
        <div id="modalHRS" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal('HRS')"><i class="fa-solid fa-xmark"></i></span>
                <h2>Hotel and Restaurant Services</h2>
                <p>This 2-year diploma course is designed to help students learn the principles in hotel operation, housekeeping, food and beverage services and culinary arts.</p>
            </div>
        </div>
        <div id="modalFSM" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal('FSM')"><i class="fa-solid fa-xmark"></i></span>
                <h2>Food Services Management</h2>
                <p>Designed to provide the skills needed to manage a restaurant or food service outlet, this degree puts graduates on the track to manage food service operations, such as those in hospitals, corporate cafeterias, upscale fast food operations and chain restaurants.</p>
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
</body>
</html>