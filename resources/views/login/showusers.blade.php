<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    @section('showusers')
        <main>
        {{$satus ?? ''}}
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>id</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Dirección</th>
                            <th>CP</th>
                            <th>Número de telefono</th>
                            <th>Actualizar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($customer as $idcustomerCode)
                            <tr>
                                <td>{{utf8_encode($idcustomerCode -> idcustomerCode)}}</td>
                                <td>{{utf8_encode($idcustomerCode -> firstname)}}</td>
                                <td>{{utf8_encode($idcustomerCode -> surname)}}</td>
                                <td>{{utf8_encode($idcustomerCode -> address)}}</td>
                                <td>{{utf8_encode($idcustomerCode -> postcode)}}</td>
                                <td>{{utf8_encode($idcustomerCode -> telephonenumber)}}</td>
                                <td><a href="{{action('Poeta@show', ['id'=>$idcustomerCode->idcustomerCode])}}"><img src="/images/refresh.jpeg" alt=""></a></td>
                                <td><a href="{{action('Poeta@destroy', ['id'=>$idcustomerCode->idcustomerCode])}}"><img src="/images/delete.jpeg" alt="" width="50px" heigth="50px"></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
        </main>
    @show
</body>
</html>