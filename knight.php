<?php


   $host        = "host = localhost";
   $port        = "port = 5432";
   $dbname      = "dbname = werewolf";
   $credentials = "user = postgres";

   $db = pg_connect( "$host $port $dbname $credentials");
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
    echo "";
   }

   $query_one= "SELECT werewolf_one, werewolf_two, werewolf_three, whitewerewolf FROM whitewerewolf WHERE TIME='night1';";

   $ret = pg_query($db,$query_one);

  while ($row = pg_fetch_row($ret)) {

  if (empty($row[0]) & empty($row[1]) & empty($row[2]) & empty($row[3])) {
    echo "<p> <font color=darkblue> Please recheck if you have submitted your results on the first night. </font> </p>";
  } else {
    echo "<p> <font color=darkblue> The four werewolves are $row[0], $row[1], $row[2], $row[3]. If the player that the Knight challenged is a werewolf, the werewolf died immediately without leaving a statement; if not, the Knight died of shame without leaving a statement. After the Knight uses power, discussion continues. </font> </p> ";
  }
}