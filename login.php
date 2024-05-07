<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Inscription -JO Paris 2024</title>
</head>


<body>
    <header class="bg-white">
        <?php
        include_once __DIR__. '/templates/header.php';
        require_once __DIR__ . "/templates/header.php"; 
        require_once __DIR__ . "/lib/user.php";

        $errors = [];

        if (isset($_POST['loginUser'])) {
            $user = verifyUserLoginPassword($pdo, $_POST['email'], $_POST['password']);

            if ($user) {
                // on va le connecter => session
                $_SESSION['users'] = $user;
                header('location: index.php');
            } else {
                   // afficher une erreur
                $errors[] = "Email ou mot de passe incorrect";
            }
            

        }
        ?>
    </header>
    <main class="h-75 shadow w-75 mx-auto bg-light bg-opacity-50">
        <h1 class="pt-5 d-flex justify-content-center">Connexion</h1>
        <form action="loginPost.php" method="POST" class="w-50 mx-auto py-5">

            <div class="mb-3">
                <label for="email" class="form-label">Adresse email :</label>
                <input type="email" name="email" class="form-control" rows="3" required> <br>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe :</label>
                <input type="password" name="password" class="form-control" rows="3" required> <br>
            </div>
            <input class="btn btn-success" type="submit" value="Se connecter">

        </form>

    </main>
    <footer class='bg-white'>
        <?php include_once __DIR__."/templates/footer.php"?>
    </footer>

</body>

</html>