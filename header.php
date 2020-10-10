<?php // Example 26-2: header.php
  session_start();

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
?>