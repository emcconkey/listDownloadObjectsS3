<?php
/**
 * Created by PhpStorm.
 * User: naguilar
 * Date: 18/05/2017
 * Time: 09:53 PM
 */

use Aws\S3\S3Client;

require 'vendor/autoload.php';

$config = require ('config.php');


//S3

$s3 = \Aws\S3\S3Client::factory([
   "key"        => $config['s3']['key'],
    "secret"    => $config['s3']['secret']
]);