<?php



$resultado = '';

//print_r($_POST);

//Uso de get
if (isset($_GET['btncalcular'])) {
    $n1 = $_GET['N1'];
    $n2 = $_GET['N2'];
    $resultado = $n1 + $n2;
};

//print_r($_POST);

//Uso de POST
if (isset($_POST['btncalcular'])) {
    $n1 = $_POST['N1'];
    $n2 = $_POST['N2'];
    $resultado = $n1 + $n2;
};

//Uso de REQUEST
if (isset($_REQUEST['btncalcular'])) {
    $n1 = $_REQUEST['N1'];
    $n2 = $_REQUEST['N2'];
    $resultado = $n1 + $n2;
};
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <title>Calculadora</title>



</head>

<body>

    <div class="container">

        <form action="?" method="get">
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                </table>
                <div class="col-md-5">

                    <label for="N1" class="form-label">
                        <input type="number" name="N1" id="N1" class="form-control">
                        N1
                    </label>
                </div>
                <div class="col-md-5">
                    <label for="N2" class="form-label">
                        <input type="number" name="N2" id="N2" class="form-control">
                        N2
                    </label>
                    <div class="col-md-2">
                        <input class="btn btn-dark" name="btncalcular" type="submit" value="Calcular">
                    </div>

                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                </table>
            </div>
        </form>

        <!-- Resultado -->
        <div class="row alert alert-success">
            <?php
            echo $resultado
            ?>
        </div>
        <!-- /Resultado -->

    </div>

</body>

</html>