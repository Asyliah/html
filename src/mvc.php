<?php

function getLayout($layoutName){
    //Faire correspondre le nom du layout avec une include correspondante
    $page = "./template/layout/".$layoutName . "_layout.inc.php";
    //J'aimerai vérifié l'existence de la page souhaité
    if(!file_exists($page)){
        die("La page n'existe pas");
    }
    include_once $page;
}

function getIncludes($includesName){
    $inc = "./template/includes/".$includesName . ".inc.php";
    if(!file_exists($inc)){
        die("La page n'existe pas");
    }
    include_once $inc;
}


// getLayout('html');
    
