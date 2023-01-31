<?php 
function isPalindrome($word) {
  $word = strtolower($word);
  echo "The word is: $word -> ";
  
  $lastIndex = strlen($word) - 1;

  for ($i = 0; $i <= $lastIndex; $i++) {
    if($word[$i] !== $word[$lastIndex - $i])
      return "And isn't palindrome. <br>";
  }

  return "And is palindrome. <br>";
}

function simplePalindrome($word) {
  $word = strtolower($word);
  return $word === strrev($word) ? "Is palindrome! <br>" : "Isn't palindrome!<br>";
}

echo isPalindrome("ovo");
echo isPalindrome("Lucas");
echo isPalindrome("Arara");

echo simplePalindrome("ovo");
echo simplePalindrome("Lucas");
echo simplePalindrome("Arara");