<?php
//namespace GdePosylka\Client;
include_once "GdePosylkaRequest.php";
echo '<pre>';

class GdePosylkaClient
{
    protected $request;

    /**
     * @param string $apiKey
     * @param string $apiUrl
     * @param array $guzzlePlugins
     */
    public function __construct($apiKey, $apiUrl = '')
    {
        $this->request = new GdePosylkaRequest($apiKey, $apiUrl);
    }

    /**
     * @return Request
     */
    protected function getRequest()
    {
        return $this->request;
    }

    /**
     * @return Response\CourierListResponse
     */
    public function getCouriers()
    {
        return $this->getRequest()->call('getCouriers');
    }

    /**
     * @param $trackingNumber
     * @return Response\CourierDetectResponse
     * @throws Exception\EmptyTrackingNumber
     */
    public function detectCourier($trackingNumber)
    {
     /*
        if (empty($trackingNumber)) {
            throw new Exception\EmptyTrackingNumber();
        }
    */
        return $this->getRequest()->call('detect', array('tracking_number' => $trackingNumber));
    }

    /**
     * @param $trackingNumber
     * @return Response\CourierDetectResponse
     * @throws Exception\EmptyTrackingNumber
     */
    public function getValidCouriers($trackingNumber)
    {
//        if (empty($trackingNumber)) {
//            throw new Exception\EmptyTrackingNumber();
//        }
        return $this->getRequest()->call('getValidCouriers', array('tracking_number' => $trackingNumber));
    }

    /**
     * @param $courierSlug
     * @param $trackingNumber
     * @param TrackingFields $fields
     * @throws Exception\EmptyCourierSlug
     * @throws Exception\EmptyTrackingNumber
     * @return Response\TrackingResponse
     */
    public function addTracking($courierSlug, $trackingNumber, TrackingFields $fields = null)
    {
        /*if (empty($courierSlug)) {
            throw new Exception\EmptyCourierSlug;
        }
        if (empty($trackingNumber)) {
            throw new Exception\EmptyTrackingNumber;
        } */
        $tracking = array('tracking_number' => $trackingNumber, 'courier_slug' => $courierSlug);
        if (!empty($fields)) {
            $tracking = array_merge($tracking, $fields->toArray());
        }
        return new TrackingResponse($this->getRequest()->call('addTracking', array('tracking' => $tracking)));
    }

    /**
     * @param string $page
     * @return Response\TrackingListResponse
     * @throws \Exception
     * @throws \Guzzle\Common\Exception\GuzzleException
     */
    public function getTrackingList($page = 'default')
    {
        $tracking = array('page' => $page);
        return $this->getRequest()->call('getTrackingList', $tracking);
    }
    
    public function getTravelTime($trackInfo)
    {
     $datestart = date_create($trackInfo['result']['checkpoints'][0]['time']);
     if ($trackInfo['result']['is_delivered']==1)
        {
            $dateend = date_create($trackInfo['result']['checkpoints'][count($trackInfo['result']['checkpoints'])-1]['time']);
            $interval = date_diff($datestart, $dateend);
            return $interval->format('%d');
        }
    }


    /*
    // возвращает последний статус трека
    // используется в админке
    */    
    public function getStatus($track, $last = 0)
    {
        $courier = $this->detectCourier($track);
        
        // если посылка СПСР, установим spsr
        if (stripos($track, 'WNM') === 0)
        {
            $courier->data[0]->courier->slug = 'spsr';
        }
        
        // если трек 22-значный, установим usps
        elseif (preg_match('/^\d{22}$/', trim($track)))
        {
            $courier->data[0]->courier->slug = 'usps';
        }        
        
        // если посылка из Германии DNL, установим deutsche-post
        elseif (preg_match('/^\d{12}$/', trim($track)))
        {
            $courier->data[0]->courier->slug = 'deutsche-post';
        }
        
        // если посылка ХЗ чья, установим russian-post
        else
        {
            if ($courier->length == 0)
            $courier->data[0]->courier->slug = 'russian-post';
        }



        
        $statuses = $this->getTrackingInfo($courier->data[0]->courier->slug, array('tracking_number' => $track));
        

//print_r($statuses); die;

        

        if (isset($statuses['error']))
        {
           return $statuses['error']['message'];
        }
        
/*
        if (!isset($statuses))
        {
            $push = new Push('self');
            $push->title = 'Гдепосылка-Кабинет ошибка:';
            $push->message = $track.' Сработало условие !isset($statuses) в gdeposylka_test/GdePosylkaClient.php';
            $push->url = 'http://pushall.ru/';
            $push->send();
            return false;
        }
*/

        if ($last != 1 && $statuses)
        {
            $all_status = array();
            foreach ($statuses['result']['checkpoints'] as $status)
            {
                $status['track'] = $track;
                $all_status[] = array_merge($status, $status);
            }
//            $all_status['track'] = $track;
            return $all_status;
        }
        
        if ($last == 1 && $statuses)
        {
            foreach ($statuses['result']['checkpoints'] as $last_status)
            {
                $last_status['track'] = $track;
                return $last_status;
            }
        }
    }
    
    
  
