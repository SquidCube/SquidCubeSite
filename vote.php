<?php
    require_once('Rcon.php');

    $host = '149.202.149.138'; // Server host name or IP
    $port = 30360;                      // Port rcon is listening on
    $password = 'PassTest'; // rcon.password setting set in server.properties
    $timeout = 3;                       // How long to timeout.
    
    use Thedudeguy\Rcon;

?>

<!DOCTYPE html>
    <html>
        <head>
            <title>Voter - SquidCube</title>
            <link rel="stylesheet" href="style.css">
            <link rel="icon" href="sources/favicon.png">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <link rel="javascript" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
            <link rel="javascript" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js">
        </head>
        <body class="bg-custom2">
            <div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                <div class="container">
                    <a class="navbar-brand" href="#">SquidCube</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Accueil</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="vote.php">Voter
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Wiki</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://discord.gg/rxeC93ZQud" target="_blank">Discord</a>
                    </li>
                    </ul>
                </div>
                </div>
            </nav>
            
            <div>
                <p class="title">Voter</p>
                <p id="desc" class="text-muted">Vote sur les différents sites web ci-dessous<br>pour gagner des récompenses.</p>
            </div>
            <br />
            <center>
            <form name="form1" method="post">
            <input type="text" class="input_field"  name="pseudo" placeholder="Pseudo Minecraft">
            <br>
            <br>
            <input type="submit" name="bouton" value="Suivant">
            </form>
            </center>
            <?php
                $rcon = new Rcon($host, $port, $password, $timeout);
                $pseudo = $_POST['pseudo'];
                if ($rcon->connect())
                    {
                    $rcon->sendCommand("advote $pseudo 1");
                    }
            ?>
            
            
            <footer class="bg-light">
                <div class="bg-light py-4">
                  <div class="container text-center">
                    <p class="text-muted mb-0 py-2">© 2021 <a href="index.html" class="text-muted">SquidCube</a>, non affilié à Mojang AB.</p>
                  </div>
                </div>
              </footer>
              </div>
        </body>   
    </html>