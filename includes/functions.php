<?php
// Function random password
function random_password($user_password_length)
{
    // Array of characters
    $lower_chars = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
    $upper_chars = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");
    $numbers = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
    $symbols = array("!", "?", "#", "$", "%", "&", "*", "-", "_");

    // Array merging
    $all_chars = array_merge($lower_chars, $upper_chars, $numbers, $symbols);

    // Generating random password
    $password = '';
    for ($i = 0; $i < $user_password_length; $i++) {
        $random_chars = $all_chars[array_rand($all_chars)];
        $password .= $random_chars;
    }

    return $password;
}
