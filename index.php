<!DOCTYPE html>
    <html>
        <head>
            <title>Accueil - SquidCube</title>
            <meta charset="UTF-8">
            <link rel="icon" href="content/logo.png">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <link rel="stylesheet" href="style.css">
        </head>
        <body>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <script src='https://www.google.com/recaptcha/api.js?hl=fr'></script>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#">SquidCube</a>
              
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                  <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.php">Accueil<span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Wiki</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Discord &nbsp; &nbsp;</a>
                    </li>
                  <li class="nav-item">
                  <div class="dropdown">
                    <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Connexion
                     </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                     <a class="dropdown-item" href="#" data-toggle="modal" data-target="#login">Se connecter</a>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#signup">S'inscrire</a>
                        </div>
                        </div>
                  </li>
                  </ul>
                </div>
              </nav>

              <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Connexion</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <form method="post">
                      <label>Nom d'utilisateur :</label>
                      <input name="name" class="modal-content" type="text">
                      <br />
                      <label>Mot de Passe :</label>
                      <input name="pass" class= "modal-content" type="password">
                    
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                      <input type="submit" class="btn btn-primary" value="Connexion" name="submit">
                    </form>
                    </div>
                  </div>
                </div>
              </div>
                <?php
                  if (empty($_POST['name'])) {
                  }

                  else if ($_POST['name'] == "xanachocolat") {
                      if ($_POST['pass'] == "Code!Xana") {
                            ?>
                            <div class="alert alert-success" role="alert">
                             Tu as correctement été connecté
                            </div>
                            <?php
                      }
                      else {
                        ?>
                        <div class="alert alert-danger" role="alert">
                         Mauvais mot de passe 
                        </div>
                        <?php
                      }
                  }

                  else {
                    ?>
                    <div class="alert alert-warning" role="alert">
                     Cet utilisateur n'existe pas
                    </div>
                    <?php
                  }
                ?>
                <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Inscription</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <form method="post">
                      <label>Nom d'utilisateur :</label>
                      <input name="name" class="modal-content" type="text">
                      <br />
                      <label>Mot de Passe :</label>
                      <input name="pass" class= "modal-content" type="password">
                      <br />
                      <label>Confirmation Mot de Passe :</label>
                      <input name="pass" class= "modal-content" type="password">
                      <br />
                      <div class="g-recaptcha" data-theme="dark" data-sitekey="6Leq1DgbAAAAAD8VNfLGqZWHMN_hcZhZz8macU75"></div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                      <input type="submit" class="btn btn-primary" value="Inscription" name="submit">
                    </form>
                    </div>
                  </div>
                </div>
              </div>
                <div class="title">
                <p>SquidCube</p>
            </div>
            <br />
            <div class="desc">
                <p class="text-muted">Serveur Minecraft semi-rp en 1.16.5 avec un système d'économie,<br> de conquête spatiale et pleins d'objets, de blocs ou d'interfaces custom !</p>
            </div>
            <center>
            <div class="btn">
                <a href="#" class="btn1">squidcube.minesr.com</a>
                <a href="https://discord.gg/rxeC93ZQud" target="_blank" class="btn2">discord</a>
            </div>
                </center>
              <footer class="bg-light fixed-bottom">
                <div class="bg-light py-4">
                    <div class="container text-center">
                      <p class="text-muted mb-0 py-2">© 2021 <a href="index.html" class="text-muted">SquidCube</a>, non affilié à Mojang AB.</p>
                    </div>
                  </div>
              </footer>
        </body>
    </html>