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
    <link rel="stylesheet" href="../../CSS/AjoutCours.css">
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
    <div class="content w-full">
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
        <h1 class="relative">Cours</h1>
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
        <button class="add-course-btn" onclick="openModal()">
            <i class="fa fa-plus"></i>
        </button>
    </div>

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Ajouter un nouveau cours</h2>
            <form>
                <label for="courseName">Nom du cours</label>
                <input type="text" id="courseName" name="courseName" required>
                <label for="courseDesc">Description</label>
                <textarea id="courseDesc" name="courseDesc" rows="4" required></textarea>
                <label for="courseImage">Image du cours</label>
                <input type="file" id="courseImage" name="courseImage" accept="image/*">
                <label for="instructorImage">Image de l'instructeur</label>
                <input type="file" id="instructorImage" name="instructorImage" accept="image/*">
                <button type="submit" class="save-btn">Enregistrer</button>
            </form>
        </div>
    </div>

  <script src="../../Script/ajoutCours.js"></script>
  <script src="../../Script/CurseurActive.js"></script>
</body>
</html>
