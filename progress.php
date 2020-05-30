<?php


   $host        = "host = localhost";
   $port        = "port = 5432";
   $dbname      = "dbname = werewolf";
   $credentials = "user = postgres";

   $db = pg_connect( "$host $port $dbname $credentials");
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
    echo "Here's what has happened in the game: \n";
   }

//setting everything up 

   $query_one = "SELECT * FROM whitewerewolf WHERE TIME='night1'";
   $query_two = "SELECT victim_killed, victim_guarded, victim_saved, victim_poisoned FROM whitewerewolf WHERE TIME='night1';";
   $query_three = "SELECT victim_killed, victim_guarded, victim_saved, victim_poisoned FROM whitewerewolf WHERE TIME='night2';";
   $query_four = "SELECT victim_killed, victim_guarded, victim_saved, victim_poisoned FROM whitewerewolf WHERE TIME='night3';";


   $ret = pg_query($db,$query_one);
   $ret_two = pg_query($db,$query_two);
   $ret_three= pg_query($db,$query_three);
   $ret_three= pg_query($db,$query_four);

   $row_num=pg_num_rows($ret);

if ($row_num >= 0) {
      while ($row = pg_fetch_row($ret)) {


      echo "<p> Special villagers are: $row[5](Seer), $row[6](Witch), $row[7](Knight), and $row[8](Guardian); </p>";
      echo "<p> Four werewolves are: $row[1], $row[2], $row[3], $row[4] </p>";
      echo "<p> The rest of the players are villagers. </p>";


   }} else {
      echo "\n Please double check if you have submitted the results.";
   }

//game starts
newprogress("In the first night", night1);

echo "<br>";

dayprogress("In the first day", day1);

echo "<br><br>";

newprogress("In the second night", night2);

echo "<br><br>";

dayprogress("In the second day", day2);

echo "<br><br>";

newprogress("In the third night", night3);

echo "<br><br>";

dayprogress("In the third day", day3);

echo "<br><br>";

newprogress("In the fourth night", night4);

echo "<br><br>";

dayprogress("In the fourth day", day4);

echo "<br><br>";

newprogress("In the fifth night", night5);

echo "<br><br>";

checkwin ();

//All functions

function checkwin () {
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

   $query_one = "SELECT actual_death,victim_challenged,victim_poisoned,victim_out,werewolf_exploded,whitewerewolf_exploded FROM whitewerewolf";
   $query_two = "SELECT * FROM whitewerewolf WHERE TIME='night1'";

   $ret = pg_query($db,$query_one);
   $ret_new = pg_query($db,$query_two);
   $row_num=pg_num_rows($ret);

   if ($row_num > 0) {

   // Fetch all rows from selected columns and then put them all in an array. 
   $dead = pg_fetch_all($ret);


   //check if the white werewolf has exploded 
   $num_werewolf = 0; 

   foreach ($dead as $lines) {
      if ($lines['whitewerewolf_exploded'] == NULL) {

         $num_werewolf = 0; 

      } else {
         $num_werewolf = $num_werewolf +1;
      // if the whitewerewolf has exploded, then there are still three werewolves remain. 
      }
   }

   // Get ready to count.
   $num_villager = 0;
   $num_special = 0;

   //get ready for werewolf arrays, villager array, and special villager array. 
   while ($row = pg_fetch_row($ret_new)) {

      $werewolves = array($row[1], $row[2], $row[3], $row[4]);

      $special_villager = array($row[5], $row[6], $row[7], $row[8]);

   }

   $keys = array_keys($dead);
   $size = count($dead);


   for ($i=0; $i < $size; $i++) {


   //echo $keys[$i] . "<br>";      
   //here, it prints out 0,1,2.... which are all the keys within the array
   
   foreach ($dead[$keys[$i]] as $key => $value) {

      //echo "$value";
      //here, it prints out all value within columns


      //skip empty columns 
      if ("$value" != "") {
      if (in_array("$value", $werewolves, true)) {
         $num_werewolf=$num_werewolf +1 ;
      } elseif(in_array("$value", $special_villager, true)) {
         $num_special = $num_special + 1; 
      } else {
         $num_villager = $num_villager + 1;
      }
   }
   


   }

} 
//here is end of for loop 

//Here you can print out number of werewolf, number of villagers, and number of special villagers die 
// echo $num_werewolf;
// echo $num_special;
// echo $num_villager;

//here I begin to see if the game has ended or not

if ($num_werewolf == 4) {
   echo "All werewolf died; the villager and special villager team just won"; 
} elseif ($num_villager == 4) {
   echo "All villagers died. The werewolf team just won.";
} elseif ($num_special == 4) {
   echo "All special villagers died. The werewolf team just won. ";
} else {
   echo "$num_werewolf werewolves have died; $num_villager villagers have died; and $num_special special villagers have died. ";
   echo "No team has yet won. The game should continue. \n";
}

}
//here is end of while loop



      //foreach ($dead as $lines) {
         //echo $line['victim_killed']; print out all the elements in column "victim_killed"
         //$var = identity_reveal ($line['victim_killed']);

         //echo $var;
      //}

      // echo $dead[0]['victim_killed'];

}




