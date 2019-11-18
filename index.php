<?php

// This file contains the references to the AWS SDK as well as our configuration parameters
require 'app/start.php';

$objects = $s3->getIterator('ListObjects', [
        'Bucket' => $config['s3']['bucket']
    ]);
//    echo "<pre>";
//    foreach($objects as $o) {
//        var_dump($o);
//    }
//    echo "</pre>";
//    exit();

function formatBytes($size, $precision = 2)
{
    $base = log($size, 1024);
    $suffixes = array('', 'K', 'M', 'G', 'T');

    return round(pow(1024, $base - floor($base)), $precision) .' '. $suffixes[floor($base)];
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>File Listing</title>
        <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
        <script src="//code.jquery.com/jquery-3.4.1.min.js"
                integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
                crossorigin="anonymous"></script>
        <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <style>
            table.dataTable tbody tr.odd {
                background: #D7EAFF;
            }
        </style>
    </head>
    <body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>S3 Bucket Listing</h1>
                <h2></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table>
                    <thead>
                    <tr>
                        <th>File</th>
                        <th>Date</th>
                        <th>Size</th>
                        <th>Download</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($objects as $object):?>
                        <tr>
                            <td><?php echo $object['Key'] ?></td>
                            <td><?php echo date("m/d/Y H:i:s", strtotime($object['LastModified']) - (3600*7))?></td>
                            <td><?php echo formatBytes($object['Size'])?></td>
                            <td>
                                <a class="btn btn-primary" href="<?php echo $s3->getObjectUrl($config['s3']['bucket'], $object['Key'], $config['s3']['expiration']); ?>" download="<?php echo $object['Key'] ?>" target="_blank">Download</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
                <script>
                    $(document).ready( function () {
                        $('table').DataTable();
                    } );
                </script>
            </div>
        </div>
    </div>
    </body>
</html>


