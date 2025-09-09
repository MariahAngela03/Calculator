<?php
header('Content-Type: application/json; charset=utf-8');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['expression'])) {
    $expression = trim($_POST['expression']);

    try {
        $result = eval("return ($expression);");
        echo json_encode(['status' => 'success', 'result' =>$result]);
    } catch (ParseError $e) {
        echo json_encode(['status' => 'error', 'message' => 'Invalid expression']);
    }
}
?>