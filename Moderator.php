

<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">


<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Permanent Marker&effect=shadow-multiple">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Caveat">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Indie Flower">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js">  
</script>


<!-- <link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="stylesheet/Moderator_style.css"> -->

<!-- google cloud storage links -->
<link rel="stylesheet" type="text/css" href="https://storage.cloud.google.com/werewolf_static/Moderator_style.css">
<link rel="stylesheet" type="text/css" href="https://storage.cloud.google.com/werewolf_static/style.css">


<script src="https://cdn.jsdelivr.net/npm/gojs/release/go.js"></script>

<!-- <script src="js/Moderator.js"> </script> -->

<script src="js/ModeratorNew.js"> </script>

<!-- php -->

<!-- <script src="https://storage.cloud.google.com/werewolf_php/CreateTable.php"></script> -->


</head>


<body>
<div class="topnav">
  <a href="#home">Introduction</a>
  <a href="#StartGame">Plan Your Game</a>
  <a class="active" href="#ModeratorGuide">Moderator Guide</a>
  <a href="#Acknowledgement">Acknowledgement</a>
  <a href="#Others">Other Resources</a>
</div>

<div class="title-img">
<img src="https://storage.cloud.google.com/werewolf_static/bg.jpg" alt="Responsive image"> <br><br><br>
<!-- <img src="Pictures/bg.jpg" alt="Responsive image"> <br><br><br> -->
</div>

<div class="topheader">
<p class="font-effect-shadow-multiple">Moderator Guide</p>
</div>

<div class="secondheader">
<p>Pick a Setting</p>
</div>

<div class="normal-word">
<p>Please pick one werewolf setting that you and your friends want to play. Please notice that if you only have nine people(not including yourself), we highly recommend you pick the classic werewolf setting, which is a cominbation of seer, witch, hunter, three ordinary werewolves, and three villagers. </p>


<label for="setting">Choose a werewolf setting</label>

<select id="setting" class="div-toggle" data-target=".myinfo">

  <option value="none" data-show=".none">None</option>
  <option value="white werewolf" data-show=".content_one">White Werewolf & Knight</option>
  <option value="king of werewolf" data-show=".content_two">King of Werewolf & Guardian</option>
  <option value="King of werewolf2">King of Werewolf & Magician</option>
  <option value="beauty">Beauty Pageant Werewolf & knight</option>
  <option value="grave">Gravestone Werewolf & Graveyard guard</option>
  <option value="mixedrace">Mixed Race boy</option>
  <option value="bad_dream_maker">Bad Dream Maker & Guardian</option>
  <option value="cupid">Cupid & Thief</option>
  <option value="classic">Classic Werewolf for Nine People</option>

</select>

<br><br>

<div class="secondheader">
<p>Game Start</p>
</div>

<div class="myinfo">

<div class="none hide"></div>

<div class="content_one hide"> 

<div class="sticky">
You can always click the button below to find out how many villagers, special villagers, and werewolves are left in the game. 

<form action="progress_new.php" method="POST" target="_blank">
	<input type="submit" class="button" value="Check Progress"> <br> <br>
</form>

</div>

<p> Awesome! You have chosen the "White werewolf & Knight" setting. This setting is great for all levels of players.</p>
<p> To play this game, you need: four villagers, a seer, a witch, a guardian, a knight, a white werewolf, and three ordinary werewolves.</p>

<p> 
<span style="background-color: #EAFB13"> General Notice:</span> <br> 
<p>
	<1> Encourage players not to interrupt each other during discussion. <br>
	<2> Encourage players to vote at the same time.<br>
	<3> Werewolves are allowed to kill any players, including themselves :)<br>
	<4> When werewolves explode, discussion immediately end and the game enters to night time. <br>
	<5> Please do not reveal players' identity cards when they die. Usually, when players die at night (get poisoned by the Witch or killed by werewolves), they could not leave their last statements at day time, except for the players that die on the first night. Players get voted out by the village at day time can always leave their statements. <br>
	<6> The Guardian and the Witch do not share information at night. If a person is protected by the Guardian and the Witch, the person dies of "overhealling" and powers/potions get wasted.<br>
	<7> When the Witch dies, she cannot use her potion to save herself; but she can use the other potion to kill a player. <br>
	<8> Continue to wake up all special villagers even if they are no longer alive.<br>

