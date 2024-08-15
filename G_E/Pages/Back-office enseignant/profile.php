<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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
        <!-- Start Content -->
        <div class="content w-full">
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
            <h1 class="relative">Profil</h1>
            <div class="profile-page m-20">
                <div class="overview bg-white rad-10 flex mb-20 align-center">
                    <div class="avatar-box">
                        <img class="mb-10 rad-half" src="../../IMG/avatar.png" alt="Avatar">
                        <h3 class="m-0 ">Rakoto</h3>
                        <p class="grey mt-10">Professeur</p>
                        <div class="level rad-6 eee relative">
                            <span style="width: 70%"></span>
                        </div>
                        <div class="rating mt-10 mb-10">
                            <i class="fa-solid fa-star c-orange fs-13"></i>
                            <i class="fa-solid fa-star c-orange fs-13"></i>
                            <i class="fa-solid fa-star c-orange fs-13"></i>
                            <i class="fa-solid fa-star c-orange fs-13"></i>
                            <i class="fa-solid fa-star c-orange fs-13"></i>
                        </div>
                    </div>
                    <div class="info-box">
                        <!-- Start Info Row -->
                        <div class="box p-20 flex">
                            <h4 class="grey fs-15 m-0 w-full">Information</h4>
                            <div class="fs-14">
                                <div>
                                    <span class="grey">Nom:</span>
                                    <span class="mr-15">Rakoto</span>
                                </div>
                            </div>
                            <div class="fs-14">
                                <div>
                                    <span class="grey">Genre:</span>
                                    <span>Male</span>
                                </div>
                            </div>
                            <div class="fs-14">
                                <div class="mb-20">
                                    <span class="grey">Pays: </span>
                                    <span class="mr-15">Any EHh</span>
                                </div>
                            </div>
                            <div class="fs-14">
                                <div>
                                <span class="grey">Email</span>
                                <span>emaill@website.com</span>
                                </div>
                            </div>
                        </div>
                      
                       
                    </div>
                </div>
        </div>
       
    </div>
    
</div>
<script src="../../Script/CurseurActive.js"></script>
</body>
</html>