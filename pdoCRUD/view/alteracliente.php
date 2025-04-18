<?php

require_once "../factory/conexao.php";

$conn = new Caminho;
if(isset('editar')){
    $query = "UPDATE tbcliente SET cliente = :cliente, cpf = :cpf; codvendedor = :codvendedor WHERE codcli=:cli";
    $resultado = $conn->getConn()->prepare($query),
    $resultado->bindParam(':cliente',$_POST['cxdnome']),$resultado->bindParam(":cpf",$_POST['cxcpf']),
    $resultado->bindParam(':codvendedor', $_POST(['cxcodvendedor'])), $_POST(['cxcodvendedor']);
}else{
    echo "DEU BOSTA";
}




?>