function dayprogress($text, $day_num) {
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

   $query_one = "SELECT * FROM whitewerewolf WHERE TIME='$day_num'";
   $query_two = "SELECT victim_out, whitewerewolf_exploded, victim_challenged FROM whitewerewolf WHERE TIME='$day_num';";

   $ret = pg_query($db,$query_one);
   $ret_two = pg_query($db,$query_two);
   $row_num=pg_num_rows($ret);

   if ($row_num > 0) {

      while ($row_two = pg_fetch_row($ret_two)) {

         // the white werewolf killed a player

         if ( !empty($row_two[1]) && empty($row_two[2]) ) {
            echo "$text, the village voted out $row_two[0]. The white werewolf exploded and immediately killed $row_two[1]. ";
            echo identity_reveal($row_two[0]);
            echo " ";
            echo identity_reveal($row_two[1]);
         } 

         // the knight challenged a player 
         elseif ( empty($row_two[1]) && !empty($row_two[2]) ) {
            echo "$text, the village voted out $row_two[0]. The knight challenged $row_two[2].";
            echo identity_reveal($row_two[0]);
            echo " ";
            echo identity_reveal($row_two[2]);

            // if the person that the Knight challenges is 
         } 

         // the knight challenged a player and the white werewolf killed a player. 

         elseif (!empty($row_two[1]) && !empty($row_two[2]) )  {
            echo "$text, the village voted out $row_two[0]. The knight challenged $row_two[2] and the white werewolf killed $row_two[1]. \n";
            echo identity_reveal($row_two[0]);
            echo " ";
            echo identity_reveal($row_two[2]);   
            echo " "; 
            echo identity_reveal($row_two[1]);       
         }

         // the village voted out a player
         else {
            echo "$text, the village voted out $row_two[0].";
            echo " ";
            echo identity_reveal($row_two[0]);
         }

      }

   } else {
      echo "You have not yet reached $day_num.";
   }

}





function newprogress($text, $night_num) {
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

   $query_one = "SELECT * FROM whitewerewolf WHERE TIME='$night_num'";
   $query_two = "SELECT victim_killed, victim_guarded, victim_saved, victim_poisoned FROM whitewerewolf WHERE TIME='$night_num';";

   $ret = pg_query($db,$query_one);
   $ret_two = pg_query($db,$query_two);
   $row_num=pg_num_rows($ret);

   if ($row_num > 0) {

      while ($row_two = pg_fetch_row($ret_two)) {

      // the guardian protected the victim

      if ( $row_two[0] == $row_two[1] && $row_two[1]!= $row_two[2] && empty($row_two[3])){ 

      echo "<p> $text, the werewolves killed $row_two[0], and the guardian protected $row_two[0].The witch decided not to do anything. Thus, $row_two[0] survived, and the whole village was safe. </p>";
      } 

      // the witch saved the victim

      elseif ($row_two[0] == $row_two[2] && $row_two[1]!= $row_two[2] && empty($row_two[3])) {
         echo "<p> $text, the werewolves killed $row_two[0], the guardian protected $row_two[1]. The witch saved $row_two[0]. Thus, $row_two[0] survived, and the whole village was safe. </p>";
      } 

      // the witch poisoned the victim; the guardian protected the victim 

      elseif ($row_two[0]==$row_two[1] && !empty($row_two[3])) {
         echo "$text, the werewolves killed $row_two[0], the guardian also protected $row_two[0]. $row_two[0] survived. $row_two[3] was poisoned by the witch.\n"; 
         echo identity_reveal($row_two[3]);
      } 

      // the guardian the the witch used their power at the same time. 

      elseif ($row_two[0] == $row_two[2] && $row_two[1] == $row_two[2] && empty($row_two[3])) {
         echo "$text, the werewolves killed $row_two[0], the guardian protected $row_two[0], and the witch also saved $row_two[0]. Thus, $row_two[0] died of overhealing. \n"; 
         echo identity_reveal($row_two[0]);

      }

      // the witch poisoned another victim
      elseif ($row_two[0] != $row_two[1] && $row_two[0]!=$row_two[2] && !empty($row_two[3])) {
         echo "$text, the werewolves killed $row_two[0], the guardian protected $row_two[1], the witch didn't save $row_two[0] and decide to kill $row_two[3]. Thus, $row_two[0] and $row_two[3] both died. \n";
         echo identity_reveal($row_two[0]); 
         echo " "; 
         echo identity_reveal($row_two[3]);

      } else {
         echo "$text, the werewolves killed $row_two[0], the guardian protected $row_two[1], and the witch decided not to do anything. So $row_two[0] died.\n";
         echo identity_reveal($row_two[0]);
      }
   }

   } else {
      echo "You have not yet reached $night_num.";
   }

}




function identity_reveal($id) {

if ($id != NULL) {

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

   $query_one = "SELECT * FROM whitewerewolf WHERE TIME='night1'";
   $ret = pg_query($db,$query_one);

   while ($row = pg_fetch_row($ret)) {

   $werewolves = array($row[1], $row[2], $row[3], $row[4]);
   $special_villager = array($row[5], $row[6], $row[7], $row[8]);

   if (in_array($id, $werewolves, true)) {
            echo "$id was a werewolf. ";
         } elseif (in_array($id, $special_villager, true)) {
            echo "$id was a special villager. ";
         } else {
            echo "$id was a villager. ";
         }
      }
}
else {
   echo "";
}
}





?>