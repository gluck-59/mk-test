<?php
//echo __DIR__;
require_once 'composer/vendor/autoload.php';
require_once 'composer/vendor/gdeposylka/api-client/src/apikey.php';

echo '<pre>';
$client = new GdePosylka\Client\Client($apikey);

$trackingNumber = 'CP981969715HK'; 
//$trackingNumber = 'CJ429201804US';
//  $trackingNumber = '216089768888'; 
//  $trackingNumber = 'RC078161147CN'; // трека нет в базе
//    $trackingNumber = 'WNM013217978'; 

$title = '000-API';

/*
$couriersResponse = $client->getCouriers()->getCouriers();
echo "Список всех перевозчиков getCouriers(): \n";
foreach ($couriersResponse as $courier) {
    echo $courier->getCountryCode() . ' ' . $courier->getName() . "\n";
};


*/
$couriersResponse = $client->detectCourier($trackingNumber)->getCouriers();
echo "\nСписок перевозчиков detectCourier() для $trackingNumber:\n";
if ($couriersResponse)
{
    foreach ($couriersResponse as $courier) {
        echo $courier->getCountryCode() . ' ' . $courier->getName() . ' ' . $courier->getTrackingNumber() . ' '. $courier->getSlug(). "\n";
    };
    $courierSlug = $courier->getSlug();
}



/*
$couriersResponse = $client->getValidCouriers($trackingNumber)->getCouriers();
echo "\nСписок ВОЗМОЖНЫХ перевозчиков getValidCouriers():\n";
// list detected couriers
foreach ($couriersResponse as $courier) {
    echo $courier->getCountryCode() . ' ' . $courier->getName() . ' ' . $courier->getTrackingNumber() . ' '. $courier->getSlug(). "\n";
};



echo "\nGet trackings list getTrackingList()\n";
$trackList = $client->getTrackingList('archive');
$i = 0;
foreach ($trackList->getTrackings() as $trackInfo) {
    echo $trackInfo->getLastCheck()->format('Y-m-d H:i:s') . ' ' . $trackInfo->getTrackingNumber() . ' ' . $trackInfo->getTitle() . "\n";
    if ($trackInfo->getLastCheckpoint()) {
        $checkpoint = $trackInfo->getLastCheckpoint();
        echo $checkpoint->getCountryCode() . ' ' . $checkpoint->getLocation() . ' ' . $checkpoint->getTime()->format('r') . ' '
            . $checkpoint->getStatus() . ' ' . $checkpoint->getMessage() . "\n";
    }
$i++;
};
echo '<br><b>'.$i.'</b>';

*/

echo "\nCreate tracking for number and courier TrackingFields() + setTitle() + addTracking() + getCourierSlug():\n";
$fields = new GdePosylka\Client\TrackingFields();
$fields->setTitle($title); // Fields are optional
$track = $client->addTracking($courierSlug, $trackingNumber, $fields);
echo $track->getCourierSlug(), ' ', $track->getTrackingNumber(), "\n";


/*
echo "\nUpdate tracking info for number and courier TrackingFields() + :\n";
$fields = new GdePosylka\Client\TrackingFields();
$fields->setTitle('New title'); // Fields are optional here too
$track = $client->updateTracking($courierSlug, $trackingNumber, $fields);
echo $track->getCourierSlug(), ' ', $track->getTrackingNumber(), "\n";



echo "\nGet info by tracking number and courier getTrackingInfo():\n";
$trackInfo = $client->getTrackingInfo($courierSlug, $trackingNumber);
echo $trackInfo->getLastCheck()->format('Y-m-d H:i:s') . ' ' . $trackInfo->getTitle() . "\n";
foreach ($trackInfo->getCheckpoints() as $checkpoint) {
    echo $checkpoint->getCountryCode() . ' ' . $checkpoint->getLocation() . ' ' . $checkpoint->getTime()->format('r') . ' '
        . $checkpoint->getStatus() . ' ' . $checkpoint->getMessage() . "\n";
};


/*
echo "\nReactivate tracking for number and courier reactivateTracking():\n";
$track = $client->reactivateTracking($courierSlug, $trackingNumber);
echo $track->getCourierSlug(), ' ', $track->getTrackingNumber(), "\n";

echo "\nArchive tracking for number and courier archiveTracking():\n";
$track = $client->archiveTracking($courierSlug, $trackingNumber);
echo $track->getCourierSlug(), ' ', $track->getTrackingNumber(), "\n";
/*
echo "\nRestore tracking for number and courier restoreTracking():\n";
$track = $client->restoreTracking($courierSlug, $trackingNumber);
echo $track->getCourierSlug(), ' ', $track->getTrackingNumber(), "\n";

echo "\nDelete tracking for number and courier deleteTracking():\n";
$track = $client->deleteTracking($courierSlug, $trackingNumber);
echo $track->getCourierSlug(), ' ', $track->getTrackingNumber(), "\n";
*/