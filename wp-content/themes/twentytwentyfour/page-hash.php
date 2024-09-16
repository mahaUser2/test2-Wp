<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="GET">
        <label for="formPassword">Indtast password her:</label>
        <input type="text" id="formPassword" name="formPassword" required>
        <button>SEND!</button>
    </form>

    <?php
    $passwordPlainFromForm =  $_GET["formPassword"];
    $hashedPasswordFromForm = md5($passwordPlainFromForm);

    echo "Du skrev: $passwordPlainFromForm og det blev hashed til: $hashedPasswordFromForm";
    ?>
</body>

</html>