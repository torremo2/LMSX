<!DOCTYPE php>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Formulario</title>
    </head>
    <body>
        <h3>Datos enviados ao servidor:</h3>
        <?php
        print "<pre>";
        print_r($_REQUEST['Fomulario1']);
        print "</pre>\n";
        ?>
    </body>
</html> 