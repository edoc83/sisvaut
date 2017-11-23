<?php
	session_start();
	include_once("conexion.php");
	if (isset($_POST["btnEntrar"])){
		$consulta="select * from usuario where usuario.login='".$_POST["usuario"]."' and usuario.clave='".$_POST["clave"]."'";
		$ssql=mysql_query($consulta,$conexion) or die(mysql_error());
		$reconsul=mysql_fetch_array($ssql);
		if (mysql_num_rows($ssql)<=0){
			echo "<script languaje='JavaScript'>alert('Usuario y Clave no son iguales verifiquelo');</script>";
		}
		else {
			session_start();
			$_SESSION["usuarioroot"]=$reconsul["usuario"];
			header("Location:index.php");

		}
	}
	?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="images/Ticse.png" rel="shortcut icon" type="image/x-icon" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<!--<link href="css/style.css" rel="stylesheet" type="text/css" />-->
<title>Acceso SISVAUT</title>
<script>
  function sf(usuario){
    document.FormAcceso.usuario.focus();
  }
</script> 
<script languaje="JavaScript">
    function Validar(){
	//Campo Usuario
	//Valida que Usuario NO este vacio
	if(document.FormAcceso.usuario.value.length==0)
		{
		 alert("Debe indicar un Usuario");
		 document.FormAcceso.usuario.focus();
		 return false;
		}
	//Campo Clave
	//Valida que Clave NO este vacio
	if(document.FormAcceso.clave.value.length==0)
		{
		 alert("Debe indicar una Clave");
		 document.FormAcceso.clave.focus();
		 return false;
		}
		    return true;
		}
</script>
</head>
<body onload="sf('usuario');">
<div id="contenedor">
    <header>
        <div class="container">
          <div class="col-md-3"><img src="images/barner1.jpg" width="200" height="105" /></div>
          <div class="col-md-6">
            <center><strong>UNIVERSIDAD CENTRAL DE VENEZUELA<br>DIRECCI&Oacute;N DE SERVICIOS ESTUDIANTILES<br>
            TECNOLOG&Iacute;A DE INFORMACI&Oacute;N Y COMUNICACI&Oacute;N<br>
            <h2>CONTROL DE ACCESO SISVAUT</h2></strong></center>
          </div>
          <div class="col-md-3"><img src="images/barner2.jpg" width="222" height="105" /></div>
        </div>
    </header>
    <div class="container" >
    <section class="main row">
        <aside class="col-md-3">
        </aside>   
            <!--<fieldset style="width:45%" >-->
                <form class="col-md-6" action="acceso.php" method="post" name="FormAcceso" id="FormAcceso" autocomplete="off" onSubmit="return Validar()" >
                    <table border="0" >
                        <tr>
                            <td align="left">Usuario: 
                            <input type="text" name="usuario" id="usuario"  style="background:url('images/icon/user.png')no-repeat right center">
                            </td>
                        </tr>
                        <tr>
                            <td align="left">Clave: 
                                <input type="password" name="clave" id="clave"  style="background:url('images/icon/lock.png')no-repeat right center" />
                            </td>
                        </tr>
                    </table>
                    <br>
                    <table>  
                        <tr>
                            <td align="center">
                                <input type="submit" class="btn btn-primary btn-lg" id="btnEntrar" name="btnEntrar" value="Entrar" />
                                <br /><br />
                                <a href="http://190.169.221.54/ServicioTICSE/Solicitud.php"><< Olvido de Clave >></a>
                            </td>
                        </tr>
                    </table>
                </form>
            <!--</fieldset> -->   
        <aside class="col-md-3">
            
        </aside>
            <br />   
    </section>
    </div> 
    </div> 
    <div class="col-md-3" align="right"><img src="images/ticse.jpg" width="40" height="40"/><br></div>
    <div id="copy_r"  class="col-md-6" align="center">
    Tecnolog&iacute;a de Informaci&oacute;n y Comunicaci&oacute;n Servicios Estudiantiles
    Copyright &copy 2016    Todos los derechos reservados| Universidad Central de Venezuela | Direcci&oacute;n de Servicios Estudiantiles Campus Maracay
    </div>  
    <dir class="col-md-3"></dir>
</div>
 <script src="js/jquery2.js"></script>
 <script src="js/bootstrap.min.js"></script>
</body>
</html>