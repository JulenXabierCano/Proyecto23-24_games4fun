/**
 * Script para crear el tablero de las damas
 */

function formula(origen, destino) { return parseInt(origen) + (destino - parseInt(origen)) / 2 }

function añadir_atributos() {
    $('.ficha').attr('draggable', true);

    $('.ficha').on('dragstart', function (event) {
        origen = event.target.id.replace('f', '')
    });
}

/* Función que comprueba los movimientos */
function normasDamas(destino) {
    /**
     * Normas a cumplir:
     *  1 - Las damas deben ir hacia adelante en diagonal solo un paso
     *  2 - Si comen, deben ser dos pasos en diagonal (2.1) y la casilla de en medio debe ser del color opuesto (2.2)
     *  3 - Si es reina, puede ir hacia cualquier lado los pasos que quiera
     */
    if (
        /* Norma 1 */
        destino == parseInt(origen) + 11 ||
        destino == parseInt(origen) + 9 ||
        (
            /* Norma 2.1 */
            destino == parseInt(origen) + 22 ||
            destino == parseInt(origen) + 18
        ) &&
        $(`#${destino}`).text() == ''
    ) {
        /* Norma 2.2 */
        if ((
            $(`#f${origen}`).src() == FICHA_BLANCA &&
            $(`#f${formula(destino, origen)}`).src() == FICHA_NEGRA
        ) || (
                $(`#f${origen}`).src() == FICHA_NEGRA &&
                $(`#f${formula(destino, origen)}`).src() == FICHA_BLANCA
            )
        ) {
            if ($(`#${formula(destino, origen)}`).text()) {
                $(`#${formula(destino, origen)}`).text("")
            }
            return true
        }
    }
    return false
}

const FICHA_NEGRA = 'https://cdn-0.emojis.wiki/emoji-pics/google/black-circle-google.png'

const FICHA_BLANCA = 'https://cdn-0.emojis.wiki/emoji-pics/google/white-circle-google.png'

var origen

const table = document.createElement('table')

for (x = 1; x <= 8; x++) {
    const fila = document.createElement('tr')
    for (y = 1; y <= 8; y++) {
        const casilla = document.createElement('td')
        casilla.id = `${x}${y}`
        casilla.class = 'casilla'

        $(casilla).attr('droppable', true)

        $(casilla).on('dragover', (event) => { event.preventDefault(); });

        $(casilla).on('drop', function (event) {
            event.preventDefault();
            let casilla = event.target

            if (normasDamas(event.target.id)) {
                let ficha = document.getElementById(`f${origen}`)
                let clon = ficha.cloneNode(true)
                $(clon).attr('id', `f${event.target.id}`)
                event.target.appendChild(clon)
                $(`#${origen}`).empty()
                añadir_atributos()
            }
        });

        // Comprobar que tiene que haber ficha o no
        switch (true) {
            case (x == 2 && y % 2 != 0) || (x == 1 && y % 2 == 0):
                nFicha = new Image()
                nFicha.src = FICHA_NEGRA
                $(nFicha).attr('id', `f${x}${y}`)
                $(nFicha).attr('class', `ficha`)
                casilla.appendChild(nFicha)
                break

            case (x == 7 && y % 2 == 0) || (x == 8 && y % 2 != 0):
                nFicha = new Image()
                nFicha.src = FICHA_BLANCA
                $(nFicha).attr('id', `f${x}${y}`)
                $(nFicha).attr('class', `ficha`)
                casilla.appendChild(nFicha)
                break
        }

        fila.appendChild(casilla)
    }
    table.appendChild(fila)
}

document.body.appendChild(table)

añadir_atributos()