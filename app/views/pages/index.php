<?php 
foreach ($data['users'] as $user){
  echo "Information: " . $user->user_name . " __ " . $user->user_email;
  echo "<br>";
}