<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Présence</title>
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
        body {
            font-family: 'Cairo', sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
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
        .sidebar ul li a.active {
            background-color: #f0f0f0;
            font-weight: bold;
        }

         .sidebar ul li a:hover {
            background-color: #f0f0f0;
            font-weight: bold;
        }
        .content {
            margin-left: 270px;
            padding: 20px;
            box-sizing: border-box;
        }
        .head {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #fff;
            padding: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .search input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .icons img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }
        .wrapper {
            margin-top: 20px;
        }
        .table-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        .status {
            padding: 5px 10px;
            border-radius: 4px;
            color: #fff;
        }
        .status.present {
            background-color: #4CAF50;
        }
        .status.absent {
            background-color: #F44336;
        }
        .presence-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .presence-form h2 {
            margin-top: 0;
        }
        .presence-form label {
            display: block;
            margin-bottom: 10px;
        }
        .presence-form input[type="text"], .presence-form input[type="date"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .presence-form button {
            padding: 10px 20px;
            background-color: #021e31;
            border: none;
            border-radius: 4px;
            color: #fff;
            cursor: pointer;
        }
        .sidebar ul li a.active {
            font-weight: bold;
            color: #000;
            background-color: #f0f0f0;
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
    <div class="content">
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
        <h1 class="relative">Présence</h1>
        <div class="wrapper">
            <!-- Section to check presence -->
            <div class="table-container">
                <h2>Vérifier la Présence</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Cours</th>
                            <th>Date</th>
                            <th>Statut</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Architecture MVC</td>
                            <td>01/07/2024</td>
                            <td><span class="status present">Présent</span></td>
                        </tr>
                        <tr>
                            <td>IS</td>
                            <td>01/07/2024</td>
                            <td><span class="status absent">Absent</span></td>
                        </tr>
                        <tr>
                            <td>C#</td>
                            <td>02/07/2024</td>
                            <td><span class="status present">Présent</span></td>
                        </tr>
                        <tr>
                            <td>Théorie des signaux</td>
                            <td>02/07/2024</td>
                            <td><span class="status absent">Absent</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Section to mark presence -->
            <div class="presence-form">
                <h2>Marquer la Présence</h2>
                <form action="#" method="post">
                    <label for="course">Cours:</label>
                    <input type="text" id="course" name="course" required>
                    <label for="date">Date:</label>
                    <input type="date" id="date" name="date" required>
                    <button type="submit">Marquer Présence</button>
                </form>
            </div>
        </div>
    </div>
 <script src="../../Script/CurseurActive.js"></script>
</body>
</html>
