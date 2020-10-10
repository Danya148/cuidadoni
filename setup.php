<!DOCTYPE html>
<html>
    <head>
        <title>Setting Up database</title>
    </head>
    <body>
        
        <h3>Setting up..</h3>

<?php //Example 26-3: setup.php
    require_once 'functions.php';

    echo <<<_INIT
<!DOCTYPE html> 
<html>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>                 
    <script src='node_modules/jquery/dist/jquery.min.js'></script>
    <script src='node_modules/jquery-mobile/js/jquery.mobile.js'></script>
    <script type="text/javascript" src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">        
    <link rel='stylesheet' href='styles.css' type='text/css'>    
    <script src='javascript.js'></script>
_INIT;

    createTable('informacionniño',
                'NombreNi VARCHAR(16),
                EdadNi VARCHAR(16),
                Enfermedades VARCHAR(16),
                INDEX(user(6))');
    
    createTable('requisitos',
                'NombreT VARCHAR(16),
                NumeroT VARCHAR(16),
                Contacto VARCHAR(16),
                Horario VARCHAR(16),
                INDEX(user(6))');
 
                
    createTable('metodopago',
                'NumTarjeta VARCHAR(16),
                PIN VARCHAR(16),
                INDEX(user(6))');
?>

        <br>...done.
    </body>
</html>