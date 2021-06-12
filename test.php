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
  $rcon->sendCommand("say Hello World!");
}
?>