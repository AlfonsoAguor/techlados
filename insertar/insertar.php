<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="../estilo.css" type="text/css">
    <meta charset="UTF-8">
    <?php include ("../librerias/pueblos.php") ?>
    <?php include ("../librerias/cp.php") ?>
    <?php include ("../librerias/funciones.php") ?>
    <script type="text/javascript" src="../calendar/general.js"></script>
	<script type="text/JavaScript" src="../calendar/overlib_mini.js"></script>
	<script type="text/JavaScript" src="../calendar/calendar.js"></script>
	<script type="text/JavaScript" src="../calendar/calendar-es.js"></script>
	<script type="text/JavaScript" src="../calendar/calendar-setup.js"></script> 
	<script type="text/javascript" src="../librerias/fechas.js"></script>
    <link rel="stylesheet" href="../calendar/CALENDAR.CSS">

    
</head>
<body onLoad="javascript:cargar();" id="bodyForm">
    <form name='insertar' method='post' action='insertar2.php' id="formu">
        <table id="tabla">
          <tr>
              <td>Nombre: </td>
              <td><input type="text" name="nombre" size="20" TabIndex="1" onchange="javascript:comprobar_nom('insertar');" onkeypress="javascript:return acceptLet(event);" /> <label id="aNom"> <img src="../img/advertencia.png" height='15' width='15'>oblig</label></td>
          </tr>  
          <tr>
              <td>Primer apellido: </td>
              <td><input type="text" name="ap1" size="20" onChange="javascript:comprobar_apellido('insertar');" onkeypress="javascript:return acceptLet(event);"><label id="aAp1"> <img src="../img/advertencia.png" height='15' width='15'>oblig</label></td>
              <td>Segundo apellido: </td>
              <td><input type="text" name="ap2" size="20" onkeypress="javascript:return acceptLet(event);"></td>
          </tr>
          <tr>
          <td>Login: </td>
          <td><input type="text" name="login" size="20" onchange="javascript:comprobar_login('insertar');"/> <label id="aLogin"> <img src="../img/advertencia.png" height='15' width='15'>oblig</label></td>
          <td>Contraseña: </td>
          <td><input type="text" name="contra" size="20" onchange="javascript:comprobar_contra('insertar');"/> <label id="aContra"> <img src="../img/advertencia.png" height='15' width='15'>oblig</label></td>
          </tr>
          <tr>
              <td>Provincia: </td>
              <td><select name="provincia" onChange="javascript:cambia_provincia('insertar');">
                  <option value="--" selected>Seleccione una provincia
                  <option value="Albacete">Albacete
                  <option value="Ciudad_Real">Ciudad Real
                  <option value="Cuenca">Cuenca
                  <option value="Guadalajara">Guadalajara
                  <option value="Toledo">Toledo
                  <option value="Alava">Álava 
	              <option value="Alicante">Alicante 
	              <option value="Almeria">Almería 
	              <option value="Asturias">Asturias 
	              <option value="Avila">Ávila
	              <option value="Badajoz">Badajoz
	              <option value="Islas_Baleares">Islas Baleares
	              <option value="Barcelona">Barcelona 
	              <option value="Burgos">Burgos 
	              <option value="Caceres">Cáceres 
	              <option value="Cadiz">Cádiz 
	              <option value="Cantabria">Cantabria 
	              <option value="Castellon">Castellón 
	              <option value="Ceuta">Ceuta 
	              <option value="Cordoba">Córdoba 
	              <option value="Coruña">La Coruña 
	              <option value="Gerona">Gerona 
	              <option value="Granada">Granada 
	              <option value="Guipuzcoa">Guipúzcoa 
	              <option value="Huelva">Huelva 
	              <option value="Huesca">Huesca 
	              <option value="Jaen">Jaén 
	              <option value="La_Rioja">La Rioja 
	              <option value="Leon">León 
	              <option value="Lerida">Lérida 
	              <option value="Lugo">Lugo 
	              <option value="Madrid">Madrid 
	              <option value="Malaga">Málaga 
	              <option value="Melilla">Melilla 
	              <option value="Murcia">Murcia 
	              <option value="Navarra">Navarra 
	              <option value="Orensa">Orense 
	              <option value="Palencia">Palencia 
	              <option value="Las_Palmas">Las Palmas 
	              <option value="Pontevedra">Pontevedra 
	              <option value="Salamanca">Salamanca 
	              <option value="Santa_Cruz_Tenerife">Santa Cruz de Tenerife 
	              <option value="Segovia">Segovia 
	              <option value="Sevilla">Sevilla 
	              <option value="Soria">Soria 
	              <option value="Tarragona">Tarragona 
	              <option value="Teruel">Teruel 
	              <option value="Valencia">Valencia 
	              <option value="Valladolid">Valladolid 
	              <option value="Vizcaya">Vizcaya 
	              <option value="Zamora">Zamora 
	              <option value="Zaragoza">Zaragoza
                </select>
                <label id="aPro"> <img src="../img/advertencia.png" height='15' width='15'>oblig</label></td>
              <td>Localidad: </td>
              <td><select name="Localidad" onChange="javascript:cambia_localidad('insertar');">
                
              </select><label id="aLoca"> <img src="../img/advertencia.png" height='15' width='15' onChange="javascript:cambia_cp();"> oblig</label></td>
              <td>CP: </td>
              <td><input type="text" name="cp" size="5" readonly><label id="aCP"> <img src="../img/advertencia.png" height='15' width='15'> Obligatorio</label></td>
          </tr> 
          <tr>
              <td>Direccion: </td>
              <td><input type="text" name="direccion" size="20" onChange="javascript:comprobar_direccion('insertar');"><label id="aDir"> <img src="../img/advertencia.png" height='15' width='15'>oblig</label></td>
              <td>Nº: </td>
              <td><input type="text" name="numeroDireccion" size="4" onChange="javascript:comprobar_DirNumero('insertar');" onkeypress="javascript:return acceptNum(event);"><label id="aNume"> <img src="../img/advertencia.png" height='15' width='15'>oblig</label></td>
              <td>Piso: </td>
              <td><input type="text" name="Piso" size=4></td>
          </tr>
          <tr>
              <td><input type="radio" name="docu" value=0 checked>DNI</td>
              <td rowspan="2"><input type="text" size="10" name="docuNumero" onChange="javascript:comp_dni_nie('insertar');"><label id="aDocu"> <img src="../img/advertencia.png" height='15' width='15'>oblig</label></td>
          </tr>
          <tr>
              <td><input type="radio" name="docu" value=1>NIE</td>
          </tr>
          <tr>
              <td>Telefono 1: </td>
              <td><input type="text" name="nmovil" size="10" onChange="javascript:comprobar_movil('insertar');" onkeypress="javascript:return acceptNum(event);"><label id="aNumMovil"> <img src="../img/advertencia.png" height='15' width='15'>oblig</label></td>
              <td>Telefono 2: </td>
              <td><input type="text" name="nfijo" size="10" onChange="javascript:comprobar_fijo('insertar');" onkeypress="javascript:return acceptNum(event);"><label id="aNumFijo"> <img src="../img/advertencia.png" height='15' width='15'>oblig</label></td>
          </tr>
          <tr>
              <td>Email: </td>
              <td><input type="text" name="correo" size="30" onChange="javascript:comprobar_email('insertar');"><label id="aEmail"> <img src="../img/advertencia.png" height='15' width='15'> Oblig</label></td>
          </tr>
          <tr>
              <td>Fecha Nacimento: </td>
              <td><input type="text" id="fecha" name="fecha" size="15" onChange="javascript:comprobar_fecha('insertar');" readonly><label id="aFecha"> <img src="../img/advertencia.png" height='15' width='15'>oblig</label><img src="../img/calendario.jpg" id="calendario" height='30' width='40'></td>
              <script type="text/javascript">
                       Calendar.setup({ inputField:"fecha", button:"calendario" });
                </script>
          </tr>
          <tr>
              <td><img src="../img/ok2.jpg" alt="ok" height='50' width='50' onclick="javascript:enviar('insertar');"></td>
          </tr>
        </table>
    </form>
</body>
</html>