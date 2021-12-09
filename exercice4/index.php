<?php $number = 1;?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>partie 1 exercice 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="bg-dark">

<?php
    while ($number < 11) { ?>
        <p class="text-danger h1 text-center p-3">
            <?=$number;?>
        </p>
    <?php
    // permet d'incrémenter de la valeur que l'on souhaite
        $number += $number / 2;
    }
?>

</body>
</html>