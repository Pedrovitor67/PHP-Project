<?php
    // 1ª etapa
    $conexao = mysqli_connect("localhost","daniel","654321");
    // 2ª etapa
    $bd = mysqli_select_db($conexao,"bd_projeto1_php");