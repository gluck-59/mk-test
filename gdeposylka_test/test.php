<?
 $apiUrl = 'http://kappa.gdeposylka.ru/v2/jsonrpc';
 $user_agent = 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.0.3705; .NET CLR 1.1.4322; Media Center PC 4.0)';
 $apiKey = '22fc09c472a627c525373311a54ffa7d20e44fb9d1f9cab00c2d413402be853e367f71b1569cb26c';

$method = 'getCouriers';
$params = ' ';
$id = 1;

$headers = array(
            'X-Authorization-Token: '.$apiKey,
            'Content-Type: application/json'
        );

        $request = array(
            'jsonrpc' => '2.0',
            'method' => $method,
            'params' => $params,
            'id' => $id
        );
        $a = json_encode($request);
        //print_r($a);
        //exit;        
        
        
            $ch = curl_init($apiUrl);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); 
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
            curl_setopt($ch, CURLOPT_POST, 1);  
            //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
            //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($request));
            $return = curl_exec($ch); 
            curl_close($ch);
            print_r($return); 
?>