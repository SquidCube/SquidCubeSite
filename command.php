<?php
    require_once('Rcon.php');

    $host = '149.202.149.138'; // Server host name or IP
    $port = 30360;                      // Port rcon is listening on
    $password = 'PassTest'; // rcon.password setting set in server.properties
    $timeout = 3;                       // How long to timeout.
    
    use Thedudeguy\Rcon;
    
    $rcon = new Rcon($host, $port, $password, $timeout);
    
    if ($rcon->connect())
    {
      $rcon->sendCommand("say Connection");
    }

    $rcon = new Rcon($host, $port, $password, $timeout);
    $pseudo = $_POST['pseudo']
    if ($rcon->connect())
        {
        $rcon->sendCommand("say $pseudo");
        }
?>

<!DOCTYPE html>
    <html>
        <body>
          <p>Bonjour, <?php echo htmlspecialchars($_POST['pseudo']); ?>.</p>
        </body>
    </html>