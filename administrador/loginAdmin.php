<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="librerias/css/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    <title>Los Ajolotitos</title>
    </head>
    <body>
<div class="container">
<div class="jumbotron">
<section class="vh-100">
<div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
    <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="./img/Ajolotitos .png"
        class="img-fluid" alt="Phone image">
    </div>
    <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form action="./procesos/logear.php" method="post">
        <div class="d-flex align-items-center mb-3 pb-1">
            <span class="h1 fw-bold mb-0">Login de Usuario</span>
        </div>
        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Iniciar sesión en su cuenta</h5>
        <!-- Email input -->
        <div class="form-outline mb-4">
            <input type="text" id="Usuario" class="form-control form-control-lg" name="usuario" placeholder="Usuario"/>
            <label class="form-label" for="Usuario">Usuario</label>
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
            <input type="password" id="Password" class="form-control form-control-lg" name="password" placeholder="Password"/>
            <label class="form-label" for="Password">Password</label>
        </div>
        <div class="d-flex justify-content-around align-items-center mb-4">
            <a href="./registro.php">Crear Cuenta</a>
        </div>
    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-lg btn-block">Iniciar sesión</button>
    </form>	
</div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    

    </body>
</html>