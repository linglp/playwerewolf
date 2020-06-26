
<?php

   $host        = "host = localhost";
   $port        = "port = 5432";
   $dbname      = "dbname = werewolf";
   $credentials = "user = postgres";


// If I end up using proxy: 

   // Use a Data source name (DSN) to connect to Cloud SQL through the proxy
   
   //$dsn = 'pgsql:dbname=werewolf;host=/cloudsql/werewolf-278317:us-east1:werewolf';

   // Instantiate your DB using the DSN, username, and password
   // $dbUser = 'linglp';
   // $dbPass = '123qwe';



   // try {
   //    $db = new PDO($dsn, $dbUser, $dbPass);
   //    echo " ";
   // } catch (PDOException $e) {
   //     echo 'Connection failed: ' . $e->getMessage();
   // }

   $db = pg_connect( "$host $port $dbname $credentials");

   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo " ";
   }

   $query_string = "DROP TABLE IF EXISTS WHITEWEREWOLF";
   
   $sql =<<<EOF
      CREATE TABLE WHITEWEREWOLF
      (
      TIME                   TEXT,
      WEREWOLF_ONE           TEXT,
      WEREWOLF_TWO           TEXT,
      WEREWOLF_THREE         TEXT,
      WHITEWEREWOLF          TEXT,
      SEER                   TEXT,
      WITCH                  TEXT,
      KNIGHT                 TEXT,
      GUARDIAN               TEXT,
      VICTIM_KILLED          TEXT,
      VICTIM_CHALLENGED      TEXT,
      VICTIM_SAVED           TEXT,
      VICTIM_POISONED        TEXT,
      VICTIM_GUARDED         TEXT,
      SEER_CHECKED           TEXT,
      VICTIM_OUT             TEXT,
      WEREWOLF_EXPLODED      TEXT,
      WHITEWEREWOLF_EXPLODED TEXT, 
      ACTUAL_DEATH           TEXT  
      );
EOF;

   $ret = pg_query($db,$query_string);
   if(!$ret) {
      echo pg_last_error($db);
   } else {
      echo "Table dropped successfully\n";
   }


// try {
//    $db->exec($query_string);
//    echo "New Game starts. ";
// } catch(PDOException $e) {
//    echo $e->getMessage();
// }

// try {
//    $db->exec($sql);
//    echo "Close this window and go back to previous page.";
// } catch(PDOException $e) {
//    echo $e->getMessage();
// }
   $ret_new = pg_query($db,$sql);
   if(!$ret_new) {
      echo "An error occured while creating a table.\n";
   } else {
      echo "Table created successfully\n";
   }

   pg_close($db);
?>