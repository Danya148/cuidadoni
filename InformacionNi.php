<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 


    <title>Informacion</title>
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post" action="InfoNiBD.php">
                    <fieldset>
                        <br>
                        <center><h1><p class="text-info">Informacion del Niño</p></h1></center>
                        <br>

                        
                        <div class="form-group">
                            <center><div class="col-md-4">
                                <input id="NombreNi" name="NombreNi" type="text" placeholder="Nombre del niñ@" class="form-control">
                            </div></center>
                        </div>

                        <div class="form-group">
                            <center><div class="col-md-4">
                                <input id="EdadNi" name="EdadNi" type="text" placeholder="Edad del niñ@" class="form-control">
                            </div></center>
                        </div>

                        <div class="form-group">
                            <center><div class="col-md-4">
                                <input id="Enfermedades" name="Enfermedades" type="text" placeholder="Alergias/Enfermedades del niñ@" class="form-control">
                            </div></center>
                        </div>
                        <br>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">ENVIAR</button>
                                
                                <a href="Pago.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Siguiente</a>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

</body>
</html>