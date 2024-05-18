<?php
function count_Vowels($string)
{
    // Use 'preg_match_all' with a regular expression to find all vowels (case-insensitive) in the string
    preg_match_all('/[aeiou]/i', $string, $matches);

    // Return the count of matched vowels found in the string
    return count($matches[0]);
}

$strings = ["Hello", "World", "PHP", "Programming"];
foreach($strings as $countVowel){
    echo "Original String: $countVowel, " ."Vowel Count: ";
    print_r(count_Vowels($countVowel));
    echo ", "."Reversed String:";
    print_r(strrev($countVowel));
    echo"</br>";
    
}