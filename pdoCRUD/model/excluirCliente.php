<?php
 require "../factory/conexao.php";
  $id=$_GET['id'];
  $conn = new Caminho;
  $query = "delete from tbcliente whre codcli = :id";
  $resultado = $conn->getconn, ()->prepare($query);
  $resultado->bindParam(":id"$id);



?>