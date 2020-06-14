///////////////////////Function to run Add day and Add night
var i =1; 
function Next() {

  // document.getElementsByClassName("Content")[0].style.display = 'inline';

  if (i%2===0) {
    createDay();
  } else{
    createNight();
  }
  i++;

}





///////////////////////FUNCTION ONE: switch between different werewolf mode: 
$(document).on('change', '.div-toggle', function() {
  var target = $(this).data('target');
  var show = $("option:selected", this).data('show');
  $(target).children().addClass('hide');
  $(show).removeClass('hide');
});
$(document).ready(function(){
  $('.div-toggle').trigger('change');
});


// // ///////////////////////FUNCTION TWO: show the seer and the knight hints 


 $(document).ready(function(){

    $.fn.knight_challenge = function(challenged_id) {

// remember, don't add # when define the function;

// Begin to define a function that could show the moderator if the player challenged by Knight is a villager/special villager/werewolf. Function will be executed whenever the Moderator changes the dropdown table.  

//connect with Knight.php

      var ajax_knight = {
        url:"knight.php",
        type:"POST",
        success: function(result) {
          $(challenged_id).html(result);
        }
      };

      $.ajax(ajax_knight);
    }

//finish defining function



//start to apply function
//day1

    $("#knight_challenge").change(function(){
      $.fn.knight_challenge("#challenged_first");
    });

// //day2

//     $("#knight_challenged2").change(function(){
//       $.fn.knight_challenge("#challenged2");
//     });

// //day3
//     $("#knight_challenge_third").change(function(){
//       $.fn.knight_challenge("#challenged_third");
//     });

// //day4
//     $("#knight_challenge_fourth").change(function(){
//       $.fn.knight_challenge("#challenged_fourth");
//     });


 //Begin to define another function that shows the seer if the person that the seer check is a werewolf or not. 

    $.fn.seer_check = function(check_id) {

      var ajax_seer = {
        url:"get_data.php",
        type:"POST",
        success: function(result) {
          $(check_id).html(result);
        }
      };

      $.ajax(ajax_seer);
    }



//finish defining function


//start to apply function
//Night2

    $("#check2").change(function(){
      $.fn.seer_check("#show2");
    });

//Night3

    $("#check_two").change(function(){
      $.fn.seer_check("#show_two");
    });

//Night4
    $("#check4").change(function(){
      $.fn.seer_check("#show4");
    });

//finish applying function



  });


///////////////////////FUNCTION THREE: count clicks


var clickArray=[0,0,0,0,0,0,0,0];


var onClick = function (value, object) {

  var str = value;

  //use the substring function: 
  var sub = str.slice(-1);
  var int = parseInt(sub) -1;

  //begin to calculate. Change the number in the array. 
  clickArray[int]=clickArray[int] +1;

  //print
  document.getElementById(value).innerHTML = clickArray[int];

};

///////////////////////FUNCTION FOUR: COUNT NIGHT

var clickCreateNight=1

// function countCreateNight(){
//     clickCreateNight=clickCreateNight+1;
//     return clickCreateNight
// }


function countCreateNight(){
    clickCreateNight=clickCreateNight+1;
    return clickCreateNight
}

///////////////////////FUNCTION FIVE: MAKE DROP DOWN LIST

function makeDropDown(parentElem,selectName,options) {
  var select = document.createElement("select");
  select.setAttribute("name", selectName);


  //create id for seer dropdown 

  if (selectName.indexOf("check") >= 0 || selectName.indexOf("knight") >= 0 ){
    select.setAttribute("id", selectName);
  } 

  //create options

  if (options == "playerlist") {

    var optionArray = ["", "Player1", "Player2", "Player3", "Player4", "Player5", "Player6", "Player7", "Player8", "Player9", "Player10", "Player11", "Player12"];

  } else {
    var optionArray = options; 
  }


  //next step of creating options: 

  for(var i = 0; i < optionArray.length; i++) {
    var opt = optionArray[i];
    var el = document.createElement("option");
    el.textContent = opt; 
    el.value = opt;

  //paste all options to "select" elem
    select.appendChild(el);
  }

  //paste select to parent elem 
  parentElem.appendChild(select); 
  
}




///////////////////////FUNCTION SIX: GENERATING WORDS BEFORE ENTERING INTO DAY/NIGHT

function createParagraph(parentElem, text) {
    var p = document.createElement("p");
    p.innerHTML=text;
    parentElem.appendChild(p);

}


