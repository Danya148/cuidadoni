<?php // Example 26-7: login.php
  require_once 'header.php';
  //require_once 'setup.php';
  require_once 'functions.php';
  //require_once 'setup.php';
  $error = $Usuario = $Contraseña = "";

  if (isset($_POST['Usuario']))
  {
    $Usuario = sanitizeString($_POST['Usuario']);
    $Contraseña = sanitizeString($_POST['Contraseña']);
    
    if ($Usuario == "" || $Contraseña == "")
      $error = 'No se ingresaron todos los campos requeridos';
    else
    {
      $result = queryMySQL("SELECT Usuario,Contraseña FROM usuarios
        WHERE Usuario='$Usuario' AND Contraseña='$Contraseña'");

      if ($result->num_rows == 0)
      {
        $error = "Inicio de sesion no valido";
      }
      else
      {
        $_SESSION['Usuario'] = $Usuario;
        $_SESSION['Contraseña'] = $Contraseña;

      $result=queryMysql("SELECT Usuario FROM usuarios WHERE Usuario='{$_SESSION['Usuario']}'");
      $row = $result->fetch_array(MYSQLI_ASSOC);
      if ($result->num_rows > 0){
          if ($row['Usuario'] == 'Administrador'){
              echo '<script>alert("Bienvenido Administrador")</script> ';
              echo "<script>location.href='PagPrin.php'</script>";
          }
          else if($row['Usuario'] == 'Usuario'){
              echo '<script>alert("Bienvenido Cliente")</script> ';
              echo "<script>location.href='PagPrin.php'</script>";
          }
          else{
              echo '<script>alert("Contraseña incorrecta")</script> ';
              echo "<script>location.href=PagPrin.php</script>";
          }
        }
      }
    }
  }

echo <<<_END
      <form method='post' action='login.php'>
       <div class="form-group">
        <div data-role='fieldcontain'>
          <label></label>
          <span class='error'>$error</span>
        </div>
        <div data-role='fieldcontain'>
          <label></label>
          Please enter your details to log in
        </div>
          <label>Username</label>
          <input type='text' maxlength='16' name='Usuario' value='$Usuario'>
        </div>
        <div data-role='fieldcontain'>
          <label>Password</label>
          <input type='password' maxlength='16' name='Contraseña' value='$Contraseña'>
        </div>
        <div data-role='fieldcontain'>
          <label></label>
          <input data-transition='slide' type='submit' value='Login'>
        </div>
      </form>
    </div>
  </body>
</html>
_END;
?>