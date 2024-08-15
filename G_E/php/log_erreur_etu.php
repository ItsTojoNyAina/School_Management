<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in & Sign up Form</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <link rel="stylesheet" href="../CSS/Sign.css" />
  </head>
  <body>
    
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
                    <form action="traitement_log.php" class="sign-in-form" method="post">
                          <h2 class="title">S'identifier</h2>
                          <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" placeholder="Nom d'utilisateur" name="nom_i" required/>
                          </div>
                          <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" placeholder="Mot De Passe" name="mdp_i" required/>
                          </div>
                          <p style="color:red">Nom d'utilisateur ou mot de passe incorrect</p>
                          <input type="submit" value="S'identifier" class="btn solid" />
                    </form>




                    <form action="traitement_inscri.php" class="sign-up-form" method="post">
                            <h2 class="title">S'enregistrer</h2>
                            <div class="input-field">
                              <i class="fas fa-user"></i>
                              <input type="text" placeholder="Nom d'utilisateur" name="nom" id="nom" required/>
                            </div>
                            <div class="input-field">
                              <i class="fas fa-envelope"></i>
                              <input type="text" placeholder="Classe" name="classe" id="classe" required/>
                            </div>
                            <div class="input-field">
                              <i class="fas fa-lock"></i>
                              <input type="password" placeholder="Mot De Passe" name="mdp" id="mdp" required/>
                            </div>
                            <input type="submit" class="btn" value="S'inscrire" />
                    </form>


        </div>


      

      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Nouveau ?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn transparent" id="sign-up-btn">S'inscrire</button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Vous avez deja un compte ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              S'identifier
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="../Script/Sign.js"></script>
  </body>
</html>
