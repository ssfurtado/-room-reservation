<?php
$consulta = $pdo->query("SELECT nome, autor FROM usuarios;");
 
  
while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
    echo "Nome: {$linha['nome']} - Usuário: {$linha['autor']}<br />";
}
?>