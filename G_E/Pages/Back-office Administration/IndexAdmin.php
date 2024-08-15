<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back Office - Gestion des Étudiants</title>
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
</head>
<style>
      .sidebar ul li a.active {
            background-color: #f0f0f0;
            font-weight: bold;
        }

         .sidebar ul li a:hover {
            background-color: #f0f0f0;
            font-weight: bold;
        }
</style>
<body>
    <div class="page flex">
        <!-- Start Sidebar -->
        <div class="sidebar bg-white p-20 p-relative">
            <h3 class="relative txt-c mt-0">Administration</h3>
            <ul>
                <li>
                    <a class="active flex align-center fs-14 black rad-6 p-10" href="#">
                        <i class="fa-regular fa-user fa-fw"></i>
                        <span>Utilisateurs</span>
                    </a>
                </li>
                <li>
                    <a class="flex align-center fs-14 black rad-6 p-10" href="events.php">
                        <i class="fa-solid fa-calendar-day fa-fw"></i>
                        <span>Événements</span>
                    </a>
                </li>
                <li>
                    <a class="flex align-center fs-14 black rad-6 p-10" href="fees.php">
                        <i class="fa-solid fa-dollar-sign fa-fw"></i>
                        <span>Frais de Scolarité</span>
                    </a>
                </li>
                <li>
                    <a class="flex align-center fs-14 black rad-6 p-10" href="#">
                        <i class="fa-solid fa-cogs fa-fw"></i>
                        <span>Paramètres</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Start Content -->
        <div class="content w-full">
            <!-- Start head -->
            <div class="head bg-white p-15 flex align-center between-flex">
                <div class="search relative">
                    <input type="search" class="p-10 m-border" placeholder="Rechercher...">
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
            <h1 class="relative">Tableau de Bord Administratif</h1>
            <div class="wrapper grid gap-20">
                <div class="welcome bg-white rad-10 txt-c-mobile block-mobile">
                    <div class="intro p-20 flex space-between eee">
                        <div>
                            <h2 class="m-0">Bienvenue</h2>
                            <p class="grey mt-5">Administrateur</p>
                        </div>
                        <img class="hide-mobile" src="../../IMG/welcome.png" alt="">
                    </div>
                    <img src="../../IMG/avatar.png" alt="avatar" class="avatar">
                </div>
                <!-- End Welcome -->
            </div>
        </div>
    </div>
    <script src="../../Script/CurseurActive.js"></script>
</body>
</html>
