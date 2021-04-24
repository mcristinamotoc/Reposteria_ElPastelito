<!-- Including the database connection file -->
<?php include("connection.php"); ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="El Pastelito Barcelona. Reposteria Online Creativa y Personalizada.">
    <meta name="author" content="@El Pastelito">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/6234b7c045.js"></script>
    <link href="css/style.css" rel="stylesheet">
    <title> El Pastelito Barcelona. Reposteria Online Creativa y Personalizada</title>
</head>

<body>
    <!-- Title -->
    <div class="jumbotron jumbotron-fluid text-center ">
        <div class="container mx-auto" id="title">
            <h1 class="display-3 py-4">El Pastelito</h1>
            <h4 class="display-5">Reposteria creativa, personalizada, cupcakes y galletas de diseño exclusivo</p>
        </div>
    </div>
    <!-- Navigation Bar -->
    <div class="row d-flex flex-column ml-0 mr-2 mb-0 px-1">
        <div class="page-content col-8-sm col-9-md">
            <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light mb-5">
            <div class="text-primary">Enhorabuena, ya has iniciado la sesión!</div>
                <div class="mb-2" id="logo">
                    <a href="user_session.php">
                        <img src="img/logo.jpg" width="70px" height="70px" alt="logo">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item ">
                            <a class="nav-link text-info" href="user_session.php">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-info" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sobre Nosotros</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item text-info" href="about.php">¿Quienes somos?</a>
                                <a class="dropdown-item text-info" href="contact.php">Contacto</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-info" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categoria
                                Productos</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item text-info" href="user_session.php?id_cat=1">Tartas
                                    Personalizadas</a>
                                <a class="dropdown-item text-info" href="user_session.php?id_cat=2">Galletas</a>
                                <a class="dropdown-item text-info" href="user_session.php?id_cat=3">Cupcakes</a>
                                <a class="dropdown-item text-info" href="user_session.php?id_cat=4">Donuts</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-4-sm col-3-md d-flex flex-nowrap">
                    <!-- Search Button! -->
                    <form action="search_user.php" method="POST" id="searchForm">
                        <div class="form form-inline flex-nowrap ">
                            <input class="form-control" id="search" name="search" value="<?php echo isset($_POST['search']) ? $_POST['search'] : '' ?>" type="text" placeholder="Search..." aria-label="Search" aria-describedby="basic-addon2" required />
                            <button class="btn btn-info" id="searchBtn" name="submit" type="submit">Search</button>
                        </div>
                        <div id="errorSearch"></div>
                    </form>
                    <div>
                    <a class="btn btn-info" href="index.php">Logout</a>
                </div>
                </div>
            </nav>
        </div>
    </div>