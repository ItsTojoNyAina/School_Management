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
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh;
        }
        .sidebar {
            width: 250px;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            height: 100%;
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
            flex: 1;
            padding: 20px;
            overflow-y: auto;
            box-sizing: border-box;
        }
        .container {
            width: 100%;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
        }
        .grades {
            list-style-type: none;
            padding: 0;
        }
        .grades li {
            margin-bottom: 10px;
            padding: 10px;
            background-color: #f9f9f9;
            border-radius: 6px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .grades li span {
            font-weight: bold;
        }
        .grades input {
            width: 50px;
            padding: 5px;
            margin-left: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        .save-btn {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #021e31;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 20px;
        }
        .save-btn:hover {
            background-color: #032c47;
        }
    </style>
</head>
<body>
    <div class="sidebar">
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
    <div class="content">
        <div class="container">
            <h1>Notes</h1>
            <form action="../../php/traitement_notes.php" method="POST">
                <ul class="grades">
                    <li>
                        <span>Nom:</span>
                        <input type="text" name="nom" value="Tojo">
                    </li>
                    <li>
                        <span>MVC:</span>
                        <input type="text" name="mvc" value="12">
                    </li>
                    <li>
                        <span>C#:</span>
                        <input type="text" name="csharp" value="15">
                    </li>
                    <li>
                        <span>TDN:</span>
                        <input type="text" name="tdn" value="10">
                    </li>
                    <li>
                        <span>TDS:</span>
                        <input type="text" name="tds" value="11">
                    </li>
                    <li>
                        <span>MERISE:</span>
                        <input type="text" name="merise" value="14">
                    </li>
                </ul>
                <button type="submit" class="save-btn">Sauvegarder</button>
            </form>
        </div>
    </div>
    <script src="../../Script/CurseurActive.js"></script>
</body>
</html>
