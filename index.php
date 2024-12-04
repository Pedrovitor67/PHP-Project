<?php

   
  
    if(empty($_SERVER['QUERY_STRING'])){
        
        include "index.html";
        include_once($var);
    }else{
        $pg = $_GET['pg'];
        include_once("$pg.php");
    }

    //include "index.html";