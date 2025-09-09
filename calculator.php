<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $calcu = $_POST['calcu'];
    try {
        $result = eval("return ". $calcu.";");
        echo "<h2>Result: " . $result. "</h2>";
        echo"<a href = 'index.html';>Back</a>";

    } catch(Exception $e) {
    echo "Invalid expression";
    }
}
?>