<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Choix du Rôle</title>
  <link rel="stylesheet" href="CSS/all.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(112.1deg, rgb(32, 38, 57) 11.4%, rgb(63, 76, 119) 70.2%);
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .container {
      width: 90%;
      max-width: 1200px;
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 20px;
      text-align: center;
    }
    .role-box {
      flex: 1;
      min-width: 250px;
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s, box-shadow 0.3s;
    }
    .role-box:hover {
      transform: scale(1.05);
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }
    .role-box a {
      display: block;
      color: #007bff;
      text-decoration: none;
      font-size: 18px;
      margin-top: 10px;
      font-weight: bold;
    }
    .role-box a:hover {
      text-decoration: underline;
    }
    .title {
      font-size: 24px;
      margin-bottom: 20px;
      width: 100%;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="role-box">
      <h2 class="title">Enseignant</h2>
      <p>Accédez à votre espace enseignant pour gérer vos cours et vos élèves.</p>
      <a href="Pages/Connexion/Enseignant.php">Connexion Enseignant</a>
    </div>
    <div class="role-box">
      <h2 class="title">Administrateur</h2>
      <p>Accédez à votre espace administrateur pour gérer les utilisateurs et les paramètres.</p>
      <a href="Pages/Connexion/Admin.php">Connexion Administrateur</a>
    </div>
    <div class="role-box">
      <h2 class="title">Élève</h2>
      <p>Accédez à votre espace élève pour consulter vos cours et vos notes.</p>
      <a href="Pages/Connexion/Eleve.php">Connexion Élève</a>
    </div>
  </div>
</body>
</html>
