<?php
require_once __DIR__ . '/functions.php';
var_dump($_GET['password_length']);

// inizializzo la sessione
session_start();
// se il parametro della lunghezza è settato
if (isset($_GET['password_length'])) {
    // salvo il valore dei parametri nella sessione
    $_SESSION['password_length'] = $_GET['password_length'];
    $_SESSION['upper_letters'] = isset($_GET['upper_letters']);
    $_SESSION['lower_letters'] = isset($_GET['lower_letters']);
    $_SESSION['numbers'] = isset($_GET['numbers']);
    $_SESSION['symbols'] = isset($_GET['symbols']);
}


if (
    // se il parametro è maggiore di 0
    $_GET['password_length'] > 0
    // se è settato
    && isset($_GET['password_length'])
    // se non è vuoto
    && !empty($_GET['password_length'])
) {
    // reinderizza alla pagina passwordGenerated.php
    header('Location: passwordGenerated.php');
    // exit serve per terminare l esecuzione della pagina
    exit;
}
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
            <form method="get" class="p-4">
                <div class="row gy-3">
                    <div class="col-6">
                        <label for="password_length">Lunghezza password:</label>
                    </div>
                    <div class="col-6">
                        <input type="number" id="password_length" name="password_length"
                            placeholder="Inserisci il numero dei caratteri">
                    </div>
                    <div class="col-6">
                        <label for="repetitions">Consenti ripetizioni di uno o più caratteri:</label>
                    </div>
                    <div class="col-6">
                        <input type="checkbox" id="repetitions" name="repetitions"> Non consentire
                    </div>
                    <div class="col-6">
                        <p>
                            Seleziona i tipi di caratteri che vuoi escludere dalla password:
                        </p>
                    </div>
                    <div class="col-6">
                        <div class="form-check">
                            <input class="form-check-input" name="upper_letters" type="checkbox" id="upper_letters">
                            <label class="form-check-label" for="upper_letters">
                                Lettere maiuscole
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="lower_letters" id="lower_letters">
                            <label class="form-check-label" for="lower_letters">
                                Lettere minuscole
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="numbers" id="numbers">
                            <label class="form-check-label" for="numbers">
                                Numeri
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="symbols" id="symbols">
                            <label class="form-check-label" for="symbols">
                                Simboli
                            </label>
                        </div>
                    </div>
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