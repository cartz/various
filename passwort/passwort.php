<?php

$letters = array("a", "b", "c", "d", "e", "f", "g", "h", "k", "m", "n", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
$numbers = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
$signs = array(".", "!", "%", "&", "=", "?", "@", "§", "$", "-", "_");

// allowed signs for the output

$length = 8;

// length of the output

for($i = 0, $password = ""; strlen($password) < $length; $i++)
{
        if(rand(0, 1) == 0 && isset($letters))
        {
                $password .= $letters[rand(0, count($letters))];
        }
        elseif(rand(0, 1) == 1 && isset($numbers))
        {
                $password .= $numbers[rand(0, count($numbers))];
        }
        elseif(rand(1, 2) == 2 && isset($signs))
        {
                $password .= $signs[rand(0, count($signs))];
        }
}

// this function generates the password

echo$password;

// this echos the generated password

?>