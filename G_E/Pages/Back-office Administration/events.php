<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Événements</title>
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
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            background-color: #fff;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            font-weight: 600;
            margin-bottom: 5px;
        }
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .btn-primary {
            background-color: #007bff;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .btn-secondary {
            background-color: #6c757d;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
        }
        .btn-edit {
            background-color: #ffc107;
            color: #212529;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-edit:hover {
            background-color: #e0a800;
        }
        .btn-delete {
            background-color: #dc3545;
            color: #fff;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-delete:hover {
            background-color: #c82333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f8f9fa;
        }
        .hidden {
            display: none;
        }
        /* Modal Styles */
        .modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            display: none;
        }
        .modal-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            width: 500px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <div class="page flex">
        <!-- Start Sidebar -->
        <div class="sidebar bg-white p-20 p-relative">
            <h3 class="relative txt-c mt-0">Administration</h3>
            <ul>
                <li>
                    <a class="flex align-center fs-14 black rad-6 p-10" href="#">
                        <i class="fa-regular fa-user fa-fw"></i>
                        <span>Utilisateurs</span>
                    </a>
                </li>
                <li>
                    <a class="active flex align-center fs-14 black rad-6 p-10" href="events.php">
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
            <h1 class="relative">Gestion des Événements</h1>
            <div class="wrapper grid gap-20">
                <!-- Add Event Section -->
                <div class="card bg-white rad-10 p-20">
                    <h2 class="m-0">Ajouter un Événement</h2>
                    <form id="eventForm" class="mt-10">
                        <div class="form-group">
                            <label for="eventTitle">Titre</label>
                            <input type="text" id="eventTitle" name="eventTitle" class="p-10 m-border" required>
                        </div>
                        <div class="form-group">
                            <label for="eventDate">Date</label>
                            <input type="date" id="eventDate" name="eventDate" class="p-10 m-border" required>
                        </div>
                        <div class="form-group">
                            <label for="eventDescription">Description</label>
                            <textarea id="eventDescription" name="eventDescription" rows="4" class="p-10 m-border" required></textarea>
                        </div>
                        <button type="submit" class="btn-primary">Ajouter</button>
                    </form>
                </div>

                <!-- Event List Section -->
                <div class="card bg-white rad-10 p-20">
                    <h2 class="m-0">Liste des Événements</h2>
                    <table id="eventsTable" class="mt-10 w-full">
                        <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Date</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Example Row -->
                            <tr>
                                <td>Examen</td>
                                <td>2024-09-10</td>
                                <td>Debut Exam 1ere et 5eme annee<td>
                                    <button class="btn-edit" onclick="editRow(this)">Éditer</button>
                                    <button class="btn-delete" onclick="deleteRow(this)">Supprimer</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Edit Modal -->
            <div id="editModal" class="modal hidden">
                <div class="modal-content">
                    <h2 class="m-0">Éditer l'Événement</h2>
                    <form id="editForm" class="mt-10">
                        <div class="form-group">
                            <label for="editEventTitle">Titre</label>
                            <input type="text" id="editEventTitle" name="eventTitle" class="p-10 m-border" required>
                        </div>
                        <div class="form-group">
                            <label for="editEventDate">Date</label>
                            <input type="date" id="editEventDate" name="eventDate" class="p-10 m-border" required>
                        </div>
                        <div class="form-group">
                            <label for="editEventDescription">Description</label>
                            <textarea id="editEventDescription" name="eventDescription" rows="4" class="p-10 m-border" required></textarea>
                        </div>
                        <input type="hidden" id="editRowIndex">
                        <button type="submit" class="btn-primary">Sauvegarder</button>
                        <button type="button" class="btn-secondary" onclick="closeEditModal()">Annuler</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="../../Script/AjoutEvent.js"></script>
</body>
</html>
