<?php
echo "<pre>";
echo print_r($_POST);
echo "/<pre>";
$name = $POST['name'];
$email = $_POST['emailAdress'];
$to = "mranderson85@gmail.com";
$body = "Hello, ";
$body .= "From: ".$name. "\r\n";
$body .= "email: ".$email. "\r\n";
mail($to, "test email", $body);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contect From</title>
</head>
<body>
    <form action="./mail.php" method="post">
        <input type="text" name="name" placeholder="What is your Name:" required>
        <input type="text" name="emailAddress" id="emailAddress" placeholder="Email Address" required>
        <button type="submit">Submit</button>


    </form>
</body>
</html>
