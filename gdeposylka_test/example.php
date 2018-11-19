<?php
//require_once __DIR__ . '/vendor/autoload.php';

include_once "GdePosylkaClient.php";

//date_default_timezone_set('UTC');
$client = new GdePosylkaClient('22fc09c472a627c525373311a54ffa7d20e44fb9d1f9cab00c2d413402be853e367f71b1569cb26c');
echo "<pre>";

  $trackingNumber = 'LK700053719HK'; 
//  $trackingNumber = 'CJ429251995US';
//  $trackingNumber = '216089768888'; 
//  $trackingNumber = 'RC078161147CN'; // трека нет в базе
//    $trackingNumber = 'WNM013217978'; 

$courierSlug = 'russian-post';
$title = '000';


$a = $client->getStatus($trackingNumber);

print_r($a);