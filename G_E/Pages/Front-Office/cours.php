<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours</title>
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
            margin-left: 250px; 
            padding: 20px;
        }

        .content h1 {
            margin-top: 0;
        }

        .head {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px;
            background-color: #fff;
            border-bottom: 1px solid #ddd;
        }

        .search input[type="search"] {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .icons {
            display: flex;
            align-items: center;
        }

        .icons img {
            margin-left: 10px;
            border-radius: 50%;
        }

        .courses-page {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }

        .course {
            position: relative;
            background-color: #fff;
            border-radius: 6px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .course img.cover {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }

        .course .instructor {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }

        .course .p-20 {
            padding: 20px;
        }

        .description {
            color: #888;
            margin-top: 15px;
            font-size: 14px;
        }

        /* Classes utilitaires */
        .flex {
            display: flex;
        }

        .align-center {
            align-items: center;
        }

        .between-flex {
            justify-content: space-between;
        }

        .m-border {
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .fs-14 {
            font-size: 14px;
        }

        .black {
            color: #000;
        }

        .rad-6 {
            border-radius: 6px;
        }

        .p-10 {
            padding: 10px;
        }

        .p-20 {
            padding: 20px;
        }

        .relative {
            position: relative;
        }

        .txt-c {
            text-align: center;
        }

        .mt-0 {
            margin-top: 0;
        }

        .m-20 {
            margin: 20px;
        }

        .gap-20 {
            gap: 20px;
        }

        .grey {
            color: #888;
        }

        .fs-14 {
            font-size: 14px;
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
        <h1>Cours</h1>
        <div class="courses-page grid m-20 gap-20">
            <div class="course bg-white rad-6 relative">
                <img class="cover" src="../../IMG/course-01.jpg" alt="Course Poster">
                <img src="../../IMG/team-01.png" alt="Teacher" class="instructor">
                <div class="p-20">
                    <h4 class="m-0">Architecture MVC</h4>
                    <p class="description grey mt-15 fs-14">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea facilis quasi aliquid?
                    </p>
                </div>
            </div>
            <div class="course bg-white rad-6 relative">
                <img class="cover" src="../../IMG/course-02.jpg" alt="Course Poster">
                <img src="../../IMG/team-02.png" alt="Teacher" class="instructor">
                <div class="p-20">
                    <h4 class="m-0">IS</h4>
                    <p class="description grey mt-15 fs-14">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet repudiandae
                    </p>
                </div>
            </div>
            <div class="course bg-white rad-6 relative">
                <img class="cover" src="../../IMG/course-03.jpg" alt="Course Poster">
                <img src="../../IMG/team-03.png" alt="Teacher" class="instructor">
                <div class="p-20">
                    <h4 class="m-0">C#</h4>
                    <p class="description grey mt-15 fs-14">
                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, ipsa.
                    </p>
                </div>
            </div>
            <div class="course bg-white rad-6 relative">
                <img class="cover" src="../../IMG/course-04.jpg" alt="Course Poster">
                <img src="../../IMG/team-04.png" alt="Teacher" class="instructor">
                <div class="p-20">
                    <h4 class="m-0">Theorie des signals</h4>
                    <p class="description grey mt-15 fs-14">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis unde in ratione optio sed assumenda iusto
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script src="../../Script/CurseurActive.js"></script>
</body>
</html>
