<?php
require_once __DIR__ . '/functions.php';
var_dump($_GET['password_length']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Password Generator</title>
    <!-- style -->
    <link rel="stylesheet" href="./style.css">
    <!-- bootstrap 5.3.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <header>
            <h1 class="text-center pt-5 mb-3">
                Strong Password Generator
            </h1>
        </header>
        <main>
            <h2 class="text-white text-center mb-3">
                Genera una password sicura
            </h2>
            <!-- se il parametro è vuoto -->
            <?php
            if (empty($_GET['password_length'])) {
            ?>
            <div class="row">
                <div class="col-12">
                    <p class="empty p-4">
                        Nessun parametro valido inserito
                    </p>
                </div>
            </div>
            <?php
            }
            ?>
            <form action="" method="get" class="p-4">
                <div class="row gy-3">
                    <div class="col-6">
                        <label for="password_length">Lunghezza password:</label>
                    </div>
                    <div class="col-6">
                        <input type="number" id="password_length" name="password_length"
                            placeholder="Inserisci il numero dei caratteri">
                    </div>
                    <!-- se c'è e se non è vuoto -->
                    <?php
                    if (isset($_GET['password_length']) && !empty($_GET['password_length'])) {
                    ?>
                    <div class="col-12">
                        <!-- stampa la password generata -->
                        <p>
                            La password generata è: <?php echo random_password(intval($_GET['password_length'])) ?>
                        </p>

                    </div>
                    <?php
                    }
                    ?>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Invia</button>
                        <button type="reset" class="btn btn-secondary">Annulla</button>
                    </div>
                </div>
            </form>
        </main>
    </div>

</body>

</html>