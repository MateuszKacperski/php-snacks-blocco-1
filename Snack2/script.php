<?php
$name =$_GET['name'] ?? '';
$email = $_GET['email'] ?? '';
$number = $_GET['age'] ?? '';
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
    if (mb_strlen(trim($name)) > 3) {
    if (str_contains($email, '@') !== false) 
    if (str_contains($email, '.') !== false)
    if (is_numeric($number) && $number > 0) {
        echo ' Acesso riuscito';}
}else{echo 'Acesso negato';} ?>
    <h3></h3>
</body>
</html>