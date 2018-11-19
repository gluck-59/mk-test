<?php

   // echo "123";
  //print_r("php://input");

file_put_contents('test.txt', file_get_contents('php://input'));


die;    

//header('X-Accel-Buffering: no');
ob_get_flush();

error_reporting(E_ALL);
ini_set('display_errors','On');
include(dirname(__FILE__).'/config/config.inc.php');
include(dirname(__FILE__).'/init.php'); 
include_once(PS_ADMIN_DIR.'/../classes/AdminTab.php');
$cfgFile = dirname(__FILE__). '/config/settings.inc.php';
require_once($cfgFile);


header('X-Accel-Buffering: no');
ob_get_flush();
//echo('<pre>');

$db = mysql_connect(_DB_SERVER_, _DB_USER_, _DB_PASSWD_);
if (!$db)
{
    die('No connection to database');
}
mysql_select_db(_DB_NAME_, $db);
mysql_query("SET NAMES 'utf8'");

echo '<pre>';

$track_id = $_GET['track_id'];

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://gdeposylka.ru/api/v4/tracker/russian-post/61400002218198",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "x-authorization-token: 22fc09c472a627c525373311a54ffa7d20e44fb9d1f9cab00c2d413402be853e367f71b1569cb26c"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  print_r( json_decode($response));
}