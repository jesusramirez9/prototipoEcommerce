<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resumen pedido</title>
</head>
<style>
    .verdls{
        color: #9C303D;
    }
    .tamnios{
        width: 6rem;
        height: 6rem;
    }
    .grr{
        margin-top: 2rem;
    }
</style>
<body>
    <h1>Gracias por realizar una reserva</h1>
    <p class="uppercase">Bienvenido a Coqueteos & Antojitos</p>
    <p>¡Este es un mensaje de confirmacion!</p>

    <p>Hola {{ auth()->user()->name}} </p>
    <p></p>
    <p>Porfavor Ingresa desde tu perfil a mis pedidos para hacer un seguimiento de tu reserva.</p>

    <div class="mt-4 text-white font-bold text-center">
        <small class="text-green-900 verdls"  >© {{ date('Y') }} Coqueteos & Antojitos. Todos los derechos reservados.</small>
    </div>
    <div class="grr">
        <img src="{{ asset('img/logo.png') }}" class="tamnios" alt="">
    </div>
</body>
</html>