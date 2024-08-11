<?php
include_once("../AdminPage/SkillSection/fetch-skills.php");
?>

<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Portfolio</title>

    <!-- bootstrap
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    /> -->

    <!-- css -->
    <link rel="stylesheet" href="style.css" />

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
</head>

<body>
    <!------------------------------- Navbar Part - 1 ------------------------------->
    <nav id="navbar">
        <ul class="sidebar">
            <li onclick="hideSidebar()">
                <a href="#">
                    <img src="images/close-icon.png" alt="" height="55px" style="margin: -20px" />
                </a>
            </li>
            <li><a href="/home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#skill">Skill</a></li>
            <li><a href="#project">Project</a></li>
            <li><a href="#contact">Contact</a></li>
            <li>
                <a href="#"><button>Download CV</button></a>
                <a href="../AdminPage//LoginPage/login.php"><button>Login</button></a>
            </li>
        </ul>

        <ul>
            <li>
                <a href="#"><img src="images/Website_inner_logo.png" alt="" height="60px" /><text>Develo<span
                            style="color: rgba(247, 80, 35, 255)">per</span></text></a>
            </li>
            <li class="hideOnMobile"><a href="#home">Home</a></li>
            <li class="hideOnMobile"><a href="#about">About</a></li>
            <li class="hideOnMobile"><a href="#skill">Skill</a></li>
            <li class="hideOnMobile"><a href="#project">Project</a></li>
            <li class="hideOnMobile"><a href="#contact">Contact</a></li>
            <li class="hideOnMobile">
                <a href="#"><button>Download CV</button></a>
                <a href="../AdminPage//LoginPage/login.php"><button>Login</button></a>
            </li>
            <li class="menu-btn" onclick="showSidebar()">
                <a href="#">
                    <img src="images/menu-icon.png" alt="" height="30px" />
                </a>
            </li>
        </ul>
    </nav>
    <!------------------------------- Home Page Part - 2 ------------------------------->
    <div class="homepage" id="home">
        <div class="image-side">
            <center><img src="images/Myimg.png" alt="Myimg" height="100%"></center>
        </div>
        <div class="text-side">
            <p1 style="color: rgba(247, 80, 35, 255);">Hello, I'm</p1><br>
            <p2>Malay Dadhaniya</p2><br>
            <p3>A Web Developer From <span style="color: #3cc46e">Gujarat</span></p3>
            </p3><br />
            <p4>I’m creative web developer based in India, and I'm very passionate and dedicated to my work.</p4><br>
            <div class="home-conteat d-flex">
                <div class="about-btn">
                    <button class="btn">About Me</button>
                </div>
                <div class="contact-icons">
                    <div class="icons">
                        <i class="fa-brands fa-linkedin-in"></i>
                        <i class="fa-brands fa-x-twitter"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-whatsapp"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mouse-img-div">
        <center><img src="images/mouse-img.png" class="mouse-img" alt="scroll-btn" /></center>
    </div><br><br><br>
    <!------------------------------- About Page Part - 3 ------------------------------->
    <div class="aboutpage" id="about">
        <div class="title">
            <center>
                <p>About <span style="color: rgba(247, 80, 35, 255);">us</span></p>
            </center>
        </div>
        <div class="inner-text">
            <div class="text">
                <p2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                        style="color: rgba(247, 80, 35, 255); font-size: 24px;">Hey
                        there!</span> I'm Malay Dadhaniya, a web
                    developer
                    passionate about crafting responsive and user-friendly websites. With a BScIT background, I bring
                    strong
                    problem-solving skills and thrive in team environments. I'm constantly learning and exploring new
                    technologies
                    to enhance my skills. Let's create something amazing together!</p2><br><br>
                <p2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I have a deep passion for drawing and cricket.
                    I blend
                    my love for art and the sport into a unique expression of creativity and athleticism.</p2>
            </div>
            <div class="about-img">
                <img src="images/Myimg2.jpg" class="myimg2" alt="My Second img">
            </div>
        </div>
    </div>
    <img src="images/about-section_design-1.png" class="about-section_design-1" alt="design">
    </div>
    <!------------------------------- Skills Page Part - 3 ------------------------------->
    <div class="skillpage" id="skill">
        <div class="title">
            <p>Skill<span style="color: rgba(247, 80, 35, 255);">'s</span></p>
        </div>
        <img src="images/skill-section_design-2.png" class="skill-section_design-1" alt="design-2">
        <div class="skill-parts">
            <div class="skill-part1">
                <p1 style="color: rgba(247, 80, 35, 255);">Development is life</p1><br>
                <p2>I Develop Skills Regularly to Keep Me Updated</p2><br><br>
                <p3>In the realm of development, skill mastery is paramount; it bridges vision with
                    execution, crafting
                    solutions that shape tomorrow's digital landscape.</p3>
                <div class="programmingLanguages">
                    <p>HTML, CSS</p>
                    <div class="progress-bar">
                        <span class="percentage html"></span>
                    </div>
                    <p>JavaScript</p>
                    <div class="progress-bar">
                        <span class="percentage js"></span>
                    </div>
                    <p>C, C++</p>
                    <div class="progress-bar">
                        <span class="percentage c"></span>
                    </div>
                    <p>PHP</p>
                    <div class="progress-bar">
                        <span class="percentage php"></span>
                    </div>
                    <p>Java</p>
                    <div class="progress-bar">
                        <span class="percentage java"></span>
                    </div>
                    <p>Python</p>
                    <div class="progress-bar">
                        <span class="percentage python"></span>
                    </div>
                </div>
            </div>
            <div class="skill-part2">
                <div class="database skill-part2_item">
                    <div class="db-title">
                        <p><span style="color: rgba(247, 80, 35, 255);">Data</span>Base</p><br>
                        <p2 style="line-height: 30px;">MySQL</p2>
                        <div class="progress-bar">
                            <span class="percentage mysql"></span>
                        </div>
                    </div>
                </div>
                <div class="libraries skill-part2_item">
                    <div class="lib-title">
                        <p><span style="color: rgba(247, 80, 35, 255);">Lib</span>raries</p>
                        <p2 style="line-height: 30px;">jQuery</p2>
                        <div class="progress-bar">
                            <span class="percentage jquery"></span>
                        </div>
                        <p2 style="line-height: 30px;">GSAP (GreenSock Animation Platform)</p2>
                        <div class="progress-bar">
                            <span class="percentage gsap"></span>
                        </div>
                        <p2 style="line-height: 30px;">Select2</p2>
                        <div class="progress-bar">
                            <span class="percentage s2"></span>
                        </div>
                    </div>
                </div>
                <div class="frameworks skill-part2_item">
                    <div class="f-title">
                        <p><span style="color: rgba(247, 80, 35, 255);">Frame</span>works</p>
                        <p2 style="line-height: 30px;">Bootstrap 5</p2>
                        <div class="progress-bar">
                            <span class="percentage bootstrap"></span>
                        </div>
                        <p2 style="line-height: 30px;">React.js</p2>
                        <div class="progress-bar">
                            <span class="percentage react"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------------------------------- Projects Page Part - 4 ------------------------------->
    <div class="projectpage" id="project">
        <div class="title">
            <center>
                <p1 style="color: rgba(247, 80, 35, 255);">Projects</p1><br>
                <p2>My Amazing Works</p2><br>
                <p3>Most common methods for developing websites that work well on desktop include responsive and
                    adaptive
                    design.</p3>
            </center>
            <!-- <img src="images/project-img/project-section_design-3.png" alt=""> -->
        </div>
        <center>
            <div class="projects">
                <!-- <img src="images/project-img/p1.png" alt="">
                <img src="images/project-img/p2.png" alt="">
                <img src="images/project-img/p3.png" alt="">
                <img src="images/project-img/p4.png" alt="">
                <img src="images/project-img/p5.png" alt="">
                <img src="images/project-img/p6.png" alt=""> -->
                <?php
                // Directory containing the images
                $directory = '../AdminPage/ProjectSection/Project-image/';
                // Fetch all image files from the directory
                $images = glob($directory . "*.{jpg,png,gif,jpeg}", GLOB_BRACE);

                // Loop through the array and generate image tags
                foreach ($images as $image) {
                    echo "<img src='$image' alt='Project Image'>";
                }
                ?>
            </div>
        </center>
    </div>

    <!------------------------------- Projects Page Part - 4 ------------------------------->
    <div class="contactpage" id="contact">
        <div class="title">
            <center>
                <p1 style="color: rgba(247, 80, 35, 255);">Contact Me</p1><br>
                <p2>I Want To Hear From You</p2><br>
            </center>
        </div>
        <div class="contact-address-form">
            <div class="address-part">
                <div class="address">
                    <div class="logo1">
                        <i class="fa-solid fa-location-dot" style="color: rgba(247, 80, 35, 255);"></i>
                    </div>
                    <div class="address-inner">
                        <p1>Address</p1><br>
                        <p2>OOP Patel smaj, bhangor, lalpur, jamnager</p2>
                    </div>
                </div>
                <div class="email">
                    <div class="logo2">
                        <i class="fa-solid fa-envelope" style="color: rgba(28,190,89,255);"></i>
                    </div>
                    <div class="email-inner">
                        <p1>Email</p1><br>
                        <p2>malaydadhaniya21@gmail.com</p2>
                    </div>
                </div>
                <div class="phone">
                    <div class="logo3">
                        <i class="fa-solid fa-phone" style="color: rgba(128,103,240,255);"></i>
                    </div>
                    <div class="phone-inner">
                        <p1>Phone</p1><br>
                        <p2>+91 8238576925</p2>
                    </div>
                </div>
            </div>
            <div class="address-form">
                <div class="name-email">
                    <input type="text" placeholder="Your Name" class="input-name">
                    <input type="email" placeholder="Email" class="input-email">
                </div>
                <div class="phone-subject">
                    <input type="text" placeholder="Your Phone" class="input-phone">
                    <input type="text" placeholder="Subject" class="input-subject">
                </div>
                <div class="textarea">
                    <textarea placeholder="Textarea" rows="11" class="input-textarea"></textarea>
                </div>
                <div class="form-btn">
                    <button class="btn">Submit Now</button>
                </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>