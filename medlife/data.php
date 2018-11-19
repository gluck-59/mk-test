<?
header('Access-Control-Allow-Origin: *');
//require 'jsonwrapper.php';
ini_set('display_errors', '1');
error_reporting( E_ALL & ~E_NOTICE);


$deviceid = '000000008cf797df';//$_GET['deviceid'];
$sensorid = $_GET['sensorid'];
if (!isset($sensorid)) logdie("invalid sensor");

function logmsg($msg)
{
    global $ip, $username, $action, $microtime;
    $file = fopen ("load_log.txt","a");

//    fputs ( $file, date("d.m.Y H:i:s").";$microtime;".$msg."\r\n");
    fputs ( $file, $msg."\r\n");
    fclose ($file);
}

function logdie($msg)
{
    global $ip, $username, $action, $microtime;
    logmsg("ERROR: $msg");
    logmsg("--------------- End log ---------------");
    die($msg);
}

//if ($deviceid!='000000008cf797df') logdie("invalid id");



  $sql = "select UNIX_TIMESTAMP(datetime)*1000 as datetime, value from sitedata where sensorid = $sensorid order by datetime asc";
//logmsg($sql);
    try {
        // Создадим подключение
    $dbh = new PDO(
//charset=windows-1251
        'mysql:host=localhost;port=3306;dbname=motokofr_alimonitor;', 
        'motokofr_ali',
        'ntsp16ox',
        array()/*array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES CP1251')*/
    );
        // Подготовим запрос
        $stmt=$dbh->prepare($sql);
        // Свяжем параметры запроса со значениями и выполним его
        $stmt->execute();
        // Если есть результат то запомним его
        $result=$stmt->fetchall(PDO::FETCH_ASSOC);
        //print_r(json_encode($result));
        // освободим ресурсы
        unset($dbh);
    } catch (Exception $e) {
        // Сюда мы попадём в случае проблем с СУБД
        // Если нужна остановка скрипта в случае проблем, то раскоментируйте строку ниже
        logdie("$e");
    };

$data = array();
foreach ($result as $k) {
 
  array_push($data,array_values($k));
}
print_r(json_encode($data,JSON_NUMERIC_CHECK)); //JSON_NUMERIC_CHECK
//print_r($data);
//logmsg("finish!");
exit;