<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Function to sum even numbers
    function sumEvenNumbers($numbers) {
        $sum = 0;
        foreach ($numbers as $number) {
            if ($number % 2 == 0) {
                $sum += $number;
            }
        }
        return $sum;
    }

    // Get input numbers and convert to an array
    $number_list = explode(',', $_POST['numbers']);
    $number_list = array_map('intval', $number_list); // Convert all elements to integers

    // Calculate the sum of even numbers
    $sumOfEvens = sumEvenNumbers($number_list);

    // Output the result
    echo "<p>The sum of even numbers is: $sumOfEvens</p>";
}
?>
