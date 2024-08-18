<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo/crtlogo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>BSTM | CRT Cabanatuan</title>
</head>
<body>
<header id="header">
        <nav>
            <div class="org">
                <a href="../index.php"><img src="../img/logo/crtlogo.png" alt="" id="crtLogo"></a>
                <div id="headerText">
                    <h1 id="orgName">CRT CABANATUAN</h1>
                    <p id="crtEmail"><i class="fa-solid fa-envelope">&nbsp;</i>crt.cabanatuan@gmail.com</p>
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
                <a href="../index.php"><img src="../img/logo/crtlogo.png" id="sidebarLogo"></a>
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
            </div>
        </ul>
    </div>


    <div class="enrollment-form-container">
        <form action="include/submit.php" method="POST" enctype="multipart/form-data" id="enrollmentForm">
            <h1 id="enrollOn">BS in Tourism Management</h1>
            <div class="inner-form-container">
            <div class="info-card">
                <h2 id="infoTitle">Personal Information</h2>
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter Your Full Name" required autocomplete="off">

                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter Your Email" required autocomplete="off">

                <label for="phoneNumber">Phone Number</label>
                <input type="number" id="phoneNumber" name="phoneNumber" placeholder="Enter Your Phone Number" required autocomplete="off">

                <label for="emergencyContact">Contact Number in Case of Emergency</label>
                <input type="number" id="emergencyContact" name="emergencyContact" placeholder="Enter Emergency Contact Number" required autocomplete="off">

                <label for="address">Address</label>
                <input type="text" id="address" name="address" placeholder="Enter Your Address" required autocomplete="off">

                <label for="dob">Date of Birth</label>
                <input type="date" id="dob" name="dob" required>

                <label for="gender">Gender</label>
                <select id="gender" name="gender" class="mb-4" required>
                    <option hidden value="">Select Your Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>

                <label for="photoUpload">Upload photo: 
            <p style="font-size: 13px; display: flex; margin-top: 5px; margin-bottom: -5px;">
                (Must be presentable, max: 5MB)
            </p>
        </label>
        <input type="file" id="photoUpload" name="image" accept="image/*" onchange="previewImage(event)">
        <img id="imagePreview" src="#" alt="Preview Image" style="max-width: 100px; display: none;">
            </div>

            <div class="info-card">
                <h2 id="infoTitle">School Information</h2>
                <label for="lrn">LRN (Learner Reference Number)</label>
                <input type="number" id="lrn" name="lrn" placeholder="Enter Your LRN" required autocomplete="off">

                <label for="studentNumber">Student Number</label>
                <input type="text" id="studentNumber" name="studentNumber" placeholder="Enter Your CRT Student Number, Put N.A. If Not Available" required autocomplete="off">

                <input type="hidden" id="course" name="course" value="BSTM">

                <label for="year">Select Year</label>
                <select id="year" name="year" class="mb-4" required>
                    <option hidden value="">Select Year Level</option>
                    <option value="1st">1st Year</option>
                    <option value="2nd">2nd Year</option>
                    <option value="3rd">3rd Year</option>
                    <option value="4th">4th Year</option>
                </select>

                <label for="elementarySchool">Elementary School</label>
                <input type="text" id="elementarySchool" name="elementarySchool" placeholder="Enter Elementary School Name" required autocomplete="off">

                <label for="elementaryYear">Year Graduated (Elementary)</label>
                <select id="elementaryYear" name="elementaryYear" class="mb-4" required>
                    <option hidden value="">Select Year</option>
                    <option value="2014-2015">2014-2015</option>
                    <option value="2016-2017">2016-2017</option>
                    <option value="2018-2019">2018-2019</option>
                    <option value="2020-2021">2020-2021</option>
                </select>

                <label for="highSchool">High School</label>
                <input type="text" id="highSchool" name="highSchool" placeholder="Enter High School Name" required autocomplete="off">

                <label for="highSchoolYear">Year Graduated (High School)</label>
                <select id="highSchoolYear" name="highSchoolYear" class="mb-4" required>
                    <option hidden value="">Select Year</option>
                    <option value="2014-2015">2014-2015</option>
                    <option value="2016-2017">2016-2017</option>
                    <option value="2018-2019">2018-2019</option>
                    <option value="2020-2021">2020-2021</option>
                </select>

                <label for="seniorHighSchool">Senior High School</label>
                <input type="text" id="seniorHighSchool" name="seniorHighSchool" placeholder="Enter Senior High School Name" required autocomplete="off">

                <label for="seniorHighSchoolYear">Year Graduated (Senior High School)</label>
                <select id="seniorHighSchoolYear" name="seniorHighSchoolYear" class="mb-4" required>
                    <option hidden value="">Select Year</option>
                    <option value="2014-2015">2014-2015</option>
                    <option value="2016-2017">2016-2017</option>
                    <option value="2018-2019">2018-2019</option>
                    <option value="2020-2021">2020-2021</option>
                </select>
            </div>

            <div class="info-card">
                <h2 id="infoTitle">Guardian Information</h2>

                <label for="fatherName">Father's Name</label>
                <input type="text" id="fatherName" name="fatherName" placeholder="Enter Father's Name" required autocomplete="off">

                <label for="motherName">Mother's Name</label>
                <input type="text" id="motherName" name="motherName" placeholder="Enter Mother's Name" required autocomplete="off">

                <label for="guardianName">Guardian's Name</label>
                <input type="text" id="guardianName" name="guardianName" placeholder="Enter Guardian's Name" required autocomplete="off">

                <label for="guardianContact">Guardian Contact Number</label>
                <input type="number" id="guardianContact" name="guardianContact" placeholder="Enter Guardian's Contact Number" required autocomplete="off">

            </div>
            </div>
            <center><button type="submit" id="enrollFormSubmit">Submit</button></center>
        </form>
    </div>


<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/show.js"></script>
</body>
</html>