<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Frais de Scolarité</title>
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
        .form-group input {
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
        .fees-table-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            overflow-x: auto;
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
            white-space: nowrap; /* Empêche les cellules de s'étendre au-delà de la largeur disponible */
        }
        th {
            background-color: #f8f9fa;
        }
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
            width: 400px;
            box-shadow: 0 5px 9px rgba(0, 0, 0, 0.2);
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
                    <a class="flex align-center fs-14 black rad-6 p-10" href="events.php">
                        <i class="fa-solid fa-calendar-day fa-fw"></i>
                        <span>Événements</span>
                    </a>
                </li>
                <li>
                    <a class="active flex align-center fs-14 black rad-6 p-10" href="fees.php">
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
            <h1 class="relative">Gestion des Frais de Scolarité</h1>
            <div class="wrapper grid gap-20">
                <!-- Add Fees Section -->
                <div class="card bg-white rad-10 p-20">
                    <h2 class="m-0">Ajouter des Frais</h2>
                    <form id="feesForm" class="mt-10">
                        <div class="form-group">
                            <label for="studentName">Nom de l'Élève</label>
                            <input type="text" id="studentName" name="studentName" class="p-10 m-border" required>
                        </div>
                        <div class="form-group">
                            <label for="amount">Montant</label>
                            <input type="number" id="amount" name="amount" class="p-10 m-border" required>
                        </div>
                        <div class="form-group">
                            <label for="Description">Description</label>
                            <input type="text" id="Description" name="Description" class="p-10 m-border" required>
                        </div>
                        <div class="form-group">
                            <label for="paymentDate">Date de Paiement</label>
                            <input type="date" id="paymentDate" name="paymentDate" class="p-10 m-border" required>
                        </div>
                        <button type="submit" class="btn-primary">Ajouter</button>
                    </form>
                </div>

                <!-- Fees List Section -->
                <div class="card card-fees-list rad-10 p-20">
                    <div class="fees-table-container">
                        <h2 class="m-0">Liste des Frais de Scolarité</h2>
                        <table id="feesTable" class="mt-10 w-full">
                            <thead>
                                <tr>
                                    <th>Nom de l'Élève</th>
                                    <th>Montant</th>
                                    <th>Description</th>
                                    <th>Date de Paiement</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Example Row -->
                                <tr>
                                    <td>Jean Dupont</td>
                                    <td>500 Ar</td>
                                    <td>Droit</td>
                                    <td>2024-06-15</td>
                                    <td>
                                        <button class="btn-edit" onclick="editRow(this)">Éditer</button>
                                        <button class="btn-delete" onclick="deleteRow(this)">Supprimer</button>
                                    </td>
                                </tr>
                                <!-- More rows can be added here -->
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Edit Modal -->
                <div id="editModal" class="modal hidden">
                    <div class="modal-content">
                        <h2 class="m-0">Éditer les Frais</h2>
                        <form id="editForm" class="mt-10">
                            <div class="form-group">
                                <label for="editStudentName">Nom de l'Élève</label>
                                <input type="text" id="editStudentName" name="studentName" class="p-10 m-border" required>
                            </div>
                            <div class="form-group">
                                <label for="editAmount">Montant</label>
                                <input type="number" id="editAmount" name="amount" class="p-10 m-border" required>
                            </div>
                            <div class="form-group">
                                <label for="editDescription">Description</label>
                                <input type="text" id="editDescription" name="Description" class="p-10 m-border" required>
                            </div>
                            <div class="form-group">
                                <label for="editPaymentDate">Date de Paiement</label>
                                <input type="date" id="editPaymentDate" name="paymentDate" class="p-10 m-border" required>
                            </div>
                            <input type="hidden" id="editRowIndex">
                            <button type="submit" class="btn-primary">Sauvegarder</button>
                            <button type="button" class="btn-secondary" onclick="closeEditModal()">Annuler</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../../Script/CurseurActive.js"></script>
    <script src="../../Script/ajoutFraisScol.js"></script>
</body>
</html>
