<?php
use Aws\S3\S3Client;

$client = S3Client::factory(array(
    'key'    => 'Xn7XsuseFv7DcspJ',
    'secret' => 'mLkK167b8Z5cbEm6'
));

var_dump($client);