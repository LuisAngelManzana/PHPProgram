<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Visitas</title>
</head>

<body>
  <h1 align="center">LIBRO DE VISITAS</h1>
<form id="form1" name="form1" method="post" action="LV2.php" onsubmit="return verifica()">
        <table width="238" border="1" align="center" cellpadding="5" cellspacing="0" bgcolor="#FFFFFF">
              <tr>
                <td colspan="2"><div align="center" class="style30 style44">FIRMA AQUI</div></td>
              </tr>
              <tr>
                <td width="71"><span class="style21 style29 style44">Nombre</span></td>
                <td width="161" bgcolor="#FFFFFF"><div align="left" class="style29">
                    <input name="tema" type="text" id="tema" size="20" />
                </div></td>
              </tr>
              <tr>
                <td width="71"><span class="style21 style29 style44">Sexo</span></td>
                <td width="161" bgcolor="#FFFFFF"><div align="left" class="style29">
                    <input type="radio" name="txtsexo" value="F" checked="checked">F
                    <input type="radio" name="txtsexo" value="M">M
                    </div></td>

              </tr>
              <tr>
                <td><span class="style21 style29 style44">Comentario</span></td>
                <td><span class="style29">
                  <label></label>
                  <textarea name="comentario" id="comentario"></textarea>
                </span></td>
              </tr>
              <tr>
                <td colspan="2"><div align="center">
                    <input type="submit" name="Submit" value="enviar" />
                </div></td>
              </tr>
  </table>
</form>
      
            <table width="53%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td align="center"><?php
  readfile ("texto.txt")
	?></td>
              </tr>
            </table>
</body>
</html>