<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['numbers'])) {
    // Convert the input string to an array of integers
    $numbers = array_map('intval', explode(',', $_POST['numbers']));

    // Perform the tasks:

    // i. Print the first element of the array
    $firstElement = $numbers[0];

    // ii. Print the last element of the array
    $lastElement = end($numbers);

    // iii. Add a new element with the value of 12 to the end of the array
    $numbers[] = 12;

    // iv. Calculate the sum of all the elements in the array
    $sumOfElements = array_sum($numbers);

    // Output the results
    echo "<p>The first element is: " . htmlspecialchars($firstElement) . "</p>";
    echo "<p>The last element before adding 12 is: " . htmlspecialchars($lastElement) . "</p>";
    echo "<p>Updated array after adding 12: " . htmlspecialchars(implode(', ', $numbers)) . "</p>";
    echo "<p>The sum of all elements is: " . htmlspecialchars($sumOfElements) . "</p>";
} else {
    // Redirect back to the form if no data is submitted
    header('Location: array_input.html');
    exit;
}
?>
