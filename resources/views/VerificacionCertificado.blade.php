<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Validacion de Certificados</title>
</head>
    <body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Validacion de Certificados</h4>
                        
                        <!-- Formulario Bootstrap -->
                        <form action={{route('curso')}} method="post">
                            @csrf
                            <div class="form-group">
                                <label for="cajaTexto">Ingresa el codigo de tu certificado:</label>
                                <input type="text" class="form-control" id="cajaTexto" name="cajaTexto" placeholder="Ingresa el codigo">
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Consultar</button>
                        </form>
                        <!-- Fin del Formulario -->

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts de Bootstrap y jQuery (asegúrate de tener conexión a internet para cargar estos recursos) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    </body>
</html>
