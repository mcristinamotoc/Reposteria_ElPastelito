<!-- Including the database connection file -->
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
    <title> Formulario Contacto</title>
</head>
<div class="holder mx-auto">
    <h1 class="text-center text-info display-5 py-4 px-5 mx-5">Formulario de Contacto</h1>
    <div class="container align-items-center ">
        <form class="mb-5 mx-5" action="contact.php" method="post">
            <div class="form-row">
                <div class="form-group col-md-9 mx-5 text-info">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Su nombre..." required>
                </div>
                <div class="form-group col-md-9 mx-5 text-info">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Su email..." required>
                </div>
                <div class="form-group col-md-9 mx-5 text-info">
                    <label for="phone">Teléfono</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Su teléfono..."
                        required>
                </div>
                <div class="form-group col-md-9 mx-5 text-info">
                    <label for="subject">Asunto</label>
                    <select id="subject" class="form-control" name="subject" required>
                        <option selected>Escoge...</option>
                        <option value="1">Tartas</option>
                        <option value="2">Galletas</option>
                        <option value="3">Cupcakes</option>
                        <option value="4">Donuts</option>
                    </select>
                </div>
                <div class="form-group col-md-9 mx-5 text-info">
                    <label for="textarea">Mensaje</label>
                    <textarea class="form-control" id="textarea" name="textarea" placeholder="Mensaje..."
                        required></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-info mx-5">Enviar</button>
        </form>
    </div>
</div>

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

</body>

</html>

</body>