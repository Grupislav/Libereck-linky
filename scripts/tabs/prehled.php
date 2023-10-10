<?php

// INIT
require_once dirname(__FILE__) . "/../../config.php";
require_once dirname(__FILE__) . "/../fce.php";
require_once dirname(__FILE__) . "/../variableCheck.php";

if (isset($_GET['linka'])) {

$conn = mysqli_connect($dbServer,$dbUzivatel,$dbHeslo,$dbDb);
if (!$conn) {echo "Nejaky problem s DB: " . $conn;}
MySQLi_query($conn, "SET NAMES 'UTF8'"); 
$sql = "SELECT trasa, zastavky, funkce, mapa FROM texty WHERE linka='" . $_GET['linka'] . "'";                                    
$result = MySQLi_query($conn, $sql);
mysqli_close($conn);
if (mysqli_num_rows($result) <= 0) {echo "Záložka bude teprve doplněna.";}
else
{
$t = MySQLi_fetch_assoc($result);

echo "<span class='font25'>" . $t['trasa'] . "</span><br>
      <br><span class='font22 zelena'>" . mb_strtoupper($lang['funkce'],'UTF-8') . "</span><br>

      <div style='text-align:left'>" . $t['funkce'] . "</div>
      <div class='row'>    
      <div class='col-md-6 dvasloupce'>

          <br><span class='font22 zelena'>" . mb_strtoupper($lang['seznamzastavek'],'UTF-8') . "</span><br>

      <div style='text-align:left'>" . $t['zastavky'] . "</div>
      </div>
      <div class='col-md-6 dvasloupce'>    

          <br><span class='font22 zelena'>" . mb_strtoupper($lang['mapa'],'UTF-8') . "</span><br>

      <iframe style='border:none' src='" . $t['mapa'] . "' width='500' height='333'></iframe>
      </div>

      </div>";
  
}} else {
	echo "Na této záložce najdete základní informace o dané lince. Pokračujte výběrem linky v horním menu.";
}

 
