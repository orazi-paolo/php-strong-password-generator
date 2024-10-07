<?php
require __DIR__ . '/functions.php';

// inizializzo la sessione
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generated</title>
    <!-- style -->
    <link rel="stylesheet" href="./style.css">
    <!-- bootstrap 5.3.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header>
        <h1 class="text-center p-4">
            PASSWORD GENERATED
        </h1>
    </header>
    <main>
        <p class="text-white text-center">
            La password generata è: <?php echo random_password(
                                        $_SESSION['password_length'],
                                        $_SESSION['upper_letters'],
                                        $_SESSION['lower_letters'],
                                        $_SESSION['numbers'],
                                        $_SESSION['symbols']
                                    ) ?>
        </p>
    </main>
</body>

</html>