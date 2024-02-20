<?php 
//snack 1 
$matches = [
    [   'match' => 'Olimpia Milano - Cantù',
        'hometeam' => 'Olimpia Milano',
        'awayteam'=> 'Cantù',
        'homescore' => 55,
        'awayscore' => 60
],
[   'match' => 'Miami Heat - Chicago Bulls',
    'hometeam' => 'Miami Heat',
    'awayteam'=> 'Chicago Bulls',
    'homescore' => 102,
    'awayscore' => 93
],
 [   'match' => 'Dallas Mavericks - Los Angeles Lakers',
'hometeam' => 'Dallas Mavericks',
'awayteam'=> 'Los Angeles Lakers',
'homescore' => 70,
'awayscore' => 98
]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Snack 1 -->
    <h3><strong>Matches</strong></h3>
    <ul>
    <?php foreach($matches as $match):   ?>
       <li><?= $match['match']?> || <?= $match['homescore']?> - <?= $match['awayscore']?></li>
    <?php endforeach; ?>
    </ul>
</body>
</html>