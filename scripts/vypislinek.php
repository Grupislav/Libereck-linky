<?php

require_once dirname(__FILE__) . "/../config.php";      
require_once dirname(__FILE__) . "/fce.php";       // skript s nekolika funkcemi

echo "<div class='hlavninadpis'><span class='font22 zelena'>" . mb_strtoupper($lang['provoznilinky'],'UTF-8') . "</span></div>";
echo "<div>";
//1
echo "    <a href='https://tomaskrupicka.cz/liberecke-linky/?linka=1'>
          <div class='barvaramecku historicke'>
          <font class='textlinek'>1</font>
          </div>
          </a>";

// tramvaje 1
$i=2;
while($i<=3)
{
echo "    <a href='https://tomaskrupicka.cz/liberecke-linky/?linka=".$i."'>
          <div class='barvaramecku tramvaje'>
          <font class='textlinek'>".$i."</font>
          </div>
          </a>";
$i++;          
}

//4
echo "    <a href='https://tomaskrupicka.cz/liberecke-linky/?linka=4'>
          <div class='barvaramecku historicke'>
          <font class='textlinek'>4</font>
          </div>
          </a>";

//5
echo "    <a href='https://tomaskrupicka.cz/liberecke-linky/?linka=5'>
          <div class='barvaramecku tramvaje'>
          <font class='textlinek'>5</font>
          </div>
          </a>";

//11
echo "    <a href='https://tomaskrupicka.cz/liberecke-linky/?linka=11'>
          <div class='barvaramecku tramvaje'>
          <font class='textlinek'>11</font>
          </div>
          </a>";
          
//autobusy denni
$i=12;
while($i<=30)
{
echo "    <a href='https://tomaskrupicka.cz/liberecke-linky/?linka=".$i."'>
          <div class='barvaramecku autobusy'>
          <font class='textlinek'>".$i."</font>
          </div>
          </a>";
$i++; 
}

//autobusy pracovni
$i=31;
while($i<=35)
{
echo "    <a href='https://tomaskrupicka.cz/liberecke-linky/?linka=".$i."'>
          <div class='barvaramecku pracovni'>
          <font class='textlinek'>".$i."</font>
          </div>
          </a>";
$i++; 
}

//36
echo "    <a href='https://tomaskrupicka.cz/liberecke-linky/?linka=36'>
          <div class='barvaramecku skolni'>
          <font class='textlinek'>36</font>
          </div>
          </a>";
          
//37
echo "    <a href='https://tomaskrupicka.cz/liberecke-linky/?linka=37'>
          <div class='barvaramecku pracovni'>
          <font class='textlinek'>37</font>
          </div>
          </a>";
                    
//38
echo "    <a href='https://tomaskrupicka.cz/liberecke-linky/?linka=38'>
          <div class='barvaramecku autobusy'>
          <font class='textlinek'>38</font>
          </div>
          </a>";
          
//39
echo "    <a href='https://tomaskrupicka.cz/liberecke-linky/?linka=39'>
          <div class='barvaramecku autobusy'>
          <font class='textlinek'>39</font>
          </div>
          </a>";           
                 
//autobusy skolni
$i=51;
while($i<=60)
{
echo "    <a href='https://tomaskrupicka.cz/liberecke-linky/?linka=".$i."'>
          <div class='barvaramecku skolni'>
          <font class='textlinek'>".$i."</font>
          </div>
          </a>";
$i++; 
}

//autobusy nocni a ranni
//93
echo "    <a href='https://tomaskrupicka.cz/liberecke-linky/?linka=93'>
          <div class='barvaramecku nocni'>
          <font class='textlinek'>93</font>
          </div>
          </a>";
          
//94
echo "    <a href='https://tomaskrupicka.cz/liberecke-linky/?linka=94'>
          <div class='barvaramecku nocni'>
          <font class='textlinek'>94</font>
          </div>
          </a>";
          
$i=97;
while($i<=99)
{
echo "    <a href='https://tomaskrupicka.cz/liberecke-linky/?linka=".$i."'>
          <div class='barvaramecku nocni'>
          <font class='textlinek'>".$i."</font>
          </div>
          </a>";
$i++;         
}        
          
//500
echo "    <a href='https://tomaskrupicka.cz/liberecke-linky/?linka=500'>
          <div class='barvaramecku nakupni'>
          <font class='textlinek'>500</font>
          </div>
          </a>";

//600
echo "    <a href='https://tomaskrupicka.cz/liberecke-linky/?linka=600'>
          <div class='barvaramecku nakupni'>
          <font class='textlinek'>600</font>
          </div>
          </a>";

echo "</div>";          
          
echo "<div class='hlavninadpis'><br><span class='font22 zelena'>" . mb_strtoupper($lang['neprovoznilinky'],'UTF-8') . "</span></div>";

//A-F
foreach(range('A','F') as $pismenko) 
{ 
echo "    <a href='https://tomaskrupicka.cz/liberecke-linky/?linka=".$pismenko."'>
          <div class='barvaramecku mimoprovoz'>
          <font class='textlinek'>".$pismenko."</font>
          </div>
          </a>";
} 

         
//6-8
$i=6;
while($i<=8)
{
echo "    <a href='https://tomaskrupicka.cz/liberecke-linky/?linka=".$i."'>
          <div class='barvaramecku mimoprovoz'>
          <font class='textlinek'>".$i."</font>
          </div>
          </a>";
$i++;          
}         
          
//40
echo "    <a href='https://tomaskrupicka.cz/liberecke-linky/?linka=40'>
          <div class='barvaramecku mimoprovoz'>
          <font class='textlinek'>40</font>
          </div>
          </a>";                    
          
//41
echo "    <a href='https://tomaskrupicka.cz/liberecke-linky/?linka=41'>
          <div class='barvaramecku mimoprovoz'>
          <font class='textlinek'>41</font>
          </div>
          </a>";
          
//44
echo "    <a href='https://tomaskrupicka.cz/liberecke-linky/?linka=44'>
          <div class='barvaramecku mimoprovoz'>
          <font class='textlinek'>44</font>
          </div>
          </a>";            
          
//50
echo "    <a href='https://tomaskrupicka.cz/liberecke-linky/?linka=50'>
          <div class='barvaramecku mimoprovoz'>
          <font class='textlinek'>50</font>
          </div>
          </a>";          
          
//71
echo "    <a href='https://tomaskrupicka.cz/liberecke-linky/?linka=71'>
          <div class='barvaramecku mimoprovoz'>
          <font class='textlinek'>71</font>
          </div>
          </a>";
          
//81
echo "    <a href='https://tomaskrupicka.cz/liberecke-linky/?linka=81'>
          <div class='barvaramecku mimoprovoz'>
          <font class='textlinek'>81</font>
          </div>
          </a>";
          
//autobusy nocni puvodni
$i=90;
while($i<=92)
{
echo "    <a href='https://tomaskrupicka.cz/liberecke-linky/?linka=".$i."'>
          <div class='barvaramecku mimoprovoz'>
          <font class='textlinek'>".$i."</font>
          </div>
          </a>";
$i++;         
}                                               
  
//161
echo "    <a href='https://tomaskrupicka.cz/liberecke-linky/?linka=161'>
          <div class='barvaramecku mimoprovoz'>
          <font class='textlinek'>161</font>
          </div>
          </a>"; 
          
//201
echo "    <a href='https://tomaskrupicka.cz/liberecke-linky/?linka=201'>
          <div class='barvaramecku mimoprovoz'>
          <font class='textlinek'>201</font>
          </div>
          </a>"; 
          
//301
echo "    <a href='https://tomaskrupicka.cz/liberecke-linky/?linka=301'>
          <div class='barvaramecku mimoprovoz'>
          <font class='textlinek'>301</font>
          </div>
          </a>"; 
                                                    