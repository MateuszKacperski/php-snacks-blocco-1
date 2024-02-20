<?php 
$paragraph = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium id sed quaerat consequatur, corporis sit eum aliquid illum harum tempore ut, nisi facilis cumque aspernatur ab, commodi repellat ratione quidem corrupti quae dignissimos! Corporis enim ipsam cumque quia saepe fuga accusamus eligendi quam et perferendis alias sapiente, ipsum, vel commodi asperiores error? Vitae porro modi repudiandae doloremque, blanditiis laudantium, eius voluptates accusantium at doloribus necessitatibus architecto rerum iure suscipit officiis quo, nihil sapiente. Magni similique hic placeat ducimus autem blanditiis consectetur officiis iusto corporis maiores!";

$paragraphs = explode('.', $paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Mia Divisione</h2>
    <atricle>
    <?php foreach($paragraphs as $paragraph): ?>
     <p><?=  $paragraph ?></p>
     <?php endforeach ?>
     <article>
</body>
</html>