
<?php
   $host        = "host = localhost";
   $port        = "port = 5432";
   $dbname      = "dbname = werewolf";
   $credentials = "user = postgres";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
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

   $ret_new = pg_query($db,$sql);
   if(!$ret_new) {
      echo "An error occured while creating a table.\n";
   } else {
      echo "Table created successfully\n";
   }

   pg_close($db);
?>