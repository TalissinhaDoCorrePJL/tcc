<?php 
  $dbHost = 'localhost';
  $bdUsername ='root';
  $$bdPassword = '';
  $bdname = 'bdinbello';

  $conexao = new mysqli($dbHost,$bdUsername,$bdPassword,$bdname);

  if($conexao->connect_errno)
  {
      echo "Erro";
  }
  else 
  {
      echo " Conexão efetuada com sucesso";
  }
  ?>