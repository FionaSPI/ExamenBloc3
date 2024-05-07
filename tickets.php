<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Billetterie -JO Paris 2024</title>
</head>


<body>
    <header class="bg-white">
        <?php
        include_once __DIR__. '/templates/header.php';
        ?>
    </header>

    <main class="mx-auto w-75 bg-white bg-opacity-75 p-5">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card">
                    <img src="assets/images/offre1pers.png" class="card-img-top p-5 w-75 mx-auto" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Solo</h5>
                        <p class="card-text">L'offre solo contient un seul ticket.</p>
                        <a href="register.php" class="btn btn-success">Acheter</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="assets/images/offre2pers.png" class="card-img-top p-5 w-75 mx-auto" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Duo</h5>
                        <p class="card-text">L'offre Duo comporte un lot de 2 tickets.</p>
                        <a href="register.php" class="btn btn-success">Acheter</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="assets/images/offre4pers.png" class="card-img-top p-5" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Familiale</h5>
                        <p class="card-text">L'offre familiale contient un lot de 4 tickets.</p>
                        <a href="register.php" class="btn btn-success">Acheter</a>
                    </div>
                </div>
            </div>
        </div>




    </main>


    <footer class='bg-white'>
        <?php include_once __DIR__."/templates/footer.php"?>
    </footer>

</body>

</html>