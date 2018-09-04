<?php
$mongo = new MongoClient();
$db = $mongo->cruzados;
$collection = $db->recruitment;

if($_POST)
{
$insert = array(
  'main_char'=> $_POST['main_char'],
  'alts'=> $_POST['alts'],
  'time_playing'=> $_POST['time_playing'],
  'prev_corps'=> $_POST['prev_corps'],
  'enjoy'=> $_POST['enjoy'],
  'goals'=> $_POST['goals'],
  'pve_pvp'=> $_POST['pve_pvp'],
  'main_char'=> $_POST['main_char'],
  'main_char'=> $_POST['main_char']
  );

    if($collection->insert($insert))
    {
      echo "Thanks for applying to Cruzados!"
    }
    else {
      echo "Error has occured, please contact Recruiter"
    }
}
else {
  echo "Please fill out the Application Form before Submitting"
}


 ?>
