<?php

// INIT
require_once dirname(__FILE__) . "/../../config.php";
require_once dirname(__FILE__) . "/../fce.php";
require_once dirname(__FILE__) . "/../variableCheck.php";

if (isset($_GET['linka']) && $_GET['linka']!="") {

$conn = mysqli_connect($dbServer,$dbUzivatel,$dbHeslo,$dbDb);
if (!$conn) {echo "Nejaky problem s DB: " . $conn;}
MySQLi_query($conn, "SET NAMES 'UTF8'"); 
$sql = "SELECT pohledridice FROM texty WHERE linka='" . $_GET['linka'] . "'";                                    
$result = MySQLi_query($conn, $sql);
mysqli_close($conn);
if (mysqli_num_rows($result) <= 0) {echo "Video linky čeká na své zpracování.";}
else
{
$t = MySQLi_fetch_assoc($result);
if ($t['pohledridice']=="") echo "Video linky čeká na své zpracování.";
echo  "<div style='text-align:left'>" . $t['pohledridice'] . "</div>";
  
}} else {
	echo 'Na této záložce najdete video linky zachycené z kabiny řidiče a krátký komentář. Pokračujte výběrem linky v horním menu.';
}

