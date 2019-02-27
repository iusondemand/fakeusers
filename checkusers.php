<?php
# Very simple and not effective code to check if a username is a fake.
# Lab for Milano Chatbots Meetup Group on Telegram

$user = "";

$user = trim(strip_tags($trim));
$fake_error = "";

### methods

#### method 1: too many numbers
$howmany_numbers=0;
if ( strlen($user)/3 < $howmany_numbers ) {
  $fake_error .= "too many numbers";
}

#### method 2: name too short
if ( strlen($user)<8 ) {
  $fake_error .= "too short";
}



#### method 3: ... 



#### finally


if ($fake_error !="")  {
    $fake_msg = "fired !";
}
