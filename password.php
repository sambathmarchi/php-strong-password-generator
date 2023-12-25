<?php

function generateRandomString($length = 8)
{
    return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!?@', ceil($length / strlen($x)))), 1, $length);
}

$passwordLength = $_GET["passwordLength"] ?? "Empty";
$msg = "$passwordLength";
echo $msg;
$result = generateRandomString();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P-generator</title>
</head>

<body>
    <h1><?php echo $msg ?></h1>
    <h1><?php echo $result ?></h1>
    <a href="form.php">Go Back To Previous Page</a>
</body>

</html>