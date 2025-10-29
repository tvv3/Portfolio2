<?php
$i=4;
$titlu="Agenda Web";//se fol in title si in #aboutProject
$demolink="#";
$descriere_about="Realizat cu PHP si baza de date Mysql";//se fol in sectiunea descriere adica #aboutProject
$descriere_detaliata_proiect="Proiectul Agenda Web este realizat in php obiectual si mysql, html, css, javascript. 
                    In primul ecran este solicitata o parola de acces, agenda apartinand unui singur
                     utilizator/grup de utilizatori care doreste sa aiba acces de oriunde la baza de date asociata agendei. Nu a fost necesar in acest proiect sa se faca logarea cu useri si roluri.
                     Se introduc site-urile si canalele asociate site-urilor si exista pagini de cautare/afisare a site-urilor si canalelor din agenda.
                     Agenda web este un site responsive.";
//$imgfull="assets/img/portfolio/proj".$i."/fullsize/"; //cale proj
//$imgthmb="assets/img/portfolio/proj".$i."/thumbnails/";//cale proj
$nr=3;//number of images
$imgdescr[1]=$titlu." - 1";
$imgdescr[2]=$titlu." - 2";
$imgdescr[3]=$titlu." - 3";

$alt=array(1=>"alt1",2=>"alt2",3=>"alt3");

require("views/proj-master.php");
?>