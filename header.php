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
    <title> El Pastelito Barcelona. Reposteria Online Creativa y Personalizada.</title>
</head>

<body>
    <!-- Title -->
    <div class="jumbotron jumbotron-fluid text-center ">
        <div class="container mx-auto" id="title">
            <h1 class="display-3 py-4">El Pastelito</h1>
            <h4 class="display-5">Reposteria creativa, personalizada, cupcakes y galletas de diseño exclusivo</h4>
            
        </div>
    </div>

    <!-- Navigation Bar -->
    <div class="row  ml-0 mr-2 px-1">
        <div class="page-content col-8-sm col-9-md">
            <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light mb-5">
                <div class="mb-2" id="logo">
                    <a href="index.php">
                        <img src="img/logo.jpg" width="72px" height="72px" alt="logo">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item ">
                            <a class="nav-link text-info" href="index.php">Inicio <span class="sr-only">(current)</span></a>
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
                            <?php $sql = "SELECT * FROM CATEGORIAS"; 
              
			  $result = mysqli_query($mysqli, $sql);
			  while ($row_prod = mysqli_fetch_assoc($result))
			  { ?>
                <!-- This line will be executed as many times as there are categories in the database. -->
                <a href="index.php?id_cat=<?php echo $row_prod['ID_CATEGORIA']; ?>"
                    class="list-group-item"><?php echo $row_prod['NOMBRE']; ?></a>
                <?php } ?>
                            </div>
                        </li>
                </div>

                <div class="col-4-sm col-3-md d-flex flex-nowrap mt-2">
                    <!-- Search Button! -->
                    <form action="search.php" method="POST" id="searchForm">

                        <div class="form form-inline flex-nowrap ">
                            <input class="form-control" id="search" name="search" value="<?php echo isset($_POST['search']) ? $_POST['search'] : '' ?>" type="text" placeholder="Search..." aria-label="Search" aria-describedby="basic-addon2" required />
                            <button class="btn btn-info" id="searchBtn" name="submit" type="submit">Search</button>
                        </div>
                        <div id="errorSearch"></div>
                    </form>



                    <!--Modal Register Form -->
                    <div class="form mx-2">
                        <div class="text-center d-flex justify-content-xl-around">
                            <a href="" class="btn btn-info " data-toggle="modal" data-target="#modalValidationForm">Register</a>
                        </div>
                        <!--Register Modal -->
                        <div class="modal fade" id="modalValidationForm" data-backdrop="false" tabindex="-1" role="dialog" aria-labelledby="modalValidationForm" aria-hidden="true">
                            <div class="modal-dialog modal-md" role="document">
                                <div class="modal-content">
                                    <div class="modal-header text-center">
                                        <h4 class="modal-title w-75 ">Formulario de Registro</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <!--Register Form -->
                                    <form action="register.php" method="post" id="registerForm" onsubmit="return registerValidation()">
                                        <div class="modal-body mx-3">
                                            <div class="md-form mb-4">
                                                <label for="name">Nombre Completo</label>
                                                <input type="name" id="nameRegister" name="name" class="form-control validate" aria-required="true" pattern="^[a-zA-Z ]*$" required>
                                                <div class="invalid-feedback" id="errorNameRegister"></div>
                                            </div>
                                            <div class="md-form mb-4">
                                                <label for="email">Email</label>
                                                <input type="email" id="emailRegister" name="emailRegister" class="form-control validate" aria-required="true" required>
                                                <div class="invalid-feedback" id="errorEmailRegister"></div>
                                            </div>
                                            <div class="md-form mb-4">
                                                <label for="password">Contraseña</label>
                                                <input type="password" id="passwordRegister" name="passwordRegister" class="form-control validate" aria-required="true" required>
                                                <div class="invalid-feedback" id="errorPasswordRegister">
                                                </div>
                                            </div>
                                            <div class="md-form mb-4">
                                                <label for="password2">Repite Contraseña</label>
                                                <input type="password" id="password2" name="passwordRegister2" class="form-control validate" aria-required="true" required>
                                                <div class="invalid-feedback" id="errorPassword2"></div>
                                            </div>
                                            <div class="md-form mb-4">
                                                <label for="direction">Dirección</label>
                                                <input type="direction" id="direction" name="direction" class="form-control validate" aria-required="true" required>
                                                <div class="invalid-feedback" id="errorDirection"></div>
                                            </div>
                                            <div class="md-form mb-4">
                                                <label for="city">Ciudad</label>
                                                <input type="city" id="city" name="city" class="form-control validate" aria-required="true" pattern="^[a-zA-Z ]*$" required>
                                                <div class="invalid-feedback" id="errorCity"></div>
                                            </div>
                                            <div class="md-form mb-4 ">
                                                <label for="provincia">Provincia</label>
                                                <select id="provincia" name="provincia" class="form-control validate" required>
                                                    <option selected value=""></option>
                                                    <option>Barcelona</option>
                                                    <option>Girona</option>
                                                    <option>Tarragona</option>
                                                    <option>Lleida</option>
                                                </select>
                                                <div class="invalid-feedback" id="errorProvincia"></div>
                                            </div>
                                            <div class="md-form mb-4">
                                                <label for="zipCode">Codigo Postal</label>
                                                <input type="zipCode" id="zipCode" name="zipCode" class="form-control validate" aria-required="true" pattern="^\d{5}$" required>
                                                <div class="invalid-feedback" id="errorZipCode"></div>
                                            </div>
                                            <div class="md-form mb-4">
                                                <label for="phoneRegister">Teléfono de contacto </label>
                                                <input type="phoneRegister" id="phoneRegister" name="phoneRegister" class="form-control validate" aria-required="true" required>
                                                <div class="invalid-feedback" id="errorPhoneRegister"></div>
                                            </div>
                                            <div class="form-check ">
                                                <input type="checkbox" class="form-check-input" name="terms" id="terms" required>
                                                <label class="form-check-label" for="terms">He leido y
                                                    acepto la
                                                    política de privacidad y condiciones de uso.</label>
                                                <div class="invalid-feedback" id="errorTerms"></div>
                                            </div>
                                        </div>
                                        <div class="modal-footer d-flex justify-content-center ">
                                            <button class="btn btn-secondary" type="submit">Sign Up</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal LOGIN-->
                    <div class=" form ">
                        <!-- Button to Open the Modal -->
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
                            Login</button>

                        <!-- The Modal -->
                        <div class="modal fade" id="myModal" data-backdrop="false">
                            <div class="modal-dialog modal-md">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header text-center">
                                        <h4 class="modal-title w-75 "> Formulario de Login</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <form action="login.php" method="post" id="loginForm" onsubmit="return loginValidation()">
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <form method="post" action="login.php" id="loginForm" name="loginForm" onsubmit="return loginValidation()">
                                                <div class="modal-body mx-3">

                                                    <div class="md-form mb-4">
                                                        <label for="emailLogin">Email</label>
                                                        <input type="email" name="emailLogin" id="emailLogin" class="form-control validate" required>
                                                        <div class="invalid-feedback" id="errorEmail"></div>
                                                    </div>

                                                    <div class="md-form mb-4">
                                                        <label for="passwordLogin">Contraseña</label>
                                                        <input type="password" name="passwordLogin" id="passwordLogin" class="form-control validate" required>
                                                        <div class="invalid-feedback" id="errorPassword">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- Modal footer -->
                                            <div class="modal-footer d-flex justify-content-center">
                                                <button type="submit" value="submit" class="btn btn-secondary">Login</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                </ul>
            </nav>
        </div>