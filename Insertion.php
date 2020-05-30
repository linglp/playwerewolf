<?php

   // NIGHT 1

   $host        = "host = localhost";
   $port        = "port = 5432";
   $dbname      = "dbname = werewolf";
   $credentials = "user = postgres";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Hmmm...\n";
   }



   if (isset($_POST['submit1'])) {

   $query_string = "DELETE FROM WHITEWEREWOLF WHERE TIME='night1'";


   $ret = pg_query($db,$query_string);
   if(!$ret) {
      echo pg_last_error($db);
   } else {
      echo "New record is generating....\n";
   }


   $ret_sec = pg_send_query($db, "INSERT INTO whitewerewolf (TIME, WEREWOLF_ONE, WEREWOLF_TWO, WEREWOLF_THREE, WHITEWEREWOLF, SEER, WITCH, KNIGHT, GUARDIAN, VICTIM_KILLED, VICTIM_GUARDED, SEER_CHECKED, VICTIM_SAVED, VICTIM_POISONED) VALUES (
      '$_POST[night_one]', 
      '$_POST[werewolves1]',
      '$_POST[werewolves2]',
      '$_POST[werewolves3]',
      '$_POST[whitewerewolf]',
      '$_POST[seer]',
      '$_POST[witch]',
      '$_POST[knight]',
      '$_POST[guardian]',
      '$_POST[victim1]',
      '$_POST[guardian_protected]',
      '$_POST[check_one]',
      '$_POST[victim_save]',
      '$_POST[victim_poisoned]'
   )");

   if(!$ret) {
      echo pg_last_error($db);
   } else {
      echo "Your information is recorded. \n Please return to continue the game. ";
   }
   pg_close($db);

}



  // DAY 1


   if (isset($_POST['submit2'])) {

   $query_string = "DELETE FROM WHITEWEREWOLF WHERE TIME='day1'";


   $ret = pg_query($db,$query_string);
   if(!$ret) {
      echo pg_last_error($db);
   } else {
      echo "Table dropped successfully\n";
   }


   $ret_sec = pg_send_query($db, "INSERT INTO whitewerewolf (TIME, VICTIM_CHALLENGED, WHITEWEREWOLF_EXPLODED, VICTIM_OUT, WEREWOLF_EXPLODED) VALUES (
      '$_POST[day_one]', 
      '$_POST[knight_challenged_first]', 
      '$_POST[whitewerewolf_killed_first]', 
      '$_POST[voted_first]',
      '$_POST[werewolfexploded_first]'
   )");

   if(!$ret_sec) {
      echo pg_last_error($db);
   } else {
      echo "Your information is recorded successfully\n Please return to continue the game. ";
   }
   pg_close($db);

}


// NIGHT 2


   if (isset($_POST['submit3'])) {

   $query_string = "DELETE FROM WHITEWEREWOLF WHERE TIME='night2'";


   $ret = pg_query($db,$query_string);
   if(!$ret) {
      echo pg_last_error($db);
   } else {
      echo "Table dropped successfully\n";
   }


   $ret_sec= pg_send_query($db, "INSERT INTO whitewerewolf (TIME,VICTIM_KILLED,VICTIM_GUARDED, SEER_CHECKED, VICTIM_SAVED, VICTIM_POISONED) VALUES (
      '$_POST[night_two]', 
      '$_POST[victim2]', 
      '$_POST[guardian_protected_two]', 
      '$_POST[check_two]', 
      '$_POST[victim_saved_two]',
      '$_POST[victim_poisoned_two]'
   )");

   if(!$ret_sec) {
      echo pg_last_error($db);
   } else {
      echo "Your information is recorded successfully\n Please return to continue the game. ";
   }
   pg_close($db);

}

//   DAY 2

   if (isset($_POST['submit4'])) {

   $query_string = "DELETE FROM WHITEWEREWOLF WHERE TIME='day2'";


   $ret = pg_query($db,$query_string);
   if(!$ret) {
      echo pg_last_error($db);
   } else {
      echo "Table dropped successfully\n";
   }


   $ret_sec = pg_send_query($db, "INSERT INTO whitewerewolf (TIME, VICTIM_CHALLENGED, WHITEWEREWOLF_EXPLODED, VICTIM_OUT, WEREWOLF_EXPLODED) VALUES (
      '$_POST[day_two]', 
      '$_POST[knight_challenged_second]', 
      '$_POST[whitewerewolf_killed_second]', 
      '$_POST[voted_second]',
      '$_POST[werewolfexploded_second]'
   )");

   if(!$ret_sec) {
      echo pg_last_error($db);
   } else {
      echo "Your information is recorded successfully\n Please return to continue the game. ";
   }
   pg_close($db);

}


