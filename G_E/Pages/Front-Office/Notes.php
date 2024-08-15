<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Friends</title>
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
        .container {
            margin-left: 250px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .grades {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .grades li {
            margin-bottom: 10px;
            padding: 10px;
            background-color: #f9f9f9;
            border-radius: 6px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .grades li span {
            font-weight: bold;
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
    
    <!-- Start Main Content -->
    <div class="container">
        <h1>Notes</h1>
        <ul class="grades">
            <li><span>MVC:</span> 12</li>
            <li><span>C#:</span> 15</li>
            <li><span>TDN:</span> 10</li>
            <li><span>TDS:</span> 11</li>
            <li><span>MERISE:</span> 14</li>
        </ul>
    </div>
    <!-- End Main Content -->
  <script src="../../Script/CurseurActive.js"></script>
</body>
</html>
