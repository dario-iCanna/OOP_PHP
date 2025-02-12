<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studenti</title>
</head>
<body>
    <?php
    require_once('Studente.php');

    $studente = new Studente("dario", "cannavacciuolo","2646362336");

    echo $studente->presentati();


    ?>
</body>
</html>