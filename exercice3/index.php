<?php $numberInit = 100; $numberEnd = 50;?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>partie 1 exercice 3</title>
</head>
<body>

<?php
    while ($numberInit > 10) { ?>        
        <p><?=($numberInit*$numberEnd);?></p>
        <?php
            $numberInit--;
    }
?>

</body>
</html>