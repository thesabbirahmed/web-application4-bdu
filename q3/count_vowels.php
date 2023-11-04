<?php
function countVowels($string) {
    // Define all vowels in an array
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $count = 0;

    // Count the vowels
    foreach (str_split($string) as $char) {
        if (in_array($char, $vowels)) {
            $count++;
        }
    }

    return $count;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the input string from the form
    $input_string = $_POST['input_string'];

    // Count the vowels in the string
    $vowelCount = countVowels($input_string);

    // Output the result
    echo "<p>The number of vowels in the string is: $vowelCount</p>";
}
?>
