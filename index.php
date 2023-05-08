<?php
include './function.php';

if (isset($_GET['length'])){
    /* echo $_GET['length']; */
    $passwordLenght = $_GET['length'];
    $response = generatePassword($passwordLength);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Password Generator</title>
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <h1>Password Generator</h1>
                </div>

                <?php if (isset($response)) { ?>
                    <div class="col-7">
                        <div class="alert alert-info" role="alert">
                            <?php echo $response; ?>
                        </div>
                    </div>
                <?php } ?>

                <div class="col-7">
                    <form action="index.php" method="GET">
                        <div class="row mb-3">
                            <label for="length" class="col-sm-7 col-form-label">Lunghezza Password:</label>
                            <div class="col-sm-3">
                                <input type="number" name="length" id="length" class="form-control">
                            </div>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Invia</button>
                            <button type="reset" class="btn btn-secondary">Annulla</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>