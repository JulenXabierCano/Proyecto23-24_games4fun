<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partidas Disponibles</title>
    <link rel="stylesheet" href="/src/css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="/src/js/functions.js"></script>
    <style>
        table,
        tr,
        td {
            border-collapse: collapse;
            border: 1px solid;
            text-align: center;
            padding: 5px;
        }
    </style>
</head>

<body>
    <script>
        function unirse(idSala) {
            localStorage.setItem('id_sala', idSala)
            window.location = '/sala'
        }
    </script>

    <h1 id='titulo'>GAMES4FUN</h1>

    <br><br>

    <table id="tablaPartidas">
        <tr>
            <td colspan="3">
                <h3>Partidas existentes:</h3>
            </td>
        </tr>
        <tr>
            <td><b>Id de la sala:</b></td>
            <td><b>Jugador 1:</b></td>
        </tr>
        <tr id="partidas">
            <td colspan="3">
                Cargando partidas...
            </td>
        </tr>
    </table>
    
    <br><br>
    
    <input type="text" placeholder="Id de la sala" id='texto' class="texto">
    <br>
    <button class="boton" onclick="unirse(texto.value)">Unirse</button>

    <script>
        fetch(`/salasPublicas`)
            .then((response) => {
                if (!response.ok)
                    return null

                return response.json()
            })
            .then((datos) => {
                let filas = ''
                if (!datos[0]) {
                    filas += "<td colspan='2'>No se han encontrado salas</td>"
                }
                datos.forEach(sala => {
                    if (sala) {
                        filas += `
                            <tr>
                                <td>${sala.id}</td>
                                <td>${sala.jugador_1}</td>
                                <td><button class='boton' onclick="unirse('${sala.id}')">Unirse</button></td>
                            </tr>
                        `
                    }

                });

                partidas.remove()
                tablaPartidas.innerHTML += filas
            })
    </script>

    <br><br>

    <button class="boton" onclick="volver()">Volver</button>
</body>

</html>