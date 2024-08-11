<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootsrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="nav-style.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

    <!-- datatable -->
    <link rel="stylesheet" href="/DataTables/datatables.css" />
    <script src="/DataTables/datatables.js"></script>

    <style>
        .nav-side {
            display: flex;
            height: 100px;
        }

        nav {
            width: 100%;
            height: 65px;
            position: fixed;
        }

        .side {
            height: 100%;
            position: fixed;
        }
    </style>
</head>

<body>
    <div class="nav-side">
        <div class="side">
            <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 220px; height: 100vh">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                    <span class="fs-4">-----</span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="http://localhost/INTERNSHIP/8.Admin%20panel/AdminPage/DeshbordSection/dashboard.php" class="nav-link link-dark" aria-current="page">
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="http://localhost/INTERNSHIP/8.Admin%20panel/AdminPage/UserSection/user-list.php" class="nav-link link-dark">
                            User Details
                        </a>
                    </li>
                    <li>
                        <a href="http://localhost/INTERNSHIP/8.Admin%20panel/AdminPage/UserSection/addUser-form.php" class="nav-link link-dark">
                            -- Edit User
                        </a>
                    </li>
                    <li>
                        <a href="http://localhost/INTERNSHIP/8.Admin%20panel/AdminPage/ProjectSection/project-image-list.php" class="nav-link link-dark">
                            Project Details
                        </a>
                    </li>
                    <li>
                        <a href="http://localhost/INTERNSHIP/8.Admin%20panel/AdminPage/ProjectSection/uploadImg-form.php" class="nav-link link-dark">
                            -- Add Projects
                        </a>
                    </li>
                    <li>
                        <a href="http://localhost/INTERNSHIP/8.Admin%20panel/AdminPage/SkillSection/skill-list.php" class="nav-link link-dark">
                            Skill Details
                        </a>
                    </li>
                    <li>
                        <a href="http://localhost/INTERNSHIP/8.Admin%20panel/AdminPage/SkillSection/addSkill.php" class="nav-link link-dark">
                            -- Add New Skill
                        </a>
                    </li>
                </ul>
                <hr>
            </div>
        </div>
        <nav id="navbar" style="background-color:white;">
            <ul class="sidebar">
                <!-- <li><a href="/home">Home</a></li>
            <li><a href="http://localhost/INTERNSHIP/8.Admin%20panel/AdminPage/user-list.php">User-List</a></li>
            <li><a href="#skill">Skill</a></li>
            <li><a href="http://localhost/INTERNSHIP/8.Admin%20panel/AdminPage/addUser-form.php">Add-User</a></li> -->
                <li><a href="http://localhost/INTERNSHIP/8.Admin%20panel/AdminPage/ProjectSection/project-image-list.php">Navbar</a>
                </li>
                <li><a href="#">Logout</a></li>
            </ul>

            <ul>
                <li style="padding-top: 15px;">
                    <text>Admin<span style="color: rgba(247, 80, 35, 255)">Panel</span></text></a>
                </li>
                <!-- <li class="hideOnMobile"><a href="#home">Home</a></li> -->
                <!-- <li class="hideOnMobile"><a
                    href="http://localhost/INTERNSHIP/8.Admin%20panel/AdminPage/user-list.php">User-List</a></li>
            <li class="hideOnMobile"><a
                    href="http://localhost/INTERNSHIP/8.Admin%20panel/AdminPage/addUser-form.php">Add-User</a></li>
            <li class="hideOnMobile"><a
                    href="http://localhost/INTERNSHIP/8.Admin%20panel/AdminPage/ProjectSection/uploadImg-form.php">Upload_Image</a>
            </li> -->
                <li class="hideOnMobile"><a href="#">Navbar</a>
                </li>
                <li><a href="#">Logout</a></li>
            </ul>
        </nav>
    </div>
</body>

</html>