</p>
<span style="background-color: #EAFB13"> Notice Specific to this setting:</span> <br> 
<1> The White Werewolf and the Knight could use their powers anytime during discussion. (That means that they don't have to wait until their turn to speak to use powers). But they are not allowed to use their power during the voting time. After the White Werewolf uses his power, discussion ends and the game immediately alternates to night time; after the Knight uses his power, discussion continues. <br>
<2> Both the White Werewolf and ordinary werewolves can explode themselves during day time. But the White Werewolf can kill a player when it explodes, and ordinary werewolves can not. If two werewolves explode before the end of sheriff election, the game would continue without sheriff badge, and it's up to the Moderator to randomly determine the speaking order. <br>



<span style="background-color: #EAFB13"> Start the Game:</span> <br> 

<p>
Press on the Start Button!!!!!
</p>



<form action="CreateTable.php" method="POST" target="_blank">
	<input type="submit" class="button" value="START GAME"> <br> <br>
</form>


<p> 
	<span style="background-color: #58F2F7">First Step</span>: Distribute all werewolf identity cards and assign players numbers from 1 to 12. Please make sure that almost everyone gets the cards at the same time. </p> 
<p>
	<span style="background-color: #58F2F7">Second Step</span>: Announce that the game starts and ask all players to close their eyes. <br><br>
</p>

<span style="background-color: #58F2F7">Night Time</span>: <br>
<div class="parallax-image-one"></div> <br>

<p>
	Wake up werewolves and the special villagers in the following order and follow the instructions below. 
</p>

<p> <1> Ask all <u class="dotted"> werewolves </u> to open their eyes and ask the white werewolf to raise his/her/their hands to indicate that he/she/their is the white werewolf. 
</p>


			<form action='InsertionNew.php' method="POST" target="_blank">

				<select name="night_one">
					<option value="night1">Night1</option>
				</select>

				<br>

				<label for="werewolves">The Three Ordinary Werewolves are:</label>
				<select id="werewolves" name="werewolves1">

					<option value="Player1">Player1</option>
					<option value="Player2">Player2</option>
					<option value="Player3">Player3</option>
					<option value="Player4">Player4</option>
					<option value="Player5">Player5</option>
					<option value="Player6">Player6</option>
					<option value="Player7">Player7</option>
					<option value="Player8">Player8</option>
					<option value="Player9">Player9</option>
					<option value="Player10">Player10</option>
					<option value="Player11">Player11</option>
					<option value="Player12">Player12</option>
				</select>

				<select id="werewolves" name="werewolves2">

					<option value="Player1">Player1</option>
					<option value="Player2">Player2</option>
					<option value="Player3">Player3</option>
					<option value="Player4">Player4</option>
					<option value="Player5">Player5</option>
					<option value="Player6">Player6</option>
					<option value="Player7">Player7</option>
					<option value="Player8">Player8</option>
					<option value="Player9">Player9</option>
					<option value="Player10">Player10</option>
					<option value="Player11">Player11</option>
					<option value="Player12">Player12</option>
				</select>

				<select id="werewolves" name="werewolves3">

					<option value="Player1">Player1</option>
					<option value="Player2">Player2</option>
					<option value="Player3">Player3</option>
					<option value="Player4">Player4</option>
					<option value="Player5">Player5</option>
					<option value="Player6">Player6</option>
					<option value="Player7">Player7</option>
					<option value="Player8">Player8</option>
					<option value="Player9">Player9</option>
					<option value="Player10">Player10</option>
					<option value="Player11">Player11</option>
					<option value="Player12">Player12</option>
				</select>

				<br>

				<label for="whitewerewolf">The White Werewolf is:</label>
				<select id="werewolves" name="whitewerewolf">
					<option value="Player1">Player1</option>
					<option value="Player2">Player2</option>
					<option value="Player3">Player3</option>
					<option value="Player4">Player4</option>
					<option value="Player5">Player5</option>
					<option value="Player6">Player6</option>
					<option value="Player7">Player7</option>
					<option value="Player8">Player8</option>
					<option value="Player9">Player9</option>
					<option value="Player10">Player10</option>
					<option value="Player11">Player11</option>
					<option value="Player12">Player12</option>
				</select>

				<br>

				<label for="victim">The victim tonight is:</label>
				<select name="victim1">

					<option value="">None</option>
					<option value="Player1">Player1</option>
					<option value="Player2">Player2</option>
					<option value="Player3">Player3</option>
					<option value="Player4">Player4</option>
					<option value="Player5">Player5</option>
					<option value="Player6">Player6</option>
					<option value="Player7">Player7</option>
					<option value="Player8">Player8</option>
					<option value="Player9">Player9</option>
					<option value="Player10">Player10</option>
					<option value="Player11">Player11</option>
					<option value="Player12">Player12</option>
				</select>


				<p> Give werewolves some time to use their body language to discuss general strategies. Then, ask all the werewolves to close their eyes. </p><br>

				<p> <2> Ask the <u class="dotted"> Guardian </u> to open eyes. </p>

				<label for="guardian">The Guardian is:</label>
				<select name="guardian">
					<option value="Player1">Player1</option>
					<option value="Player2">Player2</option>
					<option value="Player3">Player3</option>
					<option value="Player4">Player4</option>
					<option value="Player5">Player5</option>
					<option value="Player6">Player6</option>
					<option value="Player7">Player7</option>
					<option value="Player8">Player8</option>
					<option value="Player9">Player9</option>
					<option value="Player10">Player10</option>
					<option value="Player11">Player11</option>
					<option value="Player12">Player12</option>
				</select>

				<label for="guardian">The Person that the Guardian wants to protect is:</label>

				<select name="guardian_protected">
					<option value="Player1">Player1</option>
					<option value="Player2">Player2</option>
					<option value="Player3">Player3</option>
					<option value="Player4">Player4</option>
					<option value="Player5">Player5</option>
					<option value="Player6">Player6</option>
					<option value="Player7">Player7</option>
					<option value="Player8">Player8</option>
					<option value="Player9">Player9</option>
					<option value="Player10">Player10</option>
					<option value="Player11">Player11</option>
					<option value="Player12">Player12</option>
				</select>

				<p> Ask the Guardian to close eyes.</p> <br>

				<p> <3> Ask the <u class="dotted"> seer </u> to open eyes. </p>

				<label for="seer">The seer is:</label>

				<select name="seer" id="seer">
					<option value="Player1">Player1</option>
					<option value="Player2">Player2</option>
					<option value="Player3">Player3</option>
					<option value="Player4">Player4</option>
					<option value="Player5">Player5</option>
					<option value="Player6">Player6</option>
					<option value="Player7">Player7</option>
					<option value="Player8">Player8</option>
					<option value="Player9">Player9</option>
					<option value="Player10">Player10</option>
					<option value="Player11">Player11</option>
					<option value="Player12">Player12</option>
				</select>

				<label for="check">The player that the seer wants to check is:</label>

				<select name="check_one" id="check_one">
					<option value="Player1">Player1</option>
					<option value="Player2">Player2</option>
					<option value="Player3">Player3</option>
					<option value="Player4">Player4</option>
					<option value="Player5">Player5</option>
					<option value="Player6">Player6</option>
					<option value="Player7">Player7</option>
					<option value="Player8">Player8</option>
					<option value="Player9">Player9</option>
					<option value="Player10">Player10</option>
					<option value="Player11">Player11</option>
					<option value="Player12">Player12</option>
				</select>


				<br>

				<p>
				Tell the seer that the person's identity is a werewolf or not by using a hand signal. 
			    </p>

			    <p> Ask the seer <u class="dotted">  </u> to close eyes </p> <br>

			    <p> <4> Ask the <u class="dotted"> Witch </u> Without making any noise, tell the witch who is the player that get killed by werewolves. </p>

			    <label for="witch">The Witch is</label>
			    <select name="witch">
					<option value="">None</option>
					<option value="Player1">Player1</option>
					<option value="Player2">Player2</option>
					<option value="Player3">Player3</option>
					<option value="Player4">Player4</option>
					<option value="Player5">Player5</option>
					<option value="Player6">Player6</option>
					<option value="Player7">Player7</option>
					<option value="Player8">Player8</option>
					<option value="Player9">Player9</option>
					<option value="Player10">Player10</option>
					<option value="Player11">Player11</option>
					<option value="Player12">Player12</option>

				</select>

				<label for="witch">The Person that the witch wants to save is:</label>

				<select name="victim_save">

					<option value="">None</option>
					<option value="Player1">Player1</option>
					<option value="Player2">Player2</option>
					<option value="Player3">Player3</option>
					<option value="Player4">Player4</option>
					<option value="Player5">Player5</option>
					<option value="Player6">Player6</option>
					<option value="Player7">Player7</option>
					<option value="Player8">Player8</option>
					<option value="Player9">Player9</option>
					<option value="Player10">Player10</option>
					<option value="Player11">Player11</option>
					<option value="Player12">Player12</option>
				</select>

				<label for="witch_kill">The Person that the witch wants to kill is:</label>

				<select name="victim_poisoned">

					<option value="">None</option>
					<option value="Player1">Player1</option>
					<option value="Player2">Player2</option>
					<option value="Player3">Player3</option>
					<option value="Player4">Player4</option>
					<option value="Player5">Player5</option>
					<option value="Player6">Player6</option>
					<option value="Player7">Player7</option>
					<option value="Player8">Player8</option>
					<option value="Player9">Player9</option>
					<option value="Player10">Player10</option>
					<option value="Player11">Player11</option>
					<option value="Player12">Player12</option>
				</select>

				<p> Ask the witch to close eyes.</p> <br>

				<p> <5> Ask the  <u class="dotted">  knight </u> to open eyes</p>
				<label for="knight">The Knight is</label>
				<select name="knight">
					<option value="">None</option>
					<option value="Player1">Player1</option>
					<option value="Player2">Player2</option>
					<option value="Player3">Player3</option>
					<option value="Player4">Player4</option>
					<option value="Player5">Player5</option>
					<option value="Player6">Player6</option>
					<option value="Player7">Player7</option>
					<option value="Player8">Player8</option>
					<option value="Player9">Player9</option>
					<option value="Player10">Player10</option>
					<option value="Player11">Player11</option>
					<option value="Player12">Player12</option>
				</select>


			    <p>The Knight could use his power as long as he is not poisoned by the witch. Let the knight know if he could use his power or not. Ask the Knight to close eyes. <br>
			    </p>

			    <input type=submit name="submit1" value="submit" onclick="onClick('clicks1',this)">
			    
			</form> 

			<p><span style="background-color: #F69D9A">You have submitted the content <a id="clicks1">0</a> time.</span> </p>


		<br>

		<div class="parallax-image-two"></div> <br>


		<span style="background-color: #58F2F7">Day Time</span>: <br>

		<p> Wake up all players. Announce that it's time for sheriff Election! Ask players that want to run for sheriff election to raise hands. If only one player runs, that player automatically becomes sheriff.  </p> 
		<p> <1> Now, you could randomly start among players who raise hands and then ask them to make a statement about why they want to run for sheriff. </p>
		<p> <2> After all players finish their statements, ask if any one wants to quit sheriff election. People who run or quit could not vote. </p>
		<p> <3> Announce that it's time to vote for a new sheriff. </p>
		<p> <4> Count the votes. The person that gets the most votes becomes our new sheriff. If two people get the same votes, ask them to speak about their positions again. Then, invite all players, except the two that are running to vote. </p> <br>

		<span style="background-color: #58F2F7">Announce death of the first night</span>: <br>
		<p> Now, if there's any players died on the first night, announce their numbers to everyone and then ask them to leave their last statements; if no one died on the first night, announce that everyone was safe. Press the "reveal death" button below. </p>


		<form action="RetrieveNew.php" method="POST" target="_blank">
			<input type="submit" class="button" name="reveal_death_one" value="Reveal Death"><br><br>
		</form>



		<span style="background-color: #58F2F7">Discussion</span>: <br>

		<form action='InsertionNew.php' method=POST target="_blank">

		<select name="day_one">
		<option value="day1">Day1</option>
		</select><br>

		<p> Ask the sheriff to determine speaking order and invite all players to make statements. </p>

		<label for="knight">The person that the Knight challenged is:</label>
		<select name="knight_challenged_first" id="knight_challenge">
				<option value="">None</option>
					<option value="Player1">Player1</option>
					<option value="Player2">Player2</option>
					<option value="Player3">Player3</option>
					<option value="Player4">Player4</option>
					<option value="Player5">Player5</option>
					<option value="Player6">Player6</option>
					<option value="Player7">Player7</option>
					<option value="Player8">Player8</option>
					<option value="Player9">Player9</option>
					<option value="Player10">Player10</option>
					<option value="Player11">Player11</option>
					<option value="Player12">Player12</option>
		</select>

		<div id="challenged_first">
		</div>

		<br>

		<label for="whitewerewolf">The person that the Whitewerewolf killed is:</label>
		<select name="whitewerewolf_killed_first">
				<option value="">None</option>
					<option value="Player1">Player1</option>
					<option value="Player2">Player2</option>
					<option value="Player3">Player3</option>
					<option value="Player4">Player4</option>
					<option value="Player5">Player5</option>
					<option value="Player6">Player6</option>
					<option value="Player7">Player7</option>
					<option value="Player8">Player8</option>
					<option value="Player9">Player9</option>
					<option value="Player10">Player10</option>
					<option value="Player11">Player11</option>
					<option value="Player12">Player12</option>
		</select>


		<br> 

		<label for="werewolfexploded">If ordinary werewolf exploded, put the player's number in the dropdown:</label>
		<select name="werewolfexploded_first">
				<option value="">None</option>
					<option value="Player1">Player1</option>
					<option value="Player2">Player2</option>
					<option value="Player3">Player3</option>
					<option value="Player4">Player4</option>
					<option value="Player5">Player5</option>
					<option value="Player6">Player6</option>
					<option value="Player7">Player7</option>
					<option value="Player8">Player8</option>
					<option value="Player9">Player9</option>
					<option value="Player10">Player10</option>
					<option value="Player11">Player11</option>
					<option value="Player12">Player12</option>
		</select>

		<br>
		<br>


		<span style="background-color: #58F2F7">Voting</span>: <br>
		<p> Time to vote. Now, Whitewerewolf and Knight could not use their powers. Sheriff can use the sheriff badge to add 0.5 more vote on to any player. The person that get the most vote dies.</p>
		<p> Encourage players to vote at the same time. Players can also abstain. </p>

		<label for="vote">The person that get voted out is:</label>
		<select name="voted_first">
					<option value="Player1">Player1</option>
					<option value="Player2">Player2</option>
					<option value="Player3">Player3</option>
					<option value="Player4">Player4</option>
					<option value="Player5">Player5</option>
					<option value="Player6">Player6</option>
					<option value="Player7">Player7</option>
					<option value="Player8">Player8</option>
					<option value="Player9">Player9</option>
					<option value="Player10">Player10</option>
					<option value="Player11">Player11</option>
					<option value="Player12">Player12</option>
		</select>

	<br>

	<p>The person that get voted out today can leave a statement. </p>

	<input type=submit name="submit2" value="submit" onclick="onClick('clicks2',this)"><br> 

	</form>

	<p><span style="background-color: #F69D9A">You have submitted the content <a id="clicks2">0</a> time.</span> </p>

	<br>

	<div class="Content"></div>

	<!-- begin of night two  -->

	<button class="button" id="next" type="button" onclick="Next()">Next</button>
	<!-- end of button -->




	</div>
</div>



<div class="content_two hide"> 
<p> Interesting! You have chosen the "King of Werewolf & Guardian" setting. This setting is great for all levels of players.</p>
<p> To play this game, you need: four villagers, a seer, a witch, a hunter, a guardian, King of Werewolf, and three ordinary werewolves.</p>


<p> 
<span style="background-color: #EAFB13"> General Notice:</span> <br> 
<p>
	<1> Encourage players not to interrupt each other during discussion. <br>
	<2> Encourage players to vote at the same time.<br>
	<3> Werewolves are allowed to kill any players, including themselves :)<br>
	<4> Please do not reveal players' identity cards when they die. Usually, when players die at night (get poisoned by the witch or killed by werewolves), they could not leave their last statements at day time, except for the players that die on the first night. Players get voted out by the village at day time can always leave their statements. <br>
	<5> The Guardian and the Witch do not share information at night. If a person is protected by the Guardian and the Witch, the person dies of "overhealling" and powers/potions get wasted.<br>
	<6> When the Witch dies, she cannot use her potion to save herself; but she can use the other potion to kill a player. <br>

