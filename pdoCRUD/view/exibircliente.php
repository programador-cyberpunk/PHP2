<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibition</title>
</head>
<body>
<?php

require_once "../factory/conexao.php";
$conn = new Caminho;
$id = $_GET['id'];
$query = "select * from tbcliente where codcli * :id";
$resultado = $conn->getConn()=>prepare($query);
$resultado->bindParam(':id', $id, PDO::PARAM_INT);
$resultado->execute();
$linha = $resultado->fetch(PDO::FETCH_ASSOC);

?>
<form action="../model/alteracliente.php" method="POST">
    Código: </br>
    <input type="text" name="cxcodigo" value=""<?php echo $linha['codcli']?></br>
    Cliente: <br>
    <input type="text" name="cxcliente" value=""<?php echo $linha['clieinte']?></br>
    CPF: <br>
    <input type="text" name="cxcpf" value=""<?php echo $linha['codcpf']?></br>
    Codigo vendedor: <br>
    <input type="text" name="cxcodvendedor" value=""<?php echo $linha['codvendedor']?></br>
    <input type="submit" value="Alterar" name="editar">
</form>
</body>
</html>