// NIGHT 3
   if (isset($_POST['submit5'])) {

   $query_string = "DELETE FROM WHITEWEREWOLF WHERE TIME='night3'";


   $ret = pg_query($db,$query_string);
   if(!$ret) {
      echo pg_last_error($db);
   } else {
      echo "Table dropped successfully\n";
   }


   $ret_sec= pg_send_query($db, "INSERT INTO whitewerewolf (TIME,VICTIM_KILLED,VICTIM_GUARDED, SEER_CHECKED, VICTIM_SAVED, VICTIM_POISONED) VALUES (
      '$_POST[night_three]', 
      '$_POST[victim3]', 
      '$_POST[guardian_protected_three]', 
      '$_POST[check_three]', 
      '$_POST[victim_saved_three]',
      '$_POST[victim_poisoned_three]'
   )");

   if(!$ret_sec) {
      echo pg_last_error($db);
   } else {
      echo "Your information is recorded successfully\n Please return to continue the game.";
   }
   pg_close($db);

}

// DAY 3

   if (isset($_POST['submit6'])) {

   $query_string = "DELETE FROM WHITEWEREWOLF WHERE TIME='day3'";


   $ret = pg_query($db,$query_string);
   if(!$ret) {
      echo pg_last_error($db);
   } else {
      echo "Table dropped successfully\n";
   }


   $ret_sec = pg_send_query($db, "INSERT INTO whitewerewolf (TIME, VICTIM_CHALLENGED, WHITEWEREWOLF_EXPLODED, VICTIM_OUT, WEREWOLF_EXPLODED) VALUES (
      '$_POST[day_three]', 
      '$_POST[knight_challenged_third]', 
      '$_POST[whitewerewolf_killed_third]', 
      '$_POST[voted_third]',
      '$_POST[werewolfexploded_third]'
   )");

   if(!$ret_sec) {
      echo pg_last_error($db);
   } else {
      echo "Your information is recorded successfully\n Please return to continue the game. ";
   }
   pg_close($db);
}


// NIGHT 4

   if (isset($_POST['submit7'])) {

   $query_string = "DELETE FROM WHITEWEREWOLF WHERE TIME='night4'";


   $ret = pg_query($db,$query_string);
   if(!$ret) {
      echo pg_last_error($db);
   } else {
      echo "Table dropped successfully\n";
   }


   $ret_sec= pg_send_query($db, "INSERT INTO whitewerewolf (TIME,VICTIM_KILLED,VICTIM_GUARDED, SEER_CHECKED, VICTIM_SAVED, VICTIM_POISONED) VALUES (
      '$_POST[night_four]', 
      '$_POST[victim4]', 
      '$_POST[guardian_protected_four]', 
      '$_POST[check_four]', 
      '$_POST[victim_saved_four]',
      '$_POST[victim_poisoned_four]'
   )");

   if(!$ret_sec) {
      echo pg_last_error($db);
   } else {
      echo "Your information is recorded successfully\n Please return to continue the game.";
   }
   pg_close($db);

}

// DAY 4

   if (isset($_POST['submit8'])) {

   $query_string = "DELETE FROM WHITEWEREWOLF WHERE TIME='day4'";


   $ret = pg_query($db,$query_string);
   if(!$ret) {
      echo pg_last_error($db);
   } else {
      echo "Table dropped successfully\n";
   }


   $ret_sec = pg_send_query($db, "INSERT INTO whitewerewolf (TIME, VICTIM_CHALLENGED, WHITEWEREWOLF_EXPLODED, VICTIM_OUT, WEREWOLF_EXPLODED) VALUES (
      '$_POST[day_four]', 
      '$_POST[knight_challenged_four]', 
      '$_POST[whitewerewolf_killed_four]', 
      '$_POST[voted_four]',
      '$_POST[werewolfexploded_fourth]'
   )");

   if(!$ret_sec) {
      echo pg_last_error($db);
   } else {
      echo "Your information is recorded successfully\n Please return to continue the game. ";
   }
   pg_close($db);
}





?>
