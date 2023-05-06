<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
     <!-- Link Tags -->
     <?php include_once('./common/header.php');?>
</head>
<body>
    <?php include_once('./common/navbar.php')?>
    <!-- Profile -->
        <div class="container-fluid sk-profile" style="position:relative">
            <div class="row">
                <div class="col-md-4 col-12 sk-profile-bg1"></div>
                <div class="col-md-8 col-12 sk-profile-bg2"></div>   
            </div>
            <div class="sk-profile-card">
            <div class="row container g-0">
                <div class="col-md-5 col-12 sk-profile-card1">
                    <div class="profile-pic-section">
                        <div class="profile-pic">
                           <img src="./Assets/images/profile_img.jpg" alt="profile_img">
                        </div>
                        <div class="profile-name">
                            <h1>Shashi Kumar<br>Khatri</h1>
                            <div class="hr-line"></div>
                            <p>Front-End Developer</p>
                        </div>
                    </div>
                    <div class="sk-social-media">
                        <div class="sk-social-media-icon">
                            <a href="https://www.facebook.com/shashi.khatri.9615/" target="_blank"><i class="ri-facebook-fill"></i></a>
                            <a href="https://www.instagram.com/khatri_s.h.a.s.h.i/" target="_blank"><i class="ri-instagram-fill"></i></a>
                            <a href="https://www.linkedin.com/in/shashi-khatri-7a0381214/" target="_blank"><i class="ri-linkedin-fill"></i></a>
                            <a href="https://github.com/KhatriShashi" target="_blank"><i class="ri-github-fill"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-12 sk-profile-card2">
                    <div class="sk-profile-description">
                        <h1>Hello</h1>
                        <p>Here's who I am & what I do</p>
                    </div>
                    <div class="sk-about-description">
                        <p>I am a front-end developer.As a front-end developer, I specialize in creating the user-facing components of websites and applications. I have a strong understanding of HTML, CSS, and JavaScript, and am skilled in using various front-end frameworks and libraries. With a keen eye for design and a focus on user experience, I am dedicated to creating visually appealing and intuitive interfaces that are both functional and easy to use.</p>
                    </div>
                </div>   
            </div>
            </div>
        </div>

<!-- misc Tags -->
<?php include_once('./common/misc.php')?>
</body>
</html>