<?php $numberInit = 0; $numberEnd = 40;?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>partie 1 exercice 2</title>
</head>
<body>

    
<?php
    while ($numberInit <= 20) { ?>
        <p><?=($numberInit*$numberEnd);?></p>
        <?php 
            $numberInit++;
    }
?>

</body>
</html>