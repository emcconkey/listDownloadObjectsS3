# listDownloadObjectsS3
Listar archivos de bucket s3 Aws y crear link de descarga


19/05/2017

	
	
	
	
	
Descarga archivos de Bucket S3 con PHP
AWS SDK for PHP 

				
		
		
		
		
		

		Nestor Ismael Aguilar Estrada

 
Descarga archivos de Bucket S3 con PHP
AWS SDK for PHP 
A continuación de describe el proceso para descarga de archivos alojados en un bocket S3 AWS con la SDK de AWS y PHP. 
 
Arquitectura general
Requisitos para poder hacer uso del Bucket:
a)	Tener los accesos a la api:	
a.	Key
b.	Secret Key
c.	Nombre Bucket
b)	Requisitos de SDK AWS PHP
a.	Tener habilitadas las extenciones:
i.	OpenSSL PHP
ii.	cURL
iii.	OPCache
iv.	Composer (opcional, pero muy recomendado)

Instalación de AWS SDK for PHP:

La instalación de la SDK es posible realizarla por:
a)	Composer
b)	Phar
c)	Zip

a)	Composer
El uso de Composer es la forma recomendada de instalar AWS SDK para PHP. Composer es una herramienta de administración de dependencias para PHP que le permite declarar las dependencias que necesita su proyecto e instalarlas en su proyecto.
1.	Crear archivo composer.json en raíz de proyecto
2.	Colocar en “require”:
{
  "require": {
    "aws/aws-sdk-php": "2.7.*"
  }
}








3.	En la línea de comandos ejecutar:
 
b)	Phar
1.	Puede descargar el paquete phar y simplemente incluirlo en sus scripts para empezar: Link http://docs.aws.amazon.com/aws-sdk-php/v3/download/aws.phar
<?php
require 'path/to/aws.phar';

c)	Vía Zip

1.	Descargar el archivo zip, descomprimirlo en su proyecto a una ubicación de su elección e incluir el cargador automático:
http://docs.aws.amazon.com/aws-sdk-php/v3/download/aws.zip

2.	Incluirlo en el proyecto:
<?php
require '/path/to/aws-autoloader.php';

Configuración y puesta en marcha AWS SDK for PHP:

Una vez descargado el SDK se procede a crear los archivos de configuración para facilitar la utilización del mismo. En este ejemplo se descargó el SDK mediante composer:

1.	Creamos una carpeta app (o donde guste)
2.	Se crean los archivos:
a.	config.php
b.	start.php
3.	Dentro del config.php:
a.	<?php

return [
    "s3" => [
        "key" => "<Access Key AWS>",
        "secret" => "<Secret Key>",
        "bucket" => "<Name Bucket>"
    ]
];
4.	Dentro de start.php
a.	<?php

use Aws\S3\S3Client;

require 'vendor/autoload.php';

$config = require ('config.php');


//S3

$s3 = \Aws\S3\S3Client::factory([
   "key"        => $config['s3']['key'],
    "secret"    => $config['s3']['secret']
]);
5.	Listado y creación de links a archivos en Bucket:
a.	<?php

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

Si se desea descargar este código se tiene disponible en:  https://github.com/nesag/listDownloadObjectsS3


