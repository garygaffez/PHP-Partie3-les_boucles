<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>partie 1 exercice 3</title>
</head>
<body>

    <?php $age = 17; $gender = "Femme";

    if ($gender == "Homme" && $age >= 18) {
        echo "Vous êtes un homme et vous êtes majeur";
    } else if ($gender == "Homme" && $age < 18) {
        echo "Vous êtes un homme et vous êtes mineur";
    } else if ($gender == "Femme" && $age >= 18) {
        echo "Vous êtes une femme et vous êtes majeur";
    } else if ($gender == "Femme" && $age < 18) {
        echo "Vous êtes une femme et vous êtes mineure";
    }

?>
</body>
</html>