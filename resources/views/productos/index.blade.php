<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Agregando boostrap-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <title>Vista del producto</title>
</head>
<body>


    <div class="container w-75 bg-primary mt-1 rounded shadow ">
        <div class="row align-items-stretch">
            <div class="col bg-white p-5 rounded-end">
                <a href="{{ route('productos.create') }}" class="btn btn-primary">Agregar producto</a>
                <!--Se hace referencia a la ruta de nobre productos.create-->

            </div>
        </div>
    </div>

</body>
</html>