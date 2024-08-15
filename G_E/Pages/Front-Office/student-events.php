<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Événements</title>
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
            transition: background-color 0.3s, font-weight 0.3s;
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

        /* Custom Styles */
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            background-color: #fff;
            overflow: hidden; 
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            table-layout: auto; 
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            word-wrap: break-word; 
        }
        th {
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>
    <div class="page flex">
        <!-- Start Sidebar -->
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
                    <a class="active flex align-center fs-14 black rad-6 p-10" href="student-events.php">
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
        
        <!-- Start Content -->
        <div class="content w-full" style="padding-left: 250px;"> 
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
            <h1 class="relative">Événements</h1>
            <div class="wrapper grid gap-20">
                <div class="card bg-white rad-10 p-20">
                    <h2 class="m-0">Événements à venir</h2>
                    <table id="eventsTable" class="mt-10">
                        <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Date</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Examen</td>
                                <td>2024-09-10</td>
                                <td>Debut Exam 1ere et 5eme annee<td>
                            </tr>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="../../Script/CurseurActive.js"></script>
</body>
</html>
