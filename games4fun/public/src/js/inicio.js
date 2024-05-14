if (!localStorage.getItem('usr') && !localStorage.getItem('usr2'))
    window.location = '/'
else if (localStorage.getItem('usr')) {
    fetch(`/crearSala?usr=${localStorage.getItem('usr')}&privada=${localStorage.getItem('privada')}`)
        .then((response) => {
            if (!response.ok) {
                return 'Error en la consulta'
            }
            return response.json()
        })
        .then((data) => {
            localStorage.removeItem('usr')
            localStorage.removeItem('privada')

            localStorage.setItem('id_sala', data.id)

            mostrarDatos(data)

            var intervaloDatos = setInterval(() => {
                cojerDatos()
            }, 5000);
        })
} else if (localStorage.getItem('usr2')) {
    fetch(`/entrar?id=${localStorage.getItem('id_sala')}&usr2=${localStorage.getItem('usr2')}`)
        .then((response) => {
            if (!response.ok)
                return "Error al ejecutar la consulta"
            return response.json()
        })
        .then((datos)=>{
            mostrarDatos(datos)
        })
    var intervaloDatos = setInterval(() => {
        cojerDatos()
    }, 5000);
}