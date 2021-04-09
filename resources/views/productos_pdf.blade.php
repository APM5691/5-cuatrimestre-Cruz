<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JOYERIA</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!--link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" /-->
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-3">Productos</h2>

        <div class="d-flex justify-content-end mb-4">
          

        <table class="table table-bordered mb-5">
            <thead>
                
                <tr class="table-danger">
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">STOCK</th>
                    <th scope="col">DESCRIPCION</th>
                    <th scope="col">PRECIO</th>
                    <th scope="col">FOTOGRAFIA</th>
                </tr>
            </thead>
            <tbody>
                 @if(isset($prueba))
                @foreach($prueba as $data)
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->nombre_producto }}</td>
                    <td>{{ $data->numero_existencias }}</td>
                    <td>{{ $data->descripcion }}</td>
                    <td>{{ $data->precio_oferta }}</td>
                    <td><img src="{{ asset('img/'.$data->fotografia) }} " alt="Imagen" width="100" height="100"></td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>

    </div>

    <!--script src="{{ asset('js/app.js') }}" type="text/js"></script-->
</body>

</html>