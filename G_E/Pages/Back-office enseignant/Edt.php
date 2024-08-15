<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emploi du Temps</title>
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
          .sidebar ul li a.active {
            background-color: #f0f0f0;
            font-weight: bold;
        }

         .sidebar ul li a:hover {
            background-color: #f0f0f0;
            font-weight: bold;
        }
        .content{
            width: 80%;
            margin: 0 auto;

        }
        .content h2{
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        td:nth-child(1){
            background-color: antiquewhite;
        }
        input{
            outline: none;
            border: none;
            background-color: transparent;
            width: 100%;
            height: 100%;
            caret-color: black;
        }
        .button {
        background-color: #ddd;
        border: none;
        color: black;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: block;
        margin: 4px auto;
        cursor: pointer;
        border-radius: 16px;
        justify-content: center;

        }
        
        .button:hover {
        background-color: #f1f1f1;
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
                    <a class="active flex align-center fs-14 black rad-6 p-10" href="Edt.php">
                        <i class="fa-regular fa-calendar"></i>
                        <span>Emplois du temps</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- End Sidebar -->
        
        <!-- Start Main Content -->
        <div class="content">
            <h2>Emploi du Temps</h2>
            <form action="">
            <table>
                <thead>
                    <tr>
                        <th>Horaire</th>
                        <th>Lundi</th>
                        <th>Mardi</th>
                        <th>Mercredi</th>
                        <th>Jeudi</th>
                        <th>Vendredi</th>
                        <th>Samedi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>08:00 - 09:00</td>
                        <td><input type="text"></td>
                        <td><input type="text"></td> 
                        <td><input type="text"></td> 
                        <td><input type="text"></td> 
                        <td><input type="text"></td> 
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td>09:00 - 10:00</td>
                        <td><input type="text"></td>
                        <td><input type="text"></td> 
                        <td><input type="text"></td> 
                        <td><input type="text"></td> 
                        <td><input type="text"></td> 
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td>10:00 - 11:00</td>
                        <td><input type="text"></td>
                        <td><input type="text"></td> 
                        <td><input type="text"></td> 
                        <td><input type="text"></td> 
                        <td><input type="text"></td> 
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td>11:00 - 12:00</td>
                        <td><input type="text"></td>
                        <td><input type="text"></td> 
                        <td><input type="text"></td> 
                        <td><input type="text"></td> 
                        <td><input type="text"></td> 
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td>12:00 - 13:00</td>
                        <td><input type="text"></td>
                        <td><input type="text"></td> 
                        <td><input type="text"></td> 
                        <td><input type="text"></td> 
                        <td><input type="text"></td> 
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td>13:00 - 14:00</td>
                        <td><input type="text"></td>
                        <td><input type="text"></td> 
                        <td><input type="text"></td> 
                        <td><input type="text"></td> 
                        <td><input type="text"></td> 
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td>14:00 - 15:00</td>
                        <td><input type="text"></td>
                        <td><input type="text"></td> 
                        <td><input type="text"></td> 
                        <td><input type="text"></td> 
                        <td><input type="text"></td> 
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td>15:00 - 16:00</td>
                        <td><input type="text"></td>
                        <td><input type="text"></td> 
                        <td><input type="text"></td> 
                        <td><input type="text"></td> 
                        <td><input type="text"></td> 
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td>16:00 - 17:00</td>
                        <td><input type="text"></td>
                        <td><input type="text"></td> 
                        <td><input type="text"></td> 
                        <td><input type="text"></td> 
                        <td><input type="text"></td> 
                        <td><input type="text"></td>
                    </tr>
                </tbody>
            </table>
            <button class="button" type="submit">Soumettre</button>
        </form>
        </div>
        <!-- End Main Content -->
    </div>
    <script src="../../Script/CurseurActive.js"></script>
</body>
</html>
