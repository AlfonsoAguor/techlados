<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tech-Lados</title>
    <?php include ("./librerias/funciones.php") ?>
</head>
    <?php
    if ((!isset($_POST["usuario"]))&&(!isset($_POST["pass"]))) {
    ?>
     <frameset rows="110,50,*,50" border="0">
     <frame src="cabecera.php" scrolling="no" resize="no" name="cabecera">
      <frame src="menuInvitado.php" scrolling="no" resize="no" name="menu">
      <frame src="informacion.php" resize="no" name="cuerpo">
     <frame src="pie.php" scrolling="no" resize="no" name="pie">
  </frameset>  
<?php } else {
        include ("./librerias/conexion.php");
        $nom=$_POST["usuario"];
        $pass=$_POST["pass"]; 
        $sentencia="select * from usuarios where Login='$nom' and Contrasena='$pass'";
        $result=mysqli_query($conexion,$sentencia);
        $row=mysqli_fetch_row($result);
    if (!$row) {
        
    ?>
    <frameset rows="110,50,*,50" border="0">
     <frame src="cabeceraError.php" scrolling="no" resize="no" name="cabecera">
      <frame src="menuInvitado.php" scrolling="no" resize="no" name="menu">
      <frame src="informacion.php?id_usuario=<?php echo($row[0]); ?>" resize="no" name="cuerpo">
     <frame src="pie.php" scrolling="no" resize="no" name="pie">
  </frameset> 
  <?php  } else {
        
        if ($row[6]=='A') {
    ?>
    <frameset rows="110,50,*,50" border="0">
     <frame src="cabeceraAdmin.php" scrolling="no" resize="no" name="cabecera">
      <frame src="menu.php?id_usuario=<?php echo($row[0]); ?>" scrolling="no" resize="no" name="menu">
      <frame src="" resize="no" name="cuerpo">
     <frame src="pie.php" scrolling="no" resize="no" name="pie">
  </frameset>
  <?php  } else {
            if ($row[6]=='U') {
  ?>    
    <frameset rows="110,50,*,50" border="0">
     <frame src="cabeceraUsuario.php?usu=<?php echo($row[1]); ?>&id_usuario=<?php echo($row[0]); ?>" scrolling="no" resize="no" name="cabecera">
      <frame src="menuInvitado.php" scrolling="no" resize="no" name="menu">
      <frame src="cuerpo.php?id_usuario=<?php echo($row[0]); ?>"  resize="no" name="cuerpo">
     <frame src="pie.php" scrolling="no" resize="no" name="pie">
  </frameset>
  <?php     
                }
            }  
        }
    }
    ?>
</html>