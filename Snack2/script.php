<?php
$name =$_GET['name'];
$email = $_GET['email'];
$number = $_GET['age'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (strlen($name) > 3) {
    if (strpos($email, '@') !== false) 
    if (strpos($email, '.') !== false)
    if (is_numeric($number)) {
        echo ' Acesso riuscito';}
}else{echo 'Acesso negato';} ?>
    <h3></h3>
</body>
</html>