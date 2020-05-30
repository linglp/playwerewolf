<?php


   $host        = "host = localhost";
   $port        = "port = 5432";
   $dbname      = "dbname = werewolf";
   $credentials = "user = postgres";

   $db = pg_connect( "$host $port $dbname $credentials");
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
    echo "<p> <font color=darkblue> If the player is a villager/a special villager, put your dumb up (&#128077;); If the player is a werewolf, put your dumb down ( &#128078;). </font> </p> ";
   }


  $query_one= "SELECT werewolf_one, werewolf_two, werewolf_three, whitewerewolf FROM whitewerewolf WHERE TIME='night1';";

  $ret = pg_query($db,$query_one);


  while ($row = pg_fetch_row($ret)) {

  if (empty($row[0]) & empty($row[1]) & empty($row[2]) & empty($row[3])) {
    echo "<p> <font color=darkblue> Please recheck if you have submitted your results on the first night. </font> </p>";
  } else {
    echo "<p> <font color=darkblue> The four werewolves are $row[0], $row[1], $row[2], and $row[3].</font> </p> ";
  }
}


//     $myArray[] = $row[0];
//     $myArray[] = $row[1];
//     $myArray[] = $row[2];
//     $myArray[] = $row[3];


// foreach($array as $value) {
//   print $value;
// }

// if (in_array('$_POST[check_two]', $myArray, TRUE)) {
//   echo 'ARH-WOOOO.....This player is a werewolf'; 

// } else {
//   echo 'This player is not a werewolf';
// }


?>
