<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/css/inicio.css')
    <title>Document</title>
</head>
<body>

<header>
    @include('header')
</header>
<main>
    <h1>Inicio</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At consequatur debitis doloribus esse fugit porro soluta? A dolore doloribus quae recusandae voluptate? Consequatur fugiat, laudantium quaerat rem saepe similique vitae.</p>
    <p></p>
    <button class="btn btn-primary btn-lg">Enviar</button>
</main>
<footer>
    @include('footer')
</footer>

</body>
</html>
