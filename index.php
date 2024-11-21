<?php

    include_once("TOPOFRONT");
    include_once("MENUFRONT");
    if (empty($_SERVER['QUERY_STRING'])) {
        $var = "conteudo.php";
        include_once($var);
    }else {
        $pg = $_GET["pg"];
        include_once("$pg.php");
    }

    include_once("RODAPEFRONT");