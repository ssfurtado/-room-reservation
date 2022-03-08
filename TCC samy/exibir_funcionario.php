<?php
include"config.php"; //incluindo o arquivo de conexao feito no passo2

//$y = mysql_query("SELECT * FROM usuarios");// selecionei a tabela que quero trabalhar que no caso e a que nois criamos no 1º passo
//while($x = mysql_fetch_array($y)){ //criei um array chamado $x que sera responssavel pra listar os dados a serem escolhido para ser deletado

$consulta = $pdo->query("SELECT * FROM usuarios;");
 
  
while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
    echo  "Id: {$linha['Id']} - Nome: {$linha['nome']} - Autor: {$linha['autor']}  - Editora: {$linha['editora']}  - Rua: {$linha['rua']}      <br />";
}





?>