        /**
     * @param $courierSlug
     * @param $trackingNumber
     * @throws Exception\EmptyCourierSlug
     * @throws Exception\EmptyTrackingNumber
     * @return Response\TrackingInfoResponse
     */
     
    // не использовать?
    public function getTrackingInfo($courierSlug, $trackingNumber)
    {
        /*
        if (empty($courierSlug)) {
            throw new Exception\EmptyCourierSlug;
        }
        if (empty($trackingNumber)) {
            throw new Exception\EmptyTrackingNumber;
        }
        */
        $tracking = array('tracking_number' => $trackingNumber, 'courier_slug' => $courierSlug);
        return $this->getRequest()->call('getTrackingInfo', array('tracking' => $tracking));
    }

    /**
     * @param $courierSlug
     * @param $trackingNumber
     * @param TrackingFields $fields
     * @return Response\TrackingResponse
     * @throws Exception\EmptyCourierSlug
     * @throws Exception\EmptyTrackingNumber
     * @throws \Exception
     * @throws \Guzzle\Common\Exception\GuzzleException
     */
    public function updateTracking($courierSlug, $trackingNumber, TrackingFields $fields = null)
    {
     /*
        if (empty($courierSlug)) {
            throw new Exception\EmptyCourierSlug;
        }
        if (empty($trackingNumber)) {
            throw new Exception\EmptyTrackingNumber;
        }
        */
        $tracking = array('tracking_number' => $trackingNumber, 'courier_slug' => $courierSlug);
        if (!empty($fields)) {
            $tracking = array_merge($tracking, $fields->toArray());
        }
        return $this->getRequest()->call('updateTracking', array('tracking' => $tracking));
    }

    /**
     * @param $courierSlug
     * @param $trackingNumber
     * @return Response\TrackingResponse
     * @throws Exception\EmptyCourierSlug
     * @throws Exception\EmptyTrackingNumber
     */
    public function archiveTracking($courierSlug, $trackingNumber)
    {
      /* 
        if (empty($courierSlug)) {
            throw new Exception\EmptyCourierSlug;
        }
        if (empty($trackingNumber)) {
            throw new Exception\EmptyTrackingNumber;
        }
        */
        $tracking = array('tracking_number' => $trackingNumber, 'courier_slug' => $courierSlug);
        return $this->getRequest()->call('archiveTracking', $tracking);
    }

    /**
     * @param $courierSlug
     * @param $trackingNumber
     * @return Response\TrackingResponse
     * @throws Exception\EmptyCourierSlug
     * @throws Exception\EmptyTrackingNumber
     */
    public function restoreTracking($courierSlug, $trackingNumber)
    {
       /*
        if (empty($courierSlug)) {
            throw new Exception\EmptyCourierSlug;
        }
        if (empty($trackingNumber)) {
            throw new Exception\EmptyTrackingNumber;
        }
        */
        $tracking = array('tracking_number' => $trackingNumber, 'courier_slug' => $courierSlug);
        return $this->getRequest()->call('restoreTracking', $tracking);
    }

    /**
     * @param $courierSlug
     * @param $trackingNumber
     * @return Response\TrackingResponse
     * @throws Exception\EmptyCourierSlug
     * @throws Exception\EmptyTrackingNumber
     */
    public function deleteTracking($courierSlug, $trackingNumber)
    {
      /* 
        if (empty($courierSlug)) {
            throw new Exception\EmptyCourierSlug;
        }
        if (empty($trackingNumber)) {
            throw new Exception\EmptyTrackingNumber;
        }
        */
        $tracking = array('tracking_number' => $trackingNumber, 'courier_slug' => $courierSlug);
        return $this->getRequest()->call('deleteTracking', $tracking);
    }

    /**
     * @param $courierSlug
     * @param $trackingNumber
     * @return Response\TrackingResponse
     * @throws Exception\EmptyCourierSlug
     * @throws Exception\EmptyTrackingNumber
     */
    public function reactivateTracking($courierSlug, $trackingNumber)
    {
       /*
        if (empty($courierSlug)) {
            throw new Exception\EmptyCourierSlug;
        }
        if (empty($trackingNumber)) {
            throw new Exception\EmptyTrackingNumber;
        }
        */
        $tracking = array('tracking_number' => $trackingNumber, 'courier_slug' => $courierSlug);
        return $this->getRequest()->call('reactivateTracking', $tracking);
    }

    public function toArray()
    {
        $data = array();
        if ($this->getTitle() !== null) {
            $data['title'] = $this->getTitle();
        }
        return $data;
    }
    
}


class TrackingFields
{
    /**
     * Название посылки
     * @var string
     */
    private $title = null;

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function toArray()
    {
        $data = array();
        if ($this->getTitle() !== null) {
            $data['title'] = $this->getTitle();
        }
        return $data;
    }
}


class TrackingResponse //extends AbstractResponse
{
    /**
     * @return string
     */
    public function getCourierSlug()
    {
        return $this->data['tracking']['courier_slug'];
    }

    /**
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->data['tracking']['tracking_number'];
    }
}

echo '</pre>';