///////////////////////FUNCTION SEVEN: CREATING LABELS
function createlabel(parentElem, content, forTxt)  {
  var label = document.createElement("label");
  label.innerHTML=content;
  label.setAttribute("for", forTxt);

  parentElem.appendChild(label);
}


///////////////////////FUNCTION SEVEN: CREATING LINE BREAK
function linebreak(parentElem) {
  var br = document.createElement("br");

  parentElem.appendChild(br);
}



///////////////////////FUNCTION  EIGHT: CREATING A SUBMIT BUTTON 

function createSubmit(parentElem, submitName) {
  var btn = document.createElement("input");
  btn.type="submit";
  btn.name=submitName; 
  parentElem.appendChild(btn);
}


///////////////////////FUNCTION  NINE: SHOW ID
function createid (parentElem, showid) {
  var id = document.createElement("div");
  id.setAttribute("id", showid);

  parentElem.appendChild(id);
}

///////////////////////FUNCTION  TEN: SUBMIT REMINDER

function submitReminder(parentElem, clickid) {
  var p = document.createElement("p");

  var txt = document.createTextNode(" time.");

  var a = document.createElement("a");
  a.setAttribute("id", clickid);
  a.innerText="0"

  var span=document.createElement("span");
  span.innerHTML  = "You have submitted the content "
  span.style.cssText = "background-color: #F69D9A";
  span.appendChild(a);
  span.appendChild(txt);

  p.appendChild(span);
  parentElem.appendChild(p);

}

///////////////////////FUNCTION ELEVEN: GENERATING NIGHT 
function createNight() {

  console.log("Night is run one time");

  ///count number of nights
  var nightNum = countCreateNight();

  console.log("Night number. Figuring out orz");

  console.log(nightNum);

  ///create image to seperate night time and day time

  //style the div 
  var divImg = document.createElement("div");
  divImg.setAttribute('class', 'parallax-image-one');

  //append the div to the right place
  var div=document.getElementsByClassName("Content");



  var idnum = "Content Night" + nightNum //set a unqiue class for each night
  div[0].setAttribute("id", idnum); //add one id. Prepare for delete function 
  div[0].style.display = "block";

  div[0].appendChild(divImg);

  //add a break 
  var br = document.createElement("br");
  div[0].appendChild(br);

  ///create headline "night time"
  var p = document.createElement("p");

  //style the p element
  var span = document.createElement("span");
  span.style.cssText="background-color:#58F2F7";


  //actually write "night time"
  var textnode = document.createTextNode("Night Time");

  span.appendChild(textnode);
  p.appendChild(span);
  div[0].appendChild(p);

  ///start creating form 

  var form = document.createElement("form");
  form.setAttribute("action", "Insertion.php");
  form.setAttribute("method", "POST");
  form.setAttribute("target", "_blank");
  div[0].appendChild(form);

  //an option about time
  select_name = "night" + nightNum; 
  option_name = "night" + nightNum;
  makeDropDown(form,select_name,[option_name]);

  //words to ask players to close eyes
  createParagraph(form, "<1> Ask all players to close eyes.");
  createParagraph(form,"<2> Ask all werewolves to open eyes.");

  ///create dropdown list of victim
  //create labels 

  createlabel(form, "The victim tonight is: ", "victim");

  //create option 
  victim_num = "victim" + nightNum;
  makeDropDown(form, victim_num, "playerlist");

  ///create notice 
  createParagraph(form, "Give werewolves some time to use their body language to discuss general strategies. Then, ask all werewolves to close their eyes.");
  linebreak(form);
  ///////////////Same logic for the rest of the dropdown

  ///Guardian 
  createParagraph(form, "<3> Ask the Guardian to open eyes.");
  createlabel(form, "The person that the Guardian wants to protect is: ", "guardian");
  var guardian_protected = "guardian_protected" + nightNum;
  makeDropDown(form, guardian_protected, "playerlist");
  createParagraph(form, "Ask the Guardian to close eyes.")

  linebreak(form);

  ///Seer
  createParagraph(form, "<4> Ask the Seer to open eyes.");
  createlabel(form, "The person that the Seer checks is:", "seer");
  var seer_checked = "check" + nightNum;
  makeDropDown(form, seer_checked, "playerlist"); //will also create id
  createParagraph(form, "Ask the Seer to close eyes.");

  var new_div = document.createElement("div");
  var id = "show" + nightNum;
  var id2 = "#" + id;
  new_div.setAttribute("id", id);

  form.appendChild(new_div);


  //execute a function that reminds the moderator about the identity of players when seer uses power
  const selectElem = document.getElementById(seer_checked); //id defined in a few lines above

  selectElem.addEventListener("change", function(){
    var ajax_seer = {
      url: "get_data.php",
      type:"POST",
      success:function(result) {
        $(id2).html(result); //id is an id that we constructred a few lines above
      }
    };

    $.ajax(ajax_seer);

  });


//finish defining function

  linebreak(form);

  //WITCH 
  createParagraph(form, "<5> Ask the Witch to open eyes. Without making any noise, tell the witch who is the player that get killed by werewolves.");
  createlabel(form, "The person that the Witch wants to save is: ", "witch");
  var witch_save = "victim_saved" + nightNum;
  makeDropDown(form, witch_save, "playerlist");

  createlabel(form, "The person that the Witch wants to kill is: ", "witch");
  var witch_poison = "victim_poisoned" + nightNum;
  makeDropDown(form, witch_poison, "playerlist");

  createParagraph(form, "Ask the Witch to close eyes.");

  linebreak(form);

  //KNIGHT
  createParagraph(form, "<6> Ask the Knight to open eyes.");
  createParagraph(form, "The Knight could use his power as long as he is not poisoned by the Witch. Let the Knight know if he could use his power or not. Ask the Knight to close eyes.");

  linebreak(form);

  ///////////////finishing all dropdown
  //submit
  var ad = Number(nightNum) - Number(1);
  var submitNamePre=Number(nightNum)+ad; //if night=2, submitName should be 3; if night=3, submitName should be 5
  var submitName="submit"+submitNamePre.toString();

  createSubmit(form, submitName);


  var onclick = "clicks" + submitNamePre.toString();

  document.getElementsByName(submitName)[0].addEventListener("click", function() {
    onClick(onclick,this);
  })


  ///CREATE SUBMIT REMINDER: 
  submitReminder(form, onclick);

}

