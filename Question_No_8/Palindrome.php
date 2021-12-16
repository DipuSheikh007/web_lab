<?php
function Palindrome($MyString) {
  $revString = strrev($MyString);
  if ($revString == $MyString){
    echo $MyString." is a Palindrome string.\n";
  } else {
    echo $MyString." is not a Palindrome string.\n";
  }
}

Palindrome("radar");
Palindrome("rubber");
Palindrome("malayalam");
?>