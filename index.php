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
    <main class="container box-password p-5">
        <div>
            <h1 class="text-center text-secondary">Strong Password Generator</h1>
            <h2 class="text-center text-light">Genera una password sicura</h2>
        </div>
        <div class="rounded rounded-1 p-4 mb-3 validation-message">
            Nessun parametro valido inserito
        </div>
        <div class="rounded rounded-1 p-4 bg-white form-box d-flex">
            <div class="left">
                <label class="mb-4" for="password">Lunghezza password</label>
                <p>Consenti ripetizioni di uno o più caratteri:</p>
            </div>
            <div class="right row">
                <div class="col-5 mb-3">
                    <input type="password" class="form-control" id="password" placeholder="password" name="password">
                </div>
                <div>
                    <div>
                        <input type="radio" id="si">
                        <label for="si">Si</label>
                    </div>
                    <div>
                        <input type="radio" id="no">
                        <label for="no">No</label>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>