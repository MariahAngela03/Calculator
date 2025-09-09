<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $calcu = $_POST['calcu'];

    try {
        // Evaluate the expression safely
        $result = eval("return $calcu;");
        echo $result;
    } catch (ParseError $e) {
        echo "Invalid";
    }
}
?>