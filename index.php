<?php
require "./config.php";         // skript s nastavenim
//require "./scripts/db.php";        // skript s databazi
require "./scripts/fce.php";       // skript s nekolika funkcemi

{

//JAZYK A JEDNOTKA
require_once "scripts/variableCheck.php";


    ?>
    <!DOCTYPE html>
    <html>

    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-70474721-2"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-70474721-2');
        </script>
        <title><?php echo $lang['titulekstranky']; ?></title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/css.css" type="text/css">
        <meta NAME="description" CONTENT="<?php echo $lang['popisstranky']; ?>">
        <meta NAME="author" CONTENT="Tomáš Krupička (https://tomaskrupicka.cz)">
        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="scripts/js/jquery.tools.ui.timer.colorbox.tmep.highcharts.js" type="text/javascript"></script>
        <script type="text/javascript">

            var loadingImage = '<p><img src="./images/loading.gif"></p>';

            function loadTab(tab) {
                if ($("#" + tab).html() == "") {
                    $("#" + tab).html(loadingImage);
                    $.get("scripts/tabs/" + tab + ".php<?php echo "?linka={$_GET['linka']}&ja={$l}"; ?>", function (data) {
                        $("#" + tab).html(data);
                    });
                }
            }
        </script>

    </head>

    <body>

    <?php

  echo "<div class='roztahovak-modry'>
        <div class='hlavicka container'>
        <div id='nadpis'><h1>".$lang['hlavninadpis']."</h1></div>

        <div id='menu'><nav><ul>".menuJazyky($jazyky, $l)."</ul></nav></div>

        </div>
        </div>";

    // Vršek
    require_once "./scripts/head.php";

    ?>

    <div id='hlavni' class="container">

        <?php

        // Záložky
echo "<div id=\"oblastzalozek\">
  <ul class=\"tabs\">
    <li><a href=\"#prehled\">{$lang['prehled']}</a></li>    
    <li><a href=\"#historie\" onclick=\"loadTab('historie');\">{$lang['historie']}</a></li>
    <li><a href=\"#pohledridice\" onclick=\"loadTab('pohledridice');\">{$lang['pohledridice']}</a></li>
    <li><a href=\"#mistopis\" onclick=\"loadTab('mistopis');\">{$lang['mistopis']}</a></li>
    <li><a href=\"#mapa\" onclick=\"loadTab('fotogalerie');\">{$lang['fotogalerie']}</a></li>

  </ul>

  <div class=\"panely\">";
        echo "<div id=\"prehled\">";
        require "scripts/tabs/prehled.php";
        echo "</div>";
        echo "<div id=\"historie\"></div>";
        echo "<div id=\"pohledridice\"></div>";
        echo "<div id=\"mistopis\"></div>";
        echo "<div id=\"fotogalerie\"></div>";
        echo "</div>
  </div>


       </div>";

        // Patička
        echo "<div class='roztahovak-modry'>
          <div class='paticka container'><p>{$lang['paticka']}</p></div>
        </div>";

        ?>

    </body>
    </html>
    <?php
} 