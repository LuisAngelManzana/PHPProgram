<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Gracias</title>

<body>
<p align="center">
  <?php
$fecha=date("j-n-Y");
$tema=$_POST['tema'];
$comentario=$_POST['comentario'];
$sexo=$_POST['txtsexo'];

$fp=fopen("texto.txt","a+");
if ($sexo == "F") {
	
$salida="<table width='322' border='1' cellpadding='2' cellspacing='1' bordercolor='#FF1493' bgcolor='#FF1493'>
  <tr>
    <td width='312'><div align='center'>$tema</div></td>
  </tr>
  <tr>
    <td><div align='center'>$comentario</div></td>
  </tr>
</table>";
} else{
    $salida="<table width='322' border='1' cellpadding='2' cellspacing='1' bordercolor='#000000' bgcolor='#FFFFFF'>
  <tr>
    <td width='312'><div align='center'>$tema</div></td>
  </tr>
  <tr>
    <td><div align='center'>$comentario</div></td>
  </tr>
</table>";
}

fwrite($fp,$salida);
fclose($fp);

?>
</p>
<p align="center"><a href="LV1.php">regresar</a></p>
</body>

</html>
