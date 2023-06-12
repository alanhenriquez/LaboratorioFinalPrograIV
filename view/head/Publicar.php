
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="/Pathtoy/asset/css/estilos2.css">
    <title>Publicar Producto</title>

</head>
<body>
    <a href="../../index.php" class="volver-button"><i class="fas fa-arrow-left"></i> Volver</a>
    
    <div id="TituloPublicacion">
        <h1>Tipo de Publicación</h1>
    </div>
    

    <form action="uploadPublish.php" method="POST" enctype="multipart/form-data">
        <select id="myComboBox" name="tipoPublicacion">
            <option disabled selected>Seleccione el tipo de publicación</option>
            <option value="opcion1">Intercambiar</option>
            <option value="opcion2">Petición</option>
            <option value="opcion3">Donar</option>
        </select>

        <div id="ImagenP">
            <h1>Imagen del juguete</h1>
            <div id="cuadroImagen">
                <input type="file" id="imagenProducto" name="imagenProducto" accept="image/*">
                <label for="imagenProducto">
                    <i class="fas fa-image"></i>
                </label>
            </div>
        </div>

        <div id="descripcionProducto">
            <h2>Agregar descripción del juguete</h2>
            <textarea id="txtDescripcion" name="descripcion" rows="6" placeholder="Ingrese una descripción"></textarea>
        </div>

        <select id="HabilidadJuguete" name="habilidad">
            <option disabled selected>Habilidad a la que pertenece el juguete</option>
            <option value="opcion1">Habilidades Motoras</option>
            <option value="opcion2">Habilidades Cognitivas</option>
            <option value="opcion3">Habilidades Linguísticas</option>
        </select>

        <div id="PublicoDes">
            <h1>Edad para el público destinatario</h1>   
            
            <div id="labelEdad">
                <h1>
                    <input type="number" id="edad" name="edad" min="0">
                </h1>
            </div>
        </div>

        <div id="gender">
            <h1>Género al que pertenece el juguete</h1>
            <select id="GenderCombox" name="genero">
                <option value="opcion1">Masculino</option>
                <option value="opcion2">Femenino</option>
            </select>
        </div>

        <button id="realizarButton" type="submit">Realizar</button>
    </form>

    <script>
        // Obtener referencia al botón
        var realizarButton = document.getElementById('realizarButton');

        // Agregar evento click al botón
        realizarButton.addEventListener('click', function() {
            // Redirigir al usuario a un sitio específico
            window.location.href = '';
        });
    </script>




</body>
</html>