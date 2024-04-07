<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games4Fun</title>
</head>

<body>
    <script>
        let host = (new URL(window.location.origin)).host;

        fetch(`http://${host}/hundir_flota_controller.php`)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Hubo un problema al realizar la solicitud: ' + response.status);
                }
                console.log(response.json())
            })

    </script>
</body>

</html>