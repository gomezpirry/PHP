<?php
    $host       = "host=127.0.0.1";
    $port       = "port=5432";
    $dbname     = "dbname=testdb";
    $user       = "user=postgres"; 
    $password   = "password=gomez1224";

    $db = pg_pconnect($host." ".$port." ".$dbname." ".$user." ".$password);
    
    /*function close_db()
    {
        pg_close($db);
    }*/
?> 
