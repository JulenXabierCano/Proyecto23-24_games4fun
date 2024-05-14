<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games4Fun | Sala</title>
    <link rel="stylesheet" href="/src/css/styles.css">
    <script src="/src/js/functions.js"></script>
    <script src="/src/js/tableroDamas.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <div id="menu">
        <h1 id="juego">Games4Fun</h1>
    </div>

    <div id='chat'>
        <h4 style='text-align:center;'>Chat:</h4>
        <div id='text'></div>
        <input type="text" name="" id="" class='texto_dos'>
        <input type="button" value="Enviar" class='boton_dos'>
    </div>

    <div id="tablero">
        <br><br>
        <button class="boton_dos" onclick="tableroDamas()">Damas</button>
        <button class="boton_dos" disabled>Tres en raya</button>
        <button class="boton_dos" disabled>Hundir la flota</button>
        <button class="boton_dos" disabled>Quien es quien</button>
    </div>

    <div id='info'></div>

    <script src='/src/js/inicio.js'></script>
</body>

</html>