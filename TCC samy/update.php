<?php
  
$nome		=	$_POST['nome'];
$autor		=	$_POST['autor'];
$editora	=	$_POST['editora'];	
$rua        =   $_POST['rua'];	
  
    include_once 'config.php';    
      
    $sql = "update usuarios set 
            nome = '".$nome."', autor = '".$autor."',editora = '".$editora."',rua = '".$rua."'
            where idcliente = ".$id;
  
    if(mysql_query($sql,$con)){
        $msg = "Atualizado com sucesso!";
    }else{
        $msg = "Erro ao atualizar!";
    }
    mysql_close($con);    
      
    ?>