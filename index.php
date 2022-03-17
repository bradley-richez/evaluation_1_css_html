<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description"
        content="Jeun's Association vous présente les évènements de France mais aussi international" />
    <title>Accueil</title>
    <!--ICONS-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- FONTS-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />

    <!-- CSS + IMPORT BOOTSTRAP-->
    <link href="css/style.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body id="home">
    <!--NAV-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#home">Jeun's </a>
            <button class="navbar-toggler text-uppercase font-weight-bold  text-white rounded" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse text-center" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="#home">Accueil</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="#about">Présentation</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="#images">Images</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="#footer">Git</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <!--HEADER-->
    <header class="masthead text-center" id="about">
        <div class="container d-flex align-items-center flex-column">
            <h1 class="masthead-heading text-uppercase mb-0">Jeun's association</h1>
            <br> <br>
            <h3 class="lead text-center">L'association des Jeunes est une association pour les petits mais aussi pour
                les grands.
                Nous organisons des évènements locaux tout comme des festivals pour Halloween, Pâques, fête de la
                musique etc ! <br>
            </h3>
            <br> <br>
            <p class="text-center"><a href="pages/events.html" class="btn btn-secondary">Voir nos évènements</a></p>
        </div>
    </header>
    <!-- SECTION-->
    <section class="page-section bg-primary text-white " id="images">
        <div class="container">
            <h2 class="page-section-heading text-center text-uppercase text-white p-5">Images</h2>
            <div class="row">
                <div class="col-lg-4 col-md-4 ms-auto">
                    <img class="img-fluid rounded mb-5" src="images/fete.png" alt="">
                </div>
                <div class="col-lg-4 col-md-4 ms-auto">
                    <img class="img-fluid rounded mb-5" src="images/halloweenjpg.jpg" alt="" width="100%">
                </div>
                <div class="col-lg-4 col-md-4 ms-auto">
                    <img class="img-fluid rounded mb-5" src="images/tomorrowland.jpg" alt="" height="100%">
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer text-center" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Liens</h4>
                    <a class="btn btn-outline-light btn-social mx-1" href="https://github.com/bradley-richez/css-html"
                        target="_blank"><i class="fab fa-fw fab fa-github"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright &copy; Jeun's association 2022</small></div>
    </div>
</body>

</html>
