<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cadastra Funcionario</title>
</head>
<body>
  <form id="form1" name="form1" method="post" action="inserir_funcionario.php">
    <table border="0" cellspacing="7" cellpadding="0">
      <tr>
	  <center/>
        <td scope="col"><span class="letras">Nome</span>:</td>
        <td scope="col"><input name="nome" type="text" id="nome"  /></td>
        <td></td>
      </tr>
      <tr>
        <td scope="row">Autor: </td>
        <td><input name="autor" type="text" id="autor"  /></td>
      </tr>
<tr>
        <td scope="row">Editora: </td>
        <td><input name="editora" type="text" id="editora"  /></td>
      </tr>
      
	  
	   <td scope="row">Rua: </td>
        <td><input name="rua" type="text" id="rua"  /></td>
      </tr>
<tr>
	  
	  
	  
      <tr>
        <td scope="row">&nbsp;</td>
        <td><p>
          <input type="submit" name="button" id="button" value="Enviar" />
          <input type="reset" name="button2" id="button2" value="Redefinir" />
        </p></td>
      </tr>
    </table>
  </form>
  </div>
<a href="exibir_funcionario.php">Exibir</a><br />
</div>

</body>
</html>
