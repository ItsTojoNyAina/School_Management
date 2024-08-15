<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frais de Scolarité</title>
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
        /* Styles généraux */
        html, body {
            height: 100%;
            margin: 0;
            font-family: 'Cairo', sans-serif;
        }

        body {
            display: flex;
            flex-direction: column;
        }
        .sidebar ul li a.active {
            background-color: #f0f0f0;
            font-weight: bold;
        }

        .sidebar ul li a:hover {
            background-color: #f0f0f0;
            font-weight: bold;
        }

        .container {
            display: flex;
            flex: 1;
            min-height: 100vh;
        }

        .sidebar {
            flex: 0 0 250px;
            background-color: #fff;
            padding: 20px;
            display: flex;
            flex-direction: column;
            height: 100vh; /* Assure que la sidebar prend toute la hauteur */
        }

        .content {
            flex: 1;
            padding: 20px;
            background-color: #f9f9f9;
            display: flex;
            flex-direction: column;
        }

        .head {
            background-color: #fff;
            padding: 15px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .search input {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .icons {
            display: flex;
            align-items: center;
        }

        .icons img {
            border-radius: 50%;
            margin-left: 15px;
            width: 40px;
            height: 40px;
        }

        h1 {
            margin-top: 0;
        }

        .fees-summary {
            margin: 20px 0;
            padding: 15px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .fees-summary h2 {
            margin-top: 0;
        }

        .fees-summary p {
            margin: 5px 0;
        }

        .fees-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .fees-table th, .fees-table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .fees-table th {
            background-color: #f4f4f4;
        }

        .fees-table tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <div class="container">
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

        <!-- Start Main Content -->
        <div class="content">
            <!-- Start Head -->
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
            <h1>Frais de Scolarité</h1>
            
            <div class="fees-summary">
                <h2>Résumé des Frais</h2>
                <p><strong>Total des frais :</strong> 2000 Ar</p>
                <p><strong>Frais déjà payés :</strong> 1500 Ar</p>
                <p><strong>Montant restant :</strong> 500 Ar</p>
            </div>

            <table class="fees-table">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Description</th>
                        <th>Montant</th>
                        <th>Statut</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01/01/2024</td>
                        <td>Inscription</td>
                        <td>1000 Ar</td>
                        <td>Payé</td>
                    </tr>
                    <tr>
                        <td>01/02/2024</td>
                        <td>Matériel</td>
                        <td>500 Ar</td>
                        <td>Payé</td>
                    </tr>
                    <tr>
                        <td>01/03/2024</td>
                        <td>Autres frais</td>
                        <td>500 Ar</td>
                        <td>En attente</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- End Main Content -->
    </div>
    <script src="../../Script/CurseurActive.js"></script>
</body>
</html>
