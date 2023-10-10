<?php

// INIT
require_once dirname(__FILE__) . "/../../config.php";
require_once dirname(__FILE__) . "/../fce.php";
require_once dirname(__FILE__) . "/../variableCheck.php";

if (isset($_GET['linka']) && $_GET['linka']!="") {

$conn = mysqli_connect($dbServer,$dbUzivatel,$dbHeslo,$dbDb);
if (!$conn) {echo "Nejaky problem s DB: " . $conn;}
MySQLi_query($conn, "SET NAMES 'UTF8'"); 
$sql = "SELECT fotogalerie FROM texty WHERE linka='" . $_GET['linka'] . "'";                                    
$result = MySQLi_query($conn, $sql);
mysqli_close($conn);
if (mysqli_num_rows($result) <= 0) {echo "Fotogalerie čeká na své zpracování nebo nejsou známy fotografie této linky. Pokud nějaké máte, <a href='mailto:info@tomaskrupicka.cz'>kontaktujte mě prosím</a>.";}
else
{
$t = MySQLi_fetch_assoc($result);
if ($t['fotogalerie']=="") {echo "Fotogalerie čeká na své zpracování nebo nejsou známy fotografie této linky. Pokud nějaké máte, <a href='mailto:info@tomaskrupicka.cz'>kontaktujte mě prosím</a>.";}
else echo $t['fotogalerie'];                                        
  
}} else {
	echo 'Na této záložce najdete odkaz na fotogalerii vážící se k dané lince. Pokračujte výběrem linky v horním menu.';
}