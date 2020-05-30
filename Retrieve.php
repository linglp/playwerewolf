 <?php

progress("reveal_death_one", 'night1');

progress("reveal_death_two", 'night2');

progress("reveal_death_three", 'night3');

progress("reveal_death_four", 'night4');




function progress($reveal_death_two, $night_num) {

if (isset($_POST[$reveal_death_two])) {

  $host        = "host = localhost";
  $port        = "port = 5432";
  $dbname      = "dbname = werewolf";
  $credentials = "user = postgres";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Hmmm.. Let me think!\n";
   }


   $query_one= "SELECT victim_killed, victim_guarded, victim_saved, victim_poisoned FROM whitewerewolf WHERE TIME='$night_num';";
   $query_two= "SELECT * FROM whitewerewolf WHERE TIME='$night_num'";

   $ret = pg_query($db,$query_one);
   $ret_two = pg_query($db,$query_two);
   $row_num=pg_num_rows($ret_two);

   if ($row_num == 0) {
    echo "Something went wrong. No record was submitted for the second night. Please check again. ";
   } else {


 
   while ($row_val = pg_fetch_row($ret_two)) {
    if ( empty($row_val[9]) ) {
      echo "Something went wrong. Please check if you have submitted the record of the second night correctly.";
   } else {

    while ($row = pg_fetch_row($ret)) {

    if ( $row[0] == $row[1] && $row[1]!= $row[2] && empty($row[3]) ){ 
    // the guardian protects the victim. The witch does nothing. Everyone was safe. 
    echo "Yesterday, everyone was safe.";
     } elseif ($row[0] == $row[2] && $row[1]!= $row[2] && empty($row[3])){
      // the witch protects the victim. The witch does nothing. Everyone was safe. 
      echo "Yesterday, everyone was safe";
     } elseif ($row[0]==$row[1] && !empty($row[3])){
     //the guardian protects the victim; but the witch kill; 
      echo "Yesterday, the player that died was/were: $row[3]";
     }
     //error message
     elseif (!empty($row[2]) && !empty($row[3])) {
      echo "Something went wrong. The witch could not save and kill at the same time.";
     } 
     //the witch and the guardian use power at the same time, the person die;
     elseif ($row[0] == $row[2] && $row[1] == $row[2] && empty($row[3])) {
      echo "Yesterday, the player that died was/were: $row[1]";
     } 
     // werewolves and witch kill at the same time; 
     elseif ($row[0] != $row[1] && $row[0]!=$row[2] && !empty($row[3])) {
      echo "Yesterday, the player that died was/were: $row[0] and $row[3]";
     } else {
      echo "Yesterday, the player that died was/were: $row[0]";
      $ret_sec = pg_send_query($db, "INSERT INTO whitewerewolf (ACTUAL_DEATH) VALUES ('$row[0]')");
     }
 }
}
}
// end of while loop 

}
}
}





?>
