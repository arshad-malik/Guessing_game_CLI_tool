<?php
// Guessing game CLI tool 

$number = rand(1, 100);

while (true) {
    $user_input = (int)readline("Enter Your Number: ");

    // Check if the user entered a valid integer
    if (!is_numeric($user_input)) {
        echo "Please enter a valid number.\n";
        continue;
    }

    // Compare user input with the random number
    if ($user_input < $number) {
        echo "Please guess a bigger number.\n";
    } elseif ($user_input > $number) {
        echo "Please guess a lower number.\n";
    } else {
        echo "Congratulations! You guessed the right answer! 😁\n";
        break;
    }
}


?>
