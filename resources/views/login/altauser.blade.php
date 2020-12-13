<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/estilo.css">
    <title>@if((isset($customer))) and ((is_object($customer)))
        //Modificacion de datos usuario
        @php
            $title1 = "Modificación";
            $firstname = $customer->firstname;
            $surname = $customer->surname;
            $address = $customer->address;
            $postcode = $customer->postcode;
            $telephonenumber = $customer->telephonenumber;
            $idcustomerCode = $customer ->idcustomerCode;
        @endphp

        @else
            @php
                $title = 'Alta de un nuevo usuario';
                $firstname = "";
                $surname = "";
                $address = "";
                $postcode = "";
                $telephonenumber = "";
            @endphp
        @endif
</title>
</head>
<body>
    @section('altauser')
        <main>
        <section class="nuevo">
                <div class="text-nuevo">
                    <h2>Check in</h2>
                </div>
            </section>

            <form class="formulario" action="{{isset($customer) ? action('Poeta@update') : action('Poeta@save')}}" method = "POST" >
                {{csrf_field()}}
                @if((isset($customer)) and (is_object($customer)))
                    <input type="hidden" name = "id" value = "{{$idcustomerCode}}">
                @endif
                <input type="text" name = "firstname" placeholder="Nombre" value = "{{$firstname}}">
                <input type="text" name = "surname" placeholder="Apellido" value = "{{$surname}}">
                <input type="text" name = "address" placeholder="Dirección" value = "{{$address}}">
                <input type="text" name = "postcode" placeholder="CP" value = "{{$postcode}}">
                <input type="text" name = "telephonenumber" placeholder="Numero de telefono" value = "{{$telephonenumber}}">
                <input type="submit" value = "Enviar">
            </form>

        </main>
    @show
</body>
</html>
