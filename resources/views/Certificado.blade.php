<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">    <style>
        body {
            background-color: #f8f9fa;
        }

        .card {
            margin-top: 50px;
            border: none;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
            border-bottom: none;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .alert {
            margin-top: 20px;
        }
    </style>
    <title>Resultado de Verificación</title>
</head>
<body>

<div class="container">
    <div class="card mx-auto" style="max-width: 500px;">
        <div class="card-header text-center">
            <h4 class="mb-0">Resultado de Verificación</h4>
        </div>
        <div class="card-body text-center">
            @if($encontrado)
                <div class="alert alert-success" role="alert">
                    ¡El certificado se encontró en la base de datos de la Universidad Autónoma Tomás Frías!
                </div>
            @else
                <div class="alert alert-danger" role="alert">
                    El certificado no existe en la base de datos de la Universidad Autónoma Tomás Frías.
                </div>
            @endif
            <a href="{{ route('VerificarCertificado') }}" class="btn btn-primary">Volver</a>
        </div>
    </div>
</div>

<!-- Scripts de Bootstrap y jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-iOqYZx3uJ+IkLZVbMLDaXpI4E0sWn0lZ/ywCFO9D6MlAAAABtPPj5o" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B"></script>

</body>
</html>