////////////////////////CREATE DAY
///////////////////////FUNCTION ONE: COUNT NIGHT

var clickCreateDay=1
function countCreateDay(){
    clickCreateDay = clickCreateDay +1;
    return clickCreateDay
}


/////////////////////FUNCTION TWO: REVEAL DEATH 
function RevealDeath(parentElem, RevealName) {
  var form = document.createElement("form");
  form.setAttribute("action", "Retrieve.php");
  form.setAttribute("method", "POST");
  form.setAttribute("target", "_blank");

  var input = document.createElement("input");
  input.setAttribute("type", "submit");
  input.setAttribute("class", "button");
  input.setAttribute("value", "Reveal Death");
  input.setAttribute("name", RevealName);

  form.appendChild(input);
  parentElem.appendChild(form);

}

/////////////////////
function createDay() {

  //Count number of days
  var dayNum = countCreateDay();

  ///create image to seperate night time and day time

  //style the div 
  var divImg = document.createElement("div");
  divImg.setAttribute('class', 'parallax-image-two');

  //append the div
  var div = document.getElementsByClassName("Content");

  var idnum = "Content Day" + dayNum //set a unqiue class for each day
  div[0].setAttribute("id", idnum); //add one more class. Prepare for delete function 
  div[0].style.display = "block";

  div[0].appendChild(divImg);

  //add a break 
  var br = document.createElement("br");
  div[0].appendChild(br);

  ///create some notice
  var p = document.createElement("p");

  //style the p element
  p.setAttribute("class", "textnode");
  div[0].appendChild(p);

  var textnode = document.createTextNode("Announce death of the second night.");

  var notice = document.createTextNode(" Now, click on the button below and asked the player that died in the second night to leave.");
  p.appendChild(textnode);
  p.appendChild(notice);

  ///create a button called reveal death 
  var reveal_num=Number(dayNum)
  var RevealName = "reveal_death" + reveal_num;

  RevealDeath(div[0], RevealName);

  ///create text before offically starting discussion 
  var txt = document.createTextNode("Now, discussion begins. The sheriff can now determine the speaking order. (Start from the left or right side of the person died.) The sheriff could pass the badge to someone else or destroy the badge if he/she/they is the person dies.");
  div[0].appendChild(txt);

  linebreak(div[0]);
  linebreak(div[0]);

  ///create headline of discussion
  var p2 = document.createElement("p");

  div[0].appendChild(p2);

  var span = document.createElement("span");
  span.style.cssText="background-color:#58F2F7";

  var txt_node = document.createTextNode("Discussion:");

  span.appendChild(txt_node);
  p2.appendChild(span);


  ///start creating form
  var form = document.createElement("form");
  form.setAttribute("action", "Insertion.php");
  form.setAttribute("method", "POST");
  form.setAttribute("target", "_blank");
  div[0].appendChild(form);

  //an option about time
  select_name = "day" + dayNum; 
  option_name = "day" + dayNum;
  makeDropDown(form,select_name,[option_name]);

  linebreak(form);

  ///Time for sheriff to start discussion
  var sheriff = document.createTextNode("Ask the sheriff to determine speaking order and invite all players to make statements. If the sheriff dies, the sheriff can either destroy the badge or pass it on to anyone alive.");

  form.appendChild(sheriff);

  linebreak(form);

  ///Knight
  createlabel(form, "The person that the Knight challenged is: ", "knight");
  var knight_challenge = "knight_challenged" + dayNum;
  makeDropDown(form, knight_challenge, "playerlist"); 

  linebreak(form);

  //create <div id="challenged2">
  var new_div = document.createElement("div");
  var challenged_id = "challenged" + dayNum;
  new_div.setAttribute("id", challenged_id);

  form.appendChild(new_div);

  //execute a function defined above (moderator can now see the identity of player that get challenged by knight)

  var challenged = "#" + "challenged" + dayNum;

  const selectElem = document.getElementById(knight_challenge); //id defined in a few lines above


  selectElem.addEventListener("change", function(){
    var ajax_knight = {
      url: "knight.php",
      type:"POST",
      success:function(result) {
        $(challenged).html(result); //challenged is an id that we constructred a few lines above
      }
    };

    $.ajax(ajax_knight);

  });



  //whitewerewolf 
  createlabel(form, "The person that the Whitewerewolf killed is: ", "whitewerewolf");
  var whitewerewolf = "whitewerewolf_killed" + dayNum;
  makeDropDown(form, whitewerewolf, "playerlist"); 

  linebreak(form);

  //ordinary werewolf
  createlabel(form, "If ordinary werewolf exploded, put the player's number in the dropdown: ", "werewolf");
  var werewolf = "werewolfexploded" + dayNum;
  makeDropDown(form, werewolf, "playerlist"); 

  linebreak(form);
  linebreak(form);

  //voting
  var head = document.createElement("p");
  var span2 = document.createElement("span");
  var head_txt = document.createTextNode("Voting: ");

  span2.style.cssText="background-color:#58F2F7";

  span2.appendChild(head_txt);
  head.appendChild(span2);
  form.appendChild(head);

  createlabel(form, "The person that get voted out is: ", "voted");
  var voting = "voted" + dayNum;
  makeDropDown(form, voting, "playerlist"); 

  linebreak(form);

  createParagraph(form, "The person that get voted out today can leave a statement.");

  ///////////////finishing all dropdown
  //submit
  var ad = Number(dayNum);
  var submitNamePre=Number(dayNum)+ad; //if day=2, submit=4; if day=3, submit=6.
  var submitName="submit"+submitNamePre.toString();

  createSubmit(form, submitName);


  var onclick = "clicks" + submitNamePre.toString();

  document.getElementsByName(submitName)[0].addEventListener("click", function() {
    onClick(onclick,this);
  })


  ///CREATE SUBMIT REMINDER: 
  submitReminder(form, onclick);

}

