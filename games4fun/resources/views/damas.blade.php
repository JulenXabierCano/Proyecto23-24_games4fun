<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games4Fun | Sala</title>
    <link rel="stylesheet" href="/src/css/styles.css">
</head>
<body>

    <script>
        // Definicion de funciones

        /**
         * Funcion para generar el tablero de las damas
         */

        function generarTablero() {

        }

        /**
         * Funcion que evita que el jugador 2 se muestre como 
         * undefined
         */
        function compj2(j2){
            if (j2) 
                return j2
            else
                return 'No ha entrado'
        }

        /**
         * Funcion que se utiliza para mostrar los datos de
         * la sala
         */
        function mostrarDatos(datos) {
            info.innerHTML = `
                <p><b>Información de la sala:</b></p>\
                <hr>
                <p><b>ID de la sala:</b> ${datos.id_sala}</p>
                <hr>
                <p><b>Jugador 1:</b> ${datos.jugador_1}</p>
                <hr>
                <p><b>Jugador 2:</b> ${compj2(datos.jugador_2)}</p>
            `
        }

        /**
         * Funcion que se pone en un intervalo para recuperar
         * la información de la sala cada segundo
         */
        function cojerDatos() {
            fetch(`/datosSala?sala=${localStorage.getItem('sala')}&idSala=${localStorage.getItem('id_sala')}`)
                .then((response) => {
                    if (!response.ok)
                        return 'Error en la consulta'
                    
                    return response.json()
                })
                .then((datos) => {
                    mostrarDatos(datos[0])
                })
        }
    </script>

    <div id="menu">
        <h1 id="juego">Games4Fun | Damas</h1>
        <button class='boton' id='cerrarSala' onclick=''>Cerrar sala</button>
    </div>

    <div id='chat'>
        <h4 style='text-align:center;'>Chat:</h4>
        <div id='text'></div>
        <input type="text" name="" id="" class='texto_dos'>
        <input type="button" value="Enviar" class='boton_dos'>
    </div>

    <div id="tablero">
        <h4>El tablero se generará cuando entre el Jugador 2</h2>
    </div>

    <div id='info'></div>

    <script>
        /**
         * Fetch que se ejecuta al iniciar la página
         * para que inicie la sala y esté disponible para la partida
         */
        fetch(`/sala?sala=${localStorage.getItem('sala')}&usr=${localStorage.getItem('usr')}`)
            .then((response)=>{
                if (!response.ok) {
                    return 'Error en la consulta'
                }
                return response.json()
            })
            .then((data)=>{
                mostrarDatos(data)

                var intervaloDatos = setInterval(() => {
                    cojerDatos()
                }, 5000);

                localStorage.removeItem('usr')

                localStorage.setItem('id_sala', data.id_sala)
            })
    </script>

</body>
</html>