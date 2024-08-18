<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo/crtlogo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/student.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Student Login | CRT Cabanatuan</title>
</head>
<body>

    <div class="student-login-container">
        <div class="org">
            <a href="index.php"><img src="img/logo/crtlogo.png" id="sidebarLogo"></a>
            <div id="orgText">
                <h1 id="orgName">CRT CABANATUAN</h1>
                <p id="crtEmail">crt.cabanatuan@gmail.com</p>
            </div>
        </div>
        <form action="" class="student-login-form">
            <div class="title">
                <h1>Student Portal</h1>
                <i class="fa-solid fa-lock"></i>
            </div>
            <div class="input-type-text" id="textInput">
                <i class="fa-solid fa-user" id="label"></i>
                <input type="text" placeholder="Your Student Number" required autocomplete="off">
            </div>
            <div class="input-type-password" id="passwordInputContainer">
                <i class="fa-solid fa-lock" id="label"></i>
                <input type="password" id="passwordInput" placeholder="Your Password" required autocomplete="off">
                <i class="fa-solid fa-eye" id="togglePassword"></i>
            </div>
            <div class="form-btn">
                <button type="submit">Login</button>
            </div>
        </form>
    </div>


<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/show.js"></script>
</body>
</html>