//////////////////////////////////////////


// var nvar=2; //start from night 2
// var dvar = 2; //start from day 2
// var newvar = 2; //general calculation: how many times the users press on "hide"

// function Delete() {

//   if  (newvar % 2 === 0)  {
//   console.log(newvar);
//   console.log("this is night");
//   var classnum = "Content Night" + nvar;
//   var elem = document.getElementById(classnum);

//   elem.style.display = "none";

//   // elem.remove();
//   nvar++;

//   // while(elem > 0){
//   //       elem[0].parentNode.removeChild(elem[0]);
//   //       nvar++;
//   //} //end of while loop
    
//   } else {
//   console.log(newvar);
//   console.log("this is day");

//   var classnum = "Content Day" + dvar;
//   var elem = document.getElementById(classnum);

//   elem.style.display = "none";
//   // elem.remove();
//   dvar++;




// }

// console.log(classnum);

// newvar++;
// hide_count++;
// i=i-1;

// }



//////////////////////////////////////////

// function deleteDay() {

//   var divImg = getElementsByClassName("parallax-image-two");

//   while (divImg.length > 0 ) {
//     divImg[0].parentNode.removeChild(divImg[0]);
//   }

// }

// /////////////////////////////////////////
// function deleteNight() {
//   var divImg = getElementsByClassName("parallax-image-one");

//   while (divImg.length > 0 ) {
//     divImg[0].parentNode.removeChild(divImg[0]);
//   }
// }

