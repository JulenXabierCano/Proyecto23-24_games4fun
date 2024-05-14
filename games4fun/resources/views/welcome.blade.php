<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games4Fun</title>
    <link rel="stylesheet" href="/src/css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <script>
        let host = (new URL(window.location.origin)).host;

        function crearSala() {
            if (!inputUsuario.value) {
                err.innerHTML = 'Rellene el usuario, por favor'
            } else {
                err.innerHTML = '<div id="carga"></div>'
                carga.style.animation = 'carga 1s infinite'

                // Se prepara la información para pasarla a otra página
                localStorage.setItem('usr', inputUsuario.value)
                localStorage.setItem('privada', privada.checked)

                window.location = `/sala`
            }
        }

        function unirse() {
            if (!inputUsuario.value) {
                err.innerHTML = 'Rellene el usuario, por favor'
            } else {
                err.innerHTML = '<div id="carga"></div>'
                carga.style.animation = 'carga 1s infinite'

                localStorage.setItem('usr2', inputUsuario.value)
                window.location = '/unirse'
            }
        }
    </script>

    <h1 id='titulo'>GAMES4FUN</h1>
    <p id='subtitulo'>TU PÁGINA DE CONFIANZA PARA MATAR EL ABURRIMIENTO</p>

    <br><br>

    <div id='err'></div>

    <label id='labelUsuario' for="inputUsuario">Nombre de usuario</label>

    <br>

    <input id='inputUsuario' type="text" name='usr' class='texto'>

    <br><br>

    <label for="privada">Sala privada:</label>
    <input type="checkbox" name="privada" id="privada">

    <br><br>

    <button class='boton' onclick='crearSala()'>Crear sala</button>

    <br>

    <button class='boton' onclick="unirse()">Unirse a una sala</button>

</body>

</html>