<?php
/**
 * Created by PhpStorm.
 * User: naguilar
 * Date: 18/05/2017
 * Time: 09:53 PM
 */

return [
    "s3" => [
        "key" => "<aws_access_key_id>",
        "secret" => "<aws_secret_access_key>",
        "bucket" => "<bucket_name>",
        "expiration" => "+10 minutes" // See https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/s3-presigned-url.html
    ]
];


