<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['location'] = $_POST['location'];
    $_SESSION['age'] = $_POST['age'];
    $_SESSION['university'] = $_POST['university'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Success Page</title>
</head>
<body>
    <h1>Thank You!</h1>
    <?php 
        if(isset($_SESSION['name'])) {
            echo "Thank you for filling the form, " . $_SESSION['name'] . ".";
            
        }
    ?>
</body>
</html>
