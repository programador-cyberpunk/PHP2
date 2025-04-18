<?php
    require_once "../factory/conexao.php";
    $cliente = $_POST['cxbusca'];
    $conn = new Caminho;
    $consulta="select *from tbcliente where 
    cliente= '$cliente'";
    $resultado = $conn->getConn()->
    prepare($consulta);
    $resultado->execute();
    if($resultado->rowcount()->0){
          echo "
            <script>
            alert('Cliente localizado');
            </script>
          ";
    }else{
        echo "
        <script>
            alert('Cliente não localizado');
            window.location.href = 
            '../view/cadcliente.php';
        </script>
     ";
    }
?>
<div id="cxcliente">
    <?php
        $linha = $resultado->fetch
        (PDO::FETCH_ASSOC);
        echo $linha["cliente"];
        echo $linha["cpf"];
        echo $linha["codvendedor"];
    ?>
    <a href="alteracliente.php?id=<?php echo $linha['codcli']?>">Alterar</a>
   <a href="">Excluir</a> 
</div>