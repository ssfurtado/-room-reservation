<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=9" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<HTML>
<HEAD>
<TITLE>login</TITLE>
</HEAD>
<style type="text/css">
body{
background:url("images/bg.png");
}
#container-login{
position:absolute;
width:400px;
left: 50%;
top:50%;
margin-left: -200px;
margin-top: -113px;
height:226px;
background:;
text-decoration:none;
}
#container-login .bordacorpo form p #sendform{
height:29px; width:71px;
display:block; 
margin-left:175px; 
margin-top:8px; 
background:url(images/login_1.png);
background-position:0px 0px;
}
#container-login .bordacorpo form p #sendform:hover{
background-position:0px -29px;
}
#container-login table{
text-align:left;
}
.login_logo{
width:400px;
height:65px;
background:url("images/logo_1.png") center top no-repeat;
}
.bordatop{
background:url("images/bordatop.png") center top no-repeat;
height:18px;
width:400px;
}
.bordacorpo{
text-align:center;
background:url("images/bordacorpo.png");
width:400px;
height:auto;
}
.bordabottom{
background:url("images/bordabottom.png") center top no-repeat;
height:18px;
width:400px;
color:#FF0000;
text-align:center;
}
</style>
<BODY>
<?php
require ('connect_db.php');

@$idlogin = $_POST['idlogin'];
@$pwlogin = $_POST['pwlogin'];
if(isset($_POST['idlogin']) AND isset($_POST['pwlogin'])){
     $cont = 0;
     $sqlquery = "select * from tb_usuario where usuario_nome='$idlogin' and usuario_pw='$pwlogin'";
     $res = odbc_exec($connect, $sqlquery);
     while ($row = odbc_fetch_array($res)) {
           $_SESSION['usuario'] = $row['usuario_nome'];
		$_SESSION['pw'] = $row['usuario_pw'];
           $_SESSION['tipo_usuario'] = $row['usuario_tipo'];
           $cont = $cont + 1;
     }
     if($cont==1){

            setcookie("login", "authorized", time()+600);
            $_SESSION['login'] = 'Athorized';//cria a sessao se o login for autorizado
            header("Location:program.php");
     }elseif($cont>=1){
            echo "<script>window.alert('ERROR TO QUERY THE DATABASE - CALL THE ADMINISTRATOR.')</script>";
     }else{
            echo "<script>window.alert('INVALID USER OR INVALID PASSWORD.')</script>";
     }
}
?>
<!-- inicio o slidedown de requisicao de acesso-->
<style>
 #access { background:url(images/bg.png); display:none; float:left; text-align:center; position:absolute; z-index:1000; }
 </style>
<div id="access" style="height:<?php $h = $h+45; echo $h."px";?>; width:500px; margin-left:50%; left:-250px;">
<div style="position:absolute; margin-left:100%;"><a href='#' id="hide" style="font: bold 11px/1.5em Verdana;text-decoration:none;color:#FFF; background:url(images/logout.png); background-position:0% -22px;display:inline-block;width:59px;height:20px;font-size:80%;">close</a></div>
<!--Comeco-->
<?php
include ('formrequisicao/index.php');
?>
<!--fim-->
</div>  
<!-- fim o slidedown de requisicao de acesso-->
<div id="container-login">
<div class="bordatop"></div>
<div class="bordacorpo">
<div class="login_logo">
</div>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" name="login_1">
<input type="hidden" name="h" value="" />
<table align="center">
<tr><td>ID:</td><td><input type="text" name="idlogin" style="width:120px;" /></td></tr>
<tr><td>Pass:</td><td><input type="password" name="pwlogin" style="width:120px;" /></td></tr>
</table>
<p style="text-align:center;">
<a href="#" title="Enter in application." onclick='submit();' style="" id="sendform"></a>
</p>
</form>
<hr width="380" style="margin:20px 0px 15px 0px; padding:0px;">
<a href='#' id="showr" style="text-decoration:none;">If you need access click here</a>
</div>
<div class="bordabottom"></div>
<script>
$(document).ready(function() {	
$(document).keyup(function(e) {
if(e.which == 13){
document.forms["login_1"].submit();
}
});
}); 
</script>
</div>
</BODY>
</HTML>