# PHP and MySQL Crud

- [Tutorial](https://codeofaninja.com/2011/12/php-and-mysql-crud-tutorial.html)

## Examen 1 Evaluación

    - 2.4
        - Concatenando el símbolo con comillas simples para que no lo interprete con una variable de la siguiente manera:
        `echo "<td>".'$ '."{$price}</td>"`
    - 2.5
        - Se concatena un hash de la imagen junto con un "-" y su nombre original. En la base de datos se almacena como un varchar(256) de 256 caracteres.
        - Primero de todo se checkea que lo que se esta subiendo sea una imagen, de no ser asi se añade a al listado de errores `$file_upload_error_messages`.
        - Se combrueba que la img cumple con el array de extensiones que se permiten. `array("jpg", "jpeg", "png", "gif")`
        - Se comprueba que el archivo no exista previamente en la base de datos. De esta manera no se vuelve a subir el archivo si no que recicla el ya existente.
        - Se comprueba que el tamaño de la imagen no supere los 1024000 Bytes.
        - Se comprueba que el directorio donde se almacenarán las imagenes existe, de no ser así lo crea con permisos de escritura y lectura.
        - Por último comprueba que no haya ningún error, de ser así sube la imagen a la carpeta.
        - En la BD solo se almacena el nombre el nombre anteriormente mencionado, y en la carpeta `/upload` el archivo como tal. Para recuperarla simplemente sería añadir en el src de una img la carpeta `/upload` +  el nombre del archivo extraido de la base de datos.
    - 2.6
        - Primero se extrae en la query de `SELECT` la referencia al archivo img que vamos a modificar y se añade su representación al form, tanto para el archivo original como el nuevo campo imput para subir el nuevo archivo.
        - Se añade el campo a la query de `UPDATE` el nuevo campo a actualizar, se bindea el parametro y se realizan todas las comprobaciones del `create.php` al nuevo archivo.
        -Se comprube creando un nuevo archivo y actualizando varias veces la img que el código funciona correctamente.

[Link al repositorio](https://github.com/DanyZurita/PDO)

[Repositorio Remoto](http://dzurita.hopto.org/PDO/index.php)

- El proyecto tiene una base de datos local en MySQL con la configuración correspondiente en `/config/database.php` y el contenido de los productos en `/dev/products.sql`.