<?php
require_once('dbTest.php');
error_reporting( E_ALL );
ini_set( "display_errors", 1 );
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body> 
        <?php
            $db = new database();
            $db->dbConnect();
            $db->snackdata();      
        ?>
    </body>
</html>