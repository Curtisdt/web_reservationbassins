<?php

define("HOST", "applicationlegeres");
define("LOGIN", "root");
define("PWD", "");
define("DBNAME", "reservation_club");
define("SALT", "#.()=");

try {
    if ($bdd = mysqli_connect(HOST,LOGIN,PWD,DBNAME))
    {
      mysqli_set_charset($bdd, 'utf8');
    } else {
      throw new Exception('Unable to connect');
    }
}
catch(Exception $e)
{
    echo $e->getMessage();
}

?>