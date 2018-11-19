<?
//require 'jsonwrapper.php';
ini_set('display_errors', '1');
error_reporting( E_ALL & ~E_NOTICE);

$postdata = file_get_contents("php://input");

$deviceid = $_GET['deviceid'];


//logmsg($deviceid);

function logmsg($msg)
{
/*    global $ip, $username, $action, $microtime;
    $file = fopen ("load_log.txt","a");

    fputs ( $file, $msg."\r\n");
    fclose ($file);
*/
}

function logdie($msg)
{
    global $ip, $username, $action, $microtime;
    logmsg("ERROR: $msg");
    logmsg("--------------- End log ---------------");
    die($msg);
}

if ($deviceid!='000000008cf797df') logdie("invalid id");

// Получим адрес из GET-параметра, если адрес не был задан, то определим его.
//$ip         = getval($_GET, 'ip', getRealIpAddr());
//$comp       = trim(strtolower(getval($_GET, 'comp')));
//$username   = getval($_GET, 'username');
//$action     = getval($_GET, 'action'); // 1 - reg, 0 - unreg
//logmsg($postdata);

$data = json_decode($postdata);
//exit;

    $dbh = new PDO(
//charset=windows-1251
        'mysql:host=localhost;port=3306;dbname=motokofr_alimonitor;', 
        'motokofr_ali',
        'ntsp16ox',
        array()/*array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES CP1251')*/
    );

$ids = Array();

try {
$dbh->beginTransaction();
foreach ( $data as $item )
{
//	logmsg('-----');
//  foreach ( $item as $k => $v )
//  {
//	logmsg($k . ': ' . $v . '; ');
/*   logmsg($item->rowid);
   logmsg($item->sensorid);
   logmsg($item->datetime);
   logmsg($item->value);*/



    $sql = "INSERT INTO sitedata (siteid, deviceid, sensorid, datetime, value) VALUES ('test','$deviceid',$item->sensorid,FROM_UNIXTIME($item->datetime),$item->value);";

    // Выполним запрос
    //logmsg($sql);
    $stmt=$dbh->exec($sql);
    array_push($ids,$item->rowid);

     // освободим ресурсы

}

} catch (Exception $e) {
    // Сюда мы попадём в случае проблем с СУБД
    // Если нужна остановка скрипта в случае проблем, то раскоментируйте строку ниже
     logdie("Error $e");
     $dbh->rollBack();
};
  
 // }

$dbh->commit();
//logmsg(print_r($ids,true));

echo json_encode($ids);

unset($stmt);

//logmsg(print_r($data,true));
//print_r();
unset($dbh);

//echo "OK";
