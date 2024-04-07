<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games4Fun</title>
    <link rel="stylesheet" href="./src/css/menu.css">
</head>

<body>
    <script>
        let host = (new URL(window.location.origin)).host;

        function crearSala(sala, usuario) {
            if (!usuario || usuario == null) {
                err.innerHTML = 'Debe introducir un usuario'
                return null
            } else {
                err.innerHTML = ''
            }

            if (!sala || sala == null) {
                err.innerHTML = 'Debe elegir una sala'
                return null
            } else {
                err.innerHTML = ''
            }

            console.log(sala + ', ' + usuario)
            fetch(`/crearJuego?sala=${sala}&usr=${usuario}`)
                .then((response) => {
                    if(!response.ok){
                        err.innerHTML = 'Ha ocurrido un error al crear la sala'
                        return 'error'
                    }
                    return response.json()
                })
                .then((data) => {
                    console.log(data)
                })
        }
    </script>

    <h1 id='titulo'>GAMES4FUN</h1>
    <p id='subtitulo'>TU PÁGINA DE CONFIANZA PARA MATAR EL ABURRIMIENTO</p>

    <br><br>

    <p id='err'></p>

    <label id='labelUsuario' for="inputUsuario">Nombre de usuario</label>
    <br>
    <input id='inputUsuario' type="text">

    <br><br><br>

    <select name="sala" id="sala">
        <option value="">Escoja una sala</option>
        <option value="1">Hundir la flota</option>
        <option value="2">Tres en raya</option>
        <option value="3">Damas</option>
        <option value="4">¿Quien es quien?</option>
    </select>

    <br><br>

    <button class='boton' onclick='crearSala(sala.value, inputUsuario.value)'>Crear una sala</button>

    <br>

    <button class='boton'>Unirse a una sala</button>

</body>

</html>