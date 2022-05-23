<!--iniciamos linia de codigo-->
<html>
<head>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
<a href="../index.php"><button>volver</button></a>
<div class="aa">
  <!--realizamos un formulario el cual nos sirve para comprobar la información ingresada con la que se encuentra alojada a la base de datos-->  
<form action="../controladores/c-autenticacion.php" method="POST">
    correo
    <br>
    <input type ="email" name="usuario" required>
    <br><br>
    contraseña
    <br>
    
    <input type ="password"  name="clave" required minlength="5" maxlength="8" title="error"><br>
    
    
    <br><br>
    
    <input type ="submit" value = "Aceptar">
    <br>
  
</form>
</div>
</body>
</html>
<!--finalizamos linia de codigo-->