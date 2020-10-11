<?php // Example 26-7: login.php
  require_once 'header.php';
  $error = $user = $pass = "";

  if (isset($_POST['user']))
  {
    $user = sanitizeString($_POST['user']);
    $pass = sanitizeString($_POST['pass']);
    
    if ($user == "" || $pass == "")
      $error = 'Not all fields were entered';
    else
    {
      $result = queryMySQL("SELECT user,pass FROM members
        WHERE user='$user' AND pass='$pass'");

      if ($result->num_rows == 0)
      {
        $error = "Invalid login attempt";
      }
      else
      {
        $_SESSION['user'] = $user;
        $_SESSION['pass'] = $pass;
        die("<div class='center'>You are now logged in. Please
             <a data-transition='slide' href='members.php?view=$user'>click here</a>
             to continue.</div></div></body></html>");

      $result1=queryMysql("SELECT usuario FROM members WHERE user='{$_SESSION['user']}'");
      $row = $result1->fetch_array(MSQLI_ASSOC);
      if ($result1->num_rows > 0){
        if ($row['usuario'] == 'administrador'){
          echo '<script>alert("Bienvenido Administrador")</script> ';
          echo "<script>location.href='index.html'</script>";
        }
        else if($row['usuario'] == 'cliente'){
          echo '<script>alert("Bienvenido cliente")</script> ';
          echo "<script>location.href='index.html'</script>";
        }
        else{
          echo '<script>alert("Contraseña incorrecta")</script> ';
          echo "<script>location.href='login.php'</script>";
        }
      }       
      }
    }
  }

echo <<<_END
      <form method='post' action='login.php'>
        <div data-role='fieldcontain'>
          <label></label>
          <span class='error'>$error</span>
        </div>
        <div data-role='fieldcontain'>
          <label></label>
          Please enter your details to log in
        </div>
        <div data-role='fieldcontain'>
          <label>Username</label>
          <input type='text' maxlength='16' name='user' value='$user'>
        </div>
        <div data-role='fieldcontain'>
          <label>Password</label>
          <input type='password' maxlength='16' name='pass' value='$pass'>
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