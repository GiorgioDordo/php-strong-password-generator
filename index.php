<?php
function getStrongRandomPassword($length, $symbols, $characters, $numbers)
{
    $characters = "";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <main class="container box-password mt-5 p-5">
        <div>
            <h1 class="text-center text-secondary">Strong Password Generator</h1>
            <h2 class="text-center text-light">Genera una password sicura</h2>
        </div>
        <div class="rounded rounded-1 p-4 mb-3 validation-message">
            Nessun parametro valido inserito
        </div>

        <form action="index.php" method="GET">
            <div class="rounded rounded-1 p-4 bg-white form-box">
                <div class="d-flex">
                    <div class="left">
                        <label class="mb-4" for="length">Lunghezza password</label>
                        <p>Consenti ripetizioni di uno o più caratteri:</p>
                    </div>

                    <div class="right row">
                        <div class="col-5 mb-3">
                            <input type="number" class="form-control" id="length" placeholder="6" name="length_password"
                                min="6" max="15">
                        </div>
                        <div class="mb-3">
                            <div>
                                <input type="radio" name="repetition" id="si" value="si">
                                <label for="si">Si</label>
                            </div>
                            <div>
                                <input type="radio" id="no" name="repetition" value="no">
                                <label for="no">No</label>
                            </div>
                        </div>
                        <div>
                            <div>
                                <input type="checkbox" name="lettere" id="lettere" value="lettere">
                                <label for="lettere">Lettere</label>
                            </div>
                            <div>
                                <input type="checkbox" name="numeri" id="numeri" value="numeri">
                                <label for="numeri">Numeri</label>
                            </div>
                            <div>
                                <input type="checkbox" name="simbboli" id="simbboli" value="simbboli">
                                <label for="simbboli">Simboli</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Invia</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
            </div>
        </form>
    </main>
</body>

</html>