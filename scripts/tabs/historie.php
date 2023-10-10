<?php

// INIT
require_once dirname(__FILE__) . "/../../config.php";
require_once dirname(__FILE__) . "/../fce.php";
require_once dirname(__FILE__) . "/../variableCheck.php";

if (isset($_GET['linka']) && $_GET['linka']!="") {
$conn = mysqli_connect($dbServer,$dbUzivatel,$dbHeslo,$dbDb);
if (!$conn) {echo "Nejaky problem s DB: " . $conn;}
MySQLi_query($conn, "SET NAMES 'UTF8'"); 
$sql = "SELECT historie FROM texty WHERE linka='" . $_GET['linka'] . "'";                                    
$result = MySQLi_query($conn, $sql);
mysqli_close($conn);
if (mysqli_num_rows($result) <= 0) {echo "Záložka bude teprve doplněna.";}
else
{
$t = MySQLi_fetch_assoc($result);
if ($t['historie']=="") echo "Historie linky čeká na své zpracování.";
echo  "<div style='text-align:left'>" . $t['historie'] . "</div>";
  
}} else {
	echo 'Na této záložce najdete historii vývoje dané linky. Pokračujte výběrem linky v horním menu.';
}

