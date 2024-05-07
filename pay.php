<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Accueil -JO Paris 2024</title>
</head>


<body>
    <header class="bg-white">
        <?php
        include_once __DIR__. '/templates/header.php';
        ?>
    </header>

    <main class="mx-auto w-75 bg-white bg-opacity-75">

            <div class="w-75 mx-auto">
                <h1>Votre panier</h1>
                <input class="btn btn-danger" type="submit" value="Payer">
            </div>
    </main>

    <footer  class='bg-white'>
        <?php include_once __DIR__."/templates/footer.php"?>
    </footer>
</body>

</html>