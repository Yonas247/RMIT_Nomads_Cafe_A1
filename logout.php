<html>
 <head>
 <title>Logout</title>
 </head>
 <body>
 <h1>Logout</h1>
 <?php
 session_start();
 $_SESSION = array();
 session_destroy();
 ?>

 <a href="index.php">Login</a>
 </body>
 </html>