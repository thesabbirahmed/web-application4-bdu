<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the two numbers from POST request
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];

    // Calculate sum, difference, product, and quotient
    $sum = $number1 + $number2;
    $difference = $number1 - $number2;
    $product = $number1 * $number2;
    $quotient = $number2 != 0 ? $number1 / $number2 : "undefined (division by zero)";

    // Display the results
    echo "<p>Sum: " . $sum . "</p>";
    echo "<p>Difference: " . $difference . "</p>";
    echo "<p>Product: " . $product . "</p>";
    echo "<p>Quotient: " . $quotient . "</p>";
}
?>
