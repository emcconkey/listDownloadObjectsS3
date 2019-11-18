<?php

// This file contains the references to the AWS SDK as well as our configuration parameters
require 'app/start.php';

$objects = $s3->getIterator('ListObjects', [
        'Bucket' => $config['s3']['bucket']
    ]);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>File Listing</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
            <?php foreach ($objects as $object):?>
                <tr>
                    <td><?php echo $object['Key'] ?></td>
                    <td>
                        <a href="<?php echo $s3->getObjectUrl($config['s3']['bucket'], $object['Key'], $config['s3']['expiration']); ?>" download="<?php echo $object['Key'] ?>" target="_blank">Download file</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>


