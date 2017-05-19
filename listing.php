<?php

#Se agrega el archivo start que nos permite iniciar los objetos en AWS SDK
require 'app/start.php';

#Se instancia los objetos del bucket
$objects = $s3->getIterator('ListObjects', [
        'Bucket' => $config['s3']['bucket']
    ]);
//var_dump($objects);
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Listando</title>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>File</th>
                    <th>Download</th>
                </tr>
            </thead>
            <tbody>
            <!--Se ITERA sobre los objetos listados y se obtiene el nombre y la URL del objeto con disponibilidad de 1 minuto para descargar una vez solicitado esta misma -->
            <?php foreach ($objects as $object):?>
                <tr>
                    <td><?php echo $object['Key'] ?></td>
                    <td>
                        <a href="<?php echo $s3->getObjectUrl($config['s3']['bucket'], $object['Key'], '+1 minutes'); ?>" download="<?php echo $object['Key'] ?>" target="_blank">Download file</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>