</p>

<span style="background-color: #EAFB13"> Notice Specific to this setting:</span> <br>

<p>
<1> King of werewolf loses power when it got poisoned by the witch. If it got shot by the hunter, it can still use power.<br>
<2> Both hunter and Ling of werewolf are not allowed to reveal their identity cards when they use their powers. <br>
<3> In theory, King of werewolf could explode himself during day time like other ordinary werewolves and immediately end discussion. But if it explodes during day time, it cannot take away a player. It can use his power only when he get voted out by the village. 
</p>

<div class="parallax-image-one"></div> <br>


<span style="background-color: #EAFB13"> Start the Game:</span> <br> 


<p> 
	<span style="background-color: #58F2F7">First Step</span>: Distribute all werewolf identity cards and assign players numbers from 1 to 12. Please make sure that almost everyone gets the cards at the same time. </p> 
<p>
	<span style="background-color: #58F2F7">Second Step</span>: Announce that the game starts and ask all players to close their eyes.<br>
</p>

<p>
	<span style="background-color: #58F2F7">Night Time</span>: <br>
	Wake up werewolves and the special villagers in the following order and follow the instructions below. 
</p>

<p> <1> Ask all <u class="dotted"> werewolves </u> to open their eyes and ask the King of werewolf to raise hands to indicate identity. <br>

	<2> Give werewolves some time to silently discuss their strategies. After around 3 minutes, ask werewolves to close eyes. 
</p>

</div>


</div>


</div>




</body>





</html>




