<?php include("connection.php"); ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/6234b7c045.js"></script>
    <link href="css/style.css" rel="stylesheet">
    <title> Reposteria Online Creativa</title>
</head>

<!-- Button Back to Main Page -->
<form role="form" method="post" action="./index.php">
        <input name="action" type="hidden" value="New">
        <button name="id" type="submit" class="btn btn-info mx-5 my-3">Back to Main Page</button>
    </form>

<!-- About Us information  -->
<div class="card my-2">
    <div class="card-body mx-3 my-1">
        <h2 class="card-title display-5 text-center text-info">¡Diseñamos la tarta de tus sueños!</h2>
            <p class="card-text">Somos un pequeño negocio familiar dedicado a la pastelería artesanal especializados en
                tartas personalizadas en Barcelona.
                Desde hace casi 10 años que surgió nuestra idea de plasmar los sueños de las personas en nuestras
                tartas, cupcakes y galletas a precios asequibles para todos.</p>
            <p class="card-text">Usamos los mejores ingredientes para nuestras elaboraciones y el sutil sabor
                tradicional. Honestidad y sencillez es nuestro lema y lo que nos ayuda a destacarnos en el trabajo.
                Nuestro deseo es expresar los sueños de nuestros clientes en una deliciosa tarta,
                cupcake o galleta, y nuestra meta es hacer muchos sueños realidad.</p>
            <p class="card-text"> Nuestro servicio es artesanal y personalizado. En El Pastelito realizamos con cada tarta
                una pequeña obra de arte, llena de sabor y textura. Puedes encargar la tarta personalizada y original
                que estás buscando para ese día especial y nos ocuparemos de llevarla a tu domicilio.</p>
                <a href="contact.php" class="btn btn-info">Contacto</a>
        </div>
    </div>
</div>
<!-- Including the Footer-->
<?php include("footer.php"); ?>

<!-- jQuery first, then Popper.js, then Bootstrap JS and Font Awesome -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js "
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n " crossorigin="anonymous ">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js "
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo " crossorigin="anonymous ">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js "
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6 " crossorigin="anonymous ">
</script>
<script src="https://use.fontawesome.com/6234b7c045.js"></script>