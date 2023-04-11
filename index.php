<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
            integrity="sha384-V1jL4IFU8w6K5MC5cKNY6G5rKWJO8W+hs9jvUQQ0yGLti7Ou8IjMO3bwVHlJY0zD"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <script src="script/script.js"></script>
    <title>Portfolio Mathys Farineau</title>
</head>

<body>
<div class="wrapper">

    <!-- NavBar -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="projet.php">Mes projets</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="CV.php">Mon CV</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="container-fluid">
        <div class="row m-3" id="inside">
            <!-- Left card -->
            <div class="col-md-5">
                <div class="row">
                    <div class="col">
                        <a href="CV.php">
                            <div class="card text-center border-0 shadow-lg rounded p-4" id="Mycard">
                                <div class="card-body">
                                    <img src="public/img/moi.png" class="img-fluid" alt="Image de profil">
                                    <div class="title">
                                        <h2 class="card-title font-weight-bold text-uppercase">Mathys Farineau</h2>
                                        <h4 class="card-text">Développeur web</h4>
                                    </div>
                                    <p class="font-weight-light">Passionné de l'informatique depuis mon plus jeune âge.
                                        J'adore le design et la conception de sites web.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right card -->
            <div class="col-md-7">
                <!-- Top of the place -->
                <section class="d-flex flex-column">
                    <div class="row justify-content-around">

                        <div class="card text-center border-0 shadow-lg rounded p-2" id="topCard">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-left">
                                            <h3>19 ans</h3>
                                            <span>28/09/2003</span>
                                        </div>
                                        <div class="align-self-center">
                                            <img src="public/img/cake.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card text-center border-0 shadow-lg rounded p-2" id="topCard">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <img src="public/img/email.png">
                                        </div>
                                        <div class="media-body text-right">
                                            <h3>mathysf84pro</h3>
                                            <span>@gmail.com</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card text-center border-0 shadow-lg rounded p-2 mt-2" id="topCard">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-left">
                                            <h3>Avignon</h3>
                                            <span>Vaucluse (84)</span>
                                        </div>
                                        <div class="align-self-center">
                                            <img src="public/img/map.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="card text-center border-0 shadow-lg rounded p-2 mt-2" id="topCard">
                            <a href="https://www.instagram.com/mathys.frn" target="_blank">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="align-self-center">
                                                <img src="public/img/insta.png">
                                            </div>
                                            <div class="media-body text-right">
                                                <h3>Mathys.frn</h3>
                                                <span>Mon compte instagram</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="row justify-content-around mt-5" id="down">
                        <img src="public/img/ventoux.png" id="ventoux">
                    </div>

                </section>
            </div>
        </div>
    </div>
</div>
</body>

</html>