<?php
session_start();
require_once('functions.php');
$username = $_POST['username'];
$gebruikersnaam = $_SESSION['Username'];

$user = 'root';
$pass = 'root';
$db = new PDO('mysql:host=vierkantewielen_db_1;dbname=VierkanteWielenDB', $user, $pass);
$ID = $db->query("SELECT AccountID FROM Accounts WHERE Username = '$gebruikersnaam'");
$result = $ID->fetch();
$string = $result[0];
$accountID = intval($string);
db->query("UPDATE Accounts SET Username = $username WHERE Username = '$gebruikersnaam'");
header("loction: editaccinfo.php");
?>