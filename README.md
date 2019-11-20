# List private S3 bucket contents and provide link for download in PHP

This small program will let you list and download the contents of
your S3 bucket without having to make the bucket public. If you have specific user
access requirements, you can integrate this into your own web application.

You can also filter the file listing to only show files that match certain criteria,
giving you many more options over giving someone an AWS read-only account for the S3
bucket itself. 

## Requirements
* AWS SDK for PHP
* AWS Key
* AWS Secret
* S3 Bucket name
* PHP Also needs
    * OpenSSL
    * cURL
    * OPCache
    * Composer (optional, but recommended)

## Installing AWS SDK for PHP
Follow the AWS documentation to get it set up: https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/getting-started_installation.html

## Configuration
Edit config.php, entering the following information
* AWS Key
* AWS Secret
* S3 Bucket name
* (optional) set the link expiration timeout

That's it! Load up index.php and you will see the files in your bucket.
