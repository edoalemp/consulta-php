<HTML>
<HEAD>
<TITLE>lectura.php</TITLE>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</HEAD>
<BODY>
    <div class="container">
        <div class="row justify-content-md-center mt-4 ">
            <div class="col-sm-6 ">
                <div class="jumbotron border border-light mt-4">
                    <h1 class="text-center">Temperatura</h1>
                    <hr class="my-4">
                    <p class="text-center display-4"><?php

                        $mysqli = new mysqli('localhost','id9571085_rjmp','1125cato', 'id9571085_p1');


                        if ($mysqli->connect_errno) {
                            printf("Conexión fallida: %s\n", $mysqli->connect_error);
                            exit();
                        }

                        $resultado = $mysqli->query("SELECT Valor FROM datos WHERE Tag='F0002'");

                        $fila = $resultado->fetch_assoc();

                        printf ("%s \n", $fila["Valor"]);

                        mysqli_close($mysqli);

                        ?><i class="fas fa-temperature-low"></i>
                    </p>
                </div>
            </div>
        </div>
    </div


</BODY>
</HTML>