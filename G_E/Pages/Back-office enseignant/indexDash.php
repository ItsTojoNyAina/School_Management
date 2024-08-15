<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IndexDash</title>
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="../../CSS/all.min.css">
    <!-- Frame Work File -->
    <link rel="stylesheet" href="../../CSS/framework.css">
    <!-- Css Style File -->
    <link rel="stylesheet" href="../../CSS/main.css">
    <!-- Css Quaries File -->
    <link rel="stylesheet" href="../../CSS/quaries.css">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900;1000&family=Open+Sans:wght@300;400;500;600;700;800&family=Work+Sans:wght@200;300;400;500;600;800&display=swap" rel="stylesheet">
    <style>
        /* Style pour la sidebar */
        .sidebar {
            width: 250px;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
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

        .sidebar ul li a i {
            margin-right: 10px;
        }

        .sidebar ul li a:hover {
            background-color: #f0f0f0;
            font-weight: bold;
        }

        /* Style pour le contenu */
        .content {
            margin-left: 250px; /* Correspond à la largeur de la sidebar */
            padding: 20px;
            background-color: #f9f9f9; /* Ajout d'une couleur de fond légère */
        }

        .content h1 {
            margin-top: 0;
        }

        /* Style pour le head */
        .head {
            margin-bottom: 20px;
        }

        .head .search input {
            width: 200px;
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #ddd;
        }

        .head .icons {
            display: flex;
            align-items: center;
        }

        .head .icons img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-left: 10px;
        }

        /* Style pour les éléments de bienvenue */
        .wrapper {
            display: grid;
            gap: 20px;
        }

        .welcome {
            background: #fff;
            border-radius: 10px;
            text-align: center;
            padding: 20px;
        }

        .welcome .intro {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .welcome .intro img {
            max-width: 100px;
        }

        .welcome .avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-top: 20px;
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
        </ul>
    </div>
    
    <!-- End Sidebar -->
    
    <!-- Start Main Content -->
    <div class="content w-full">
        <!-- Start Head -->
        <div class="head bg-white p-15 flex align-center between-flex">
            <div class="search relative">
                <input type="search" class="p-10 m-border" placeholder="Search...">
            </div>
            <div class="icons flex align-center">
                <span class="relative">
                    <i class="fa-regular fa-bell fa-lg"></i>
                </span>
                <a href="profile.html">
                    <img src="../../IMG/avatar.png" alt="avatar">
                </a>
            </div>
        </div>
        <!-- End Head -->
        <h1 class="relative">Dashboard</h1>
        <div class="wrapper grid gap-20">
            <div class="welcome bg-white rad-10 txt-c-mobile block-mobile">
                <div class="intro p-20 flex space-between eee">
                    <div>
                        <h2 class="m-0">Bienvenue</h2>
                        <p class="grey mt-5">Tojo</p>
                    </div>
                    <img class="hide-mobile" src="../../IMG/welcome.png" alt="">
                </div>
                <img src="../../IMG/avatar.png" alt="avatar" class="avatar">
            </div>
        </div>
    </div>
    <!-- End Main Content -->
    <script src="../../Script/CurseurActive.js"></script>
</body>
</html>
