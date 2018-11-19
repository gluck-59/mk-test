<?php
//include_once "GuzzleClient.php";

class  GdePosylkaRequest
{
    //private $apiUrl = 'http://gdeposylka.ru/api/v3/jsonrpc'; //'http://kappa.gdeposylka.ru/v2/jsonrpc';
    private $apiUrl = 'https://gdeposylka.ru/api/v4/';
    private $user_agent = 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.0.3705; .NET CLR 1.1.4322; Media Center PC 4.0)';
    protected $apiKey = '22fc09c472a627c525373311a54ffa7d20e44fb9d1f9cab00c2d413402be853e367f71b1569cb26c';
    //protected $guzzlePlugins = array();
    private $client;

    /**
     * @param string $apiKey
     * @param string $apiUrl
     * @param array $guzzlePlugins
     * @throws Exception\EmptyApiKey
     */
    public function __construct($apiKey, $apiUrl = '')
    {
       $this->apiKey = $apiKey;
        if (!empty($apiUrl)) {
            $this->apiUrl = $apiUrl;
        }

        if (empty($apiKey)) {
            throw new Exception\EmptyApiKey();
        }
        $this->apiKey = $apiKey;
        if (!empty($apiUrl)) {
            $this->apiUrl = $apiUrl;
        }
    /*
        $this->client = new GuzzleClient();
        if (count($this->guzzlePlugins) > 0) {
            foreach ($this->guzzlePlugins as $plugin) {
                if ($plugin instanceof EventSubscriberInterface) {
                    $this->client->addSubscriber($plugin);
                }
            }
        }
        */
    }

    /**
     * @param $method
     * @param array $params
     * @param int $id
     * @throws \Exception
     * @throws \Guzzle\Common\Exception\GuzzleException
     * @internal param array $data
     * @return array|bool|float|int|string
     */
    public function call($method, $params = array(), $id = 1)
    {
        $headers = array(
            'x-authorization-token: '.$this->apiKey,
            'content-type: application/json'
        );

        $request = array(
            'jsonrpc' => '2.0',
            'method' => $method,
            'params' => $params,
            'id' => $id
        );


        //print_r($request);//die;
       
            
$tracking_number = $params['tracking_number'];

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://gdeposylka.ru/api/v4/tracker/{$method}/{$tracking_number}",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_HTTPHEADER => $headers,
//  array("x-authorization-token: 22fc09c472a627c525373311a54ffa7d20e44fb9d1f9cab00c2d413402be853e367f71b1569cb26c"),
));



$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);



if ($err) {
  echo "cURL Error #:" . $err;
} else {
    


  return json_decode($response);
}



            //$result = 0;
        //return json_decode($response,true);
        return json_decode($response,true);        
    }
    
    public function getLastCheck()
    {
        return new \DateTime($this->data['last_check']);
    }
    

}



