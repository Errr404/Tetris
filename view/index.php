<?php 
    //session_start();
    include '../controller/conect.php';
    include '../model/name.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" 
    crossorigin="anonymous">
    <title>Tetris</title>
</head>
    <style>
        body{
            background-color: #030303de;
            color: #FFFFFF;
        }

    </style>

<body>
<?php 
        if(isset($_SESSION['play'])){
            echo $_SESSION['play'];
            unset($_SESSION['play']);   
        }
    ?>
    <div class="container row mt-5">
        <h1>Olá, </h1>
        <h2>bem vindo<h2>
                <form method="POST" action="#" class="col-auto row g-3">
                    <div class="col-auto">
                        <label for="inputPassword2" class="visually-hidden">Name</label>
                        <input type="text" class="form-control"  name="nome" placeholder="Nome">
                    </div>
                    <div class="col-auto">
                        <input type="submit" name="SendPlayer" class="btn btn-primary mb-3" value="Confirmar">
                    </div>
                </form>
    </div>
</body>
</html>