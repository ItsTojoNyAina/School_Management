<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="../../CSS/all.min.css">
    <!-- Frame Work File -->
    <link rel="stylesheet" href="../../CSS/framework.css">
    <!-- Css Style File -->
    <link rel="stylesheet" href="../../CSS/main.css">
    <!-- Css Quaries File -->
    <link rel="stylesheet" href="../../CSS/quaries.css">
    <link rel="stylesheet" href="../../CSS/Sidebar.css">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900;1000&family=Open+Sans:wght@300;400;500;600;700;800&family=Work+Sans:wght@200;300;400;500;600;800&display=swap" rel="stylesheet">
    <style>
        /* Style pour la sidebar */
        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #fff;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            box-sizing: border-box; 
        }

        .sidebar h3 {
            text-align: center;
            margin-top: 0;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .sidebar ul li {
            margin: 0;
        }

        .sidebar ul li a {
            display: flex;
            align-items: center;
            padding: 10px;
            text-decoration: none;
            color: #333;
            border-radius: 6px;
            transition: background-color 0.3s;
        }

        .sidebar ul li a.active {
            background-color: #f0f0f0;
            font-weight: bold;
        }

            

        .sidebar ul li a:hover {
            background-color: #f0f0f0;
            font-weight: bold;
        }

        .sidebar ul li a i {
            margin-right: 10px;
        }

        /* Style pour le contenu */
        .content {
            margin-left: 250px; 
            padding: 20px;
        }

        .profile-page {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .overview {
            display: flex;
            align-items: center;
        }

        .avatar-box {
            text-align: center;
            margin-right: 20px;
        }

        .avatar-box img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            object-fit: cover;
        }

        .avatar-box h3 {
            margin: 10px 0 5px;
        }

        .avatar-box p {
            color: #777;
        }

        .level {
            background-color: #eee;
            border-radius: 6px;
            height: 10px;
            position: relative;
            margin: 10px 0;
        }

        .level span {
            background-color: #4caf50;
            height: 100%;
            display: block;
        }

        .rating i {
            color: #ffa500;
        }

        .info-box {
            flex: 1;
        }

        .info-box .box {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .info-box .box div {
            margin-bottom: 10px;
        }

        .info-box .box span.grey {
            color: #777;
        }
    </style>
</head>
<body>
    <div class="sidebar bg-white p-20 p-relative">
        <h3 class="relative txt-c mt-0">Rakoto</h3>
        <ul>
            <li>
                <a class="flex align-center fs-14 black rad-6 p-10" href="profile.php">
                    <i class="fa-regular fa-user fa-fw"></i>
                    <span>Profil</span>
                </a>
            </li>
            <li>
                <a class="active flex align-center fs-14 black rad-6 p-10" href="cours.php">
                    <i class="fa-solid fa-graduation-cap fa-fw"></i>
                    <span>Cours</span>
                </a>
            </li>
            <li>
                <a class="flex align-center fs-14 black rad-6 p-10" href="Notes.php">
                    <i class="fa-regular fa-circle-user fa-fw"></i>
                    <span>Notes</span>
                </a>
            </li>
            <li>
                <a class="flex align-center fs-14 black rad-6 p-10" href="Edt.php">
                    <i class="fa-regular fa-calendar"></i>
                    <span>Emplois du temps</span>
                </a>
            </li>
            <li>
                <a class="flex align-center fs-14 black rad-6 p-10" href="presence.php">
                    <i class="fa-regular fa-calendar-check"></i>
                    <span>Présence</span>
                </a>
            </li>
            <li>
                <a class="flex align-center fs-14 black rad-6 p-10" href="student-events.php">
                    <i class="fa-solid fa-calendar-day fa-fw"></i>
                    <span>Événements</span>
                </a>
            </li>
            <li>
                <a class="flex align-center fs-14 black rad-6 p-10" href="student-fees.php">
                    <i class="fa-solid fa-dollar-sign fa-fw"></i>
                    <span>Frais de Scolarité</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- End Sidebar -->
    
    <!-- Start Content -->
    <div class="content">
        <!-- Start head -->
        <div class="head bg-white p-15 flex align-center between-flex">
            <div class="search relative">
                <input type="search" class="p-10 m-border" placeholder="Search...">
            </div>
            <div class="icons flex align-center">
                <span class="relative">
                    <i class="fa-regular fa-bell fa-lg"></i>
                </span>
                <img src="../../IMG/avatar.png" alt="avatar">
            </div>
        </div>
        <!-- End Head -->
        <h1 class="relative">Profil</h1>
        <div class="profile-page m-20">
            <div class="overview bg-white rad-10 flex mb-20 align-center">
                <div class="avatar-box">
                    <img class="mb-10 rad-half" src="../../IMG/avatar.png" alt="Avatar">
                    <h3 class="m-0">Rakoto</h3>
                    <p class="grey mt-10">3eme annee</p>
                    <div class="level rad-6 eee relative">
                        <span style="width: 70%"></span>
                    </div>
                    <div class="rating mt-10 mb-10">
                        <i class="fa-solid fa-star c-orange fs-13"></i>
                        <i class="fa-solid fa-star c-orange fs-13"></i>
                        <i class="fa-solid fa-star c-orange fs-13"></i>
                        <i class="fa-solid fa-star c-orange fs-13"></i>
                        <i class="fa-solid fa-star c-orange fs-13"></i>
                    </div>
                </div>
                <div class="info-box">
                    <!-- Start Info Row -->
                    <div class="box p-20 flex">
                        <h4 class="grey fs-15 m-0 w-full">Information</h4>
                        <div class="fs-14">
                            <div>
                                <span class="grey">Nom:</span>
                                <span class="mr-15">Rakoto</span>
                            </div>
                        </div>
                        <div class="fs-14">
                            <div>
                                <span class="grey">Genre:</span>
                                <span>Male</span>
                            </div>
                        </div>
                        <div class="fs-14">
                            <div class="mb-20">
                                <span class="grey">Pays: </span>
                                <span class="mr-15">Any EHh</span>
                            </div>
                        </div>
                        <div class="fs-14">
                            <div>
                                <span class="grey">Email:</span>
                                <span>emaill@website.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Other Data -->
    </div>
    <!-- End Content -->
    <script src="../../Script/CurseurActive.js"></script>
</body>
</html>
