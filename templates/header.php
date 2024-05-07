<?php
    require_once __DIR__ . "/../lib/session.php"; 
?>

    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3">
            <div class="col-md-3 mb-2 mb-md-0">
                <a href="index.php" class="d-inline-flex link-body-emphasis text-decoration-none">
                    <img src="assets/images/logo_jo.png" alt="Logo CheckIt" width="130">
                </a>
            </div>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="tickets.php" class="nav-link px-2 link-dark">Acheter des tickets</a></li>
            </ul>

            <div class="col-md-3 text-end">
                <?php if (isset($_SESSION['users'])) { ?>
                    <a href="logout.php" class="btn btn-danger me-2">Déconnexion</a>
                <?php } else { ?>
                    <a href="login.php" class="btn btn-info me-2">Se connecter</a>
                <?php } ?>
                <a href="register.php" class="btn btn-warning me-2">S'inscrire</a>
                
                
            </div>
        </header>
    </div>