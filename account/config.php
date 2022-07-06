<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = 'F18bb123';
    $dbName = 'sodre';

    $conex = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    //if($conex->connect_errno){
        //echo "Erro";
    //}else{
      //  echo "Conexão feita com sucesso !";
  //  }

?>