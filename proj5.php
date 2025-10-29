<?php
$i=5;
$titlu="Agenda";//se fol in title si in #abouProject
$demolink="#";
$descriere_about="Realizat cu C# si baza de date SQLITE.";//se fol in sectiunea descriere adica #aboutProject
$descriere_detaliata_proiect="Proiectul Agenda este realizat in C# si baza de date SQLITE. In ecranul principal se salveaza site-urile cu posibilitatea alegerii dintr-o tabela de categorii (form separat). Se vizualizeaza site-urile introduse intr-un grid cu paginare si exista posibilitatea de a cauta / filtra site-urile.";
//$imgfull="assets/img/portfolio/proj".$i."/fullsize/"; //cale proj
//$imgthmb="assets/img/portfolio/proj".$i."/thumbnails/";//cale proj
$nr=1;//number of images
$imgdescr[1]=$titlu." - 1";
/*$imgdescr[2]="Sala Gym 8 - 2";
$imgdescr[3]="Sala Gym 8 - 3";

$imgdescr[4]="Sala Gym 8 - 4";
$imgdescr[5]="Sala Gym 8 - 5";
$imgdescr[6]="Sala Gym 8 - 6";*/

$alt=array(1=>"alt1");

require("views/proj-master.php");
?>