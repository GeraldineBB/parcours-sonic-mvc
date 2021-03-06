<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $_SERVER['BASE_URI']; ?>/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= $_SERVER['BASE_URI']; ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $_SERVER['BASE_URI']; ?>/assets/css/styles.css">
    <title>Sonic Project</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-sticky navbar-airy navbar-light">
        <div class="container-fluid">
            <!-- Navbar Header  -->
            <a href="<?= $router->generate( 'main-home' ) ?>" class="navbar-brand">Sonic</a>

            <!-- Navbar Collapse -->
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a href="<?= $router->generate( 'main-home' ) ?>" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= $router->generate( 'main-creators' ) ?>" class="nav-link">Les créateurs</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= $router->generate( 'main-contact' ) ?>" class="nav-link">Nous contacter</a>
                    </li>
            </div>
        </div>
    </nav>

</body>

</html>