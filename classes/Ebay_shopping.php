<?php
error_reporting( E_ERROR );
set_time_limit (60);

if (!isset($_POST['lot']))
    echo '<body id="php">';

class Ebay_shopping
{
	var $lotnum;
	var $name;
	var $currency;
	var $price;
	var $shipping;
	var $images = array();
	var $sellerfeedback;
	var $siteid;
	var $error = '';
	
	public	function __construct($lot)
	{
//		var_dump($this);
		$this->lotnum = $lot;
		$this->name = $responseXML->Item->Title;
		//return $fields;		
	}


	// устанавливает номер лота из параметра
	function setLot($lot)
	{
		$this->lot = $lot;
	}

///////////////////////////////////////////////////////////////////////////////////////////////////
	
	public static function getSingleItem( $request, $skip_no_spipping = 1, $ajax = 0 )
	{
    
    // бан-лист продавцов-гандонов SELLER NAME
    // бан-лист объявляется в ДВУХ функциях: getsingleItem и finditemAdvanced
  	$banlist = array(               
    'speedoutfitters',
    'motorcityperformanceplus',
    'ridersaddiction',
    'hondaeasttoledo'
    );

	    $endpoint = 'http://open.api.ebay.com/shopping?';
	    $session  = curl_multi_init();                       // create a curl session
	    //print_r($request); die;
	    //exit;
	    // 
	    $results = array();
	    $headersShip = array(
	      'X-EBAY-API-CALL-NAME: GetShippingCosts',
	      'X-EBAY-API-SITE-ID: 0',                              
	      'X-EBAY-API-APP-ID: RubenYak-81fb-43e6-b05e-58e99eeaf19e',
	      'X-EBAY-API-VERSION: 889',
	      "X-EBAY-API-REQUEST-ENCODING: XML",    
	      'Content-Type: text/xml;charset=utf-8',
	    );

	    // 
		$headers = array(
	      'X-EBAY-API-CALL-NAME: GetSingleItem',
	      'X-EBAY-API-SITE-ID: 0',                                 // Site 0 is for US
	      'X-EBAY-API-APP-ID: RubenYak-81fb-43e6-b05e-58e99eeaf19e',//ВОТ ЗДЕСЬ нужен ваш APPID
	      'X-EBAY-API-VERSION: 889',
	      "X-EBAY-API-REQUEST-ENCODING: XML",    // for a POST request, the response by default is in the same format as the request
	      'Content-Type: text/xml;charset=utf-8',
	    );
	
	    
	    $chs = array();
////printf(" (старт мультикурла getSingleItem: %.2f сек)<br>", (microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"]));						
		foreach ( $request as $url ) 
		{
			// подготовим мультикурл для GetSingleItem
			$chs[] = ( $ch = curl_init() );
			$xmlRequest  = "<?xml version=\"1.0\" encoding=\"utf-8\"?>";
			$xmlRequest .= '<GetSingleItemRequest xmlns="urn:ebay:apis:eBLBaseComponents"><ItemID>'.$url.'</ItemID>';
			$xmlRequest .= '<IncludeSelector>Compatibility,Details,ItemSpecifics,TextDescription</IncludeSelector>';
			$xmlRequest .= '</GetSingleItemRequest>​';        	
 			curl_setopt( $ch, CURLOPT_URL, $endpoint );
			curl_setopt($ch, CURLOPT_POST, true);              // POST request type
			curl_setopt($ch, CURLOPT_POSTFIELDS, $xmlRequest); // set the body of the POST
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);    // return values as a string - not to std out
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);    //set headers using the above array of headers
			curl_multi_add_handle( $session, $ch );

			// подготовим мультикурл для getShipping
			$chs[] = ( $ch = curl_init() );
			$xmlRequest  = "<?xml version=\"1.0\" encoding=\"utf-8\"?>";
			$xmlRequest .= "<GetShippingCostsRequest xmlns='urn:ebay:apis:eBLBaseComponents'><ItemID>".$url."</ItemID>";
			$xmlRequest .= "<MessageID>".$url."</MessageID>"; 
			$xmlRequest .= "<DestinationCountryCode>RU</DestinationCountryCode>";
			$xmlRequest .= "<IncludeDetails>false</IncludeDetails>"; // false|true необязательно
			$xmlRequest .= "</GetShippingCostsRequest>​";
			curl_setopt( $ch, CURLOPT_URL, $endpoint );
			curl_setopt($ch, CURLOPT_POST, true);              // POST request type
			curl_setopt($ch, CURLOPT_POSTFIELDS, $xmlRequest); // set the body of the POST
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);    // return values as a string - not to std out
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headersShip);    //set headers using the above array of headers
			curl_multi_add_handle( $session, $ch );
		}

    do {
    	// запустим мультикурл 
        $status = curl_multi_exec( $session, $running );
		// получаю информацию о текущих соединениях
		$info = curl_multi_info_read( $session );
       	if ( $info!==false )  
	   		{
//	   			print_r($info);
		   	}
		} while ( $status === CURLM_CALL_MULTI_PERFORM || $running);
		

///////////////////// главный цикл  /////////////////////
    foreach ( $chs as $ch ) 
    {
        $responseXML = curl_multi_getcontent($ch);
		$responseXML = simplexml_load_string($responseXML);

		// если лот не BIN
		// почему-то вседа выполняется continue независимо от 	ListingType
		// continue пока отключено
		if ($responseXML->Item->ListingType != 'FixedPriceItem') 
		{
            echo			$error = $responseXML->Item->ItemID.' '.$responseXML->Item->ListingType;
            ob_get_flush();
            //			continue;
		}

		// если лот протух
		if ($responseXML->Item->ListingStatus == 'Completed') 
		{
    		if ($ajax == 0)
    		{
                echo '<script>toastr.warning(\'<a target="_blank" href="http://ebay.com/itm/'.$responseXML->Item->ItemID.'">Лот '.$responseXML->Item->ItemID.' протух, ищем другой по partnumber</a>\',\'Ответ getSingleItem:\');</script>';
                ob_get_flush();			
            }
			return;

			if (isset($responseXML->Item->ProductID)) 
				{
//					 echo $error = ('EPID = '. $responseXML->Item->ProductID);
					 echo '<div id="console">'.$error = ('EPID = '. $responseXML->Item->ProductID).'</div>';
					 ob_get_flush();
					 self::findItemsByEPID($responseXML->Item->ProductID);
				}
			else
			{
				echo $error = ('EPID не найден, доделать. ');
				ob_get_flush();
			}
		}
		

        // если продавец (userID) в бан-листе - пропускаем
        // бан-лист объявляется в ДВУХ функциях: getsingleItem и finditemAdvanced
        if (in_array($responseXML->Item->Seller->UserID, $banlist)) 
        {
            if ($ajax == 0)
            {
                echo "<script>toastr.warning('забанен, пропускаем', '".$responseXML->Item->Seller->UserID."');</script>";    
                ob_get_flush();        
            }
            else {
                return json_decode(array('error'=>'Селлер забанен'));
            }
            //echo '========= ПИДОРАС: ';
            //echo $responseXML->Item->Seller->UserID.'<br>';
            //ob_get_flush();    
            continue;
        }




		
		// найдем epid
		unset($epid);
		$epid = strval($responseXML->Item->ProductID[0]);

		// обработаем производителя: Part Brand или Brand
		unset($brand);
		$partnumbers = self::simplexmlelement2array($responseXML->Item->ItemSpecifics->NameValueList);
		if ($partnumbers['Part Brand'] && $partnumbers['Brand']) 
		{
			$brand = $partnumbers['Part Brand'].' ';
		}
		elseif ($partnumbers['Part Brand'])
		{
			$brand = $partnumbers['Part Brand'].' ';
		}
		else
		{
			$brand = $partnumbers['Brand'].' ';
		}


		// обработаем парт-номер: Manufacturer Part Number или MPN или OEM
		unset($partnumber);
		if ($partnumbers['Manufacturer Part Number'] && $partnumbers['MPN']) 
		{
			$partnumber = $partnumbers['Manufacturer Part Number'];
		}
		elseif ($partnumbers['Manufacturer Part Number'])
		{
			$partnumber = $partnumbers['Manufacturer Part Number'];
		}
		elseif ($partnumbers['OEM'])
		{
			$partnumber = $partnumbers['OEM'];
		}
		else
		{
			$partnumber = $partnumbers['MPN'];
		}

		if (!$partnumber) 
		{
//			echo '<div id="console">PartNumber не найден.</div>';
//			ob_get_flush();
		}
		else 
		// сформируем поле "производитель" + "партномер"
		{
			$partnumber = $brand.$partnumber;
//			echo '<div id="console">partnumber = '.$partnumber.'</div>';
//			ob_get_flush();
		}

		// обработаем совместимость с марками-моделями (если указано) -- РАБОТАЕТ НЕ У ВСЕХ ЛОТОВ

/*
		unset($compatibility);
		$compatibilities = $responseXML->Item->ItemCompatibilityList;
		if ($compatibilities->Compatibility)
		{
			$compatibility = '<p>Подходит для:</p><ul>';
			foreach ($compatibilities->Compatibility as $models)
			{
				$model = self::simplexmlelement2array($models);
				$compatibility .= '<li>'.$model['Make'].' '.$model['Model'].' '.$model['Submodel'].' '.$model['Year'].'</li>';
			} 
			$compatibility .= '</ul>';
		}
*/
		
//print_r($compatibilities = $responseXML->Item); 		
//die;  
		
		
		
		// обработаем фотки
		unset($image);
		if (empty($responseXML->CorrelationID))
		{
            $i=0;
			foreach ($responseXML->Item->PictureURL as $images)
			{
				$imgs = $images->$i;
				$images1[] = self::imageNameTrim($imgs);
				$i++;
			}
            $cover = $responseXML->Item->GalleryURL;
            $image = implode("|", $images1); 
		}

		// обработаем стоимость доставки
	        if (isset($responseXML->CorrelationID))
		    {
		    
		    	$results[strval($responseXML->CorrelationID)]['shipping'] = strval($responseXML->ShippingCostSummary->ListedShippingServiceCost); 
		    	$results[strval($responseXML->CorrelationID)]['ebay_price'] = strval($responseXML->ShippingCostSummary->ListedShippingServiceCost)+$results[strval($responseXML->CorrelationID)]['price']; 
			}

		    else
		    {
			    $out = array (
			    'lot' => strval($responseXML->Item->ItemID),
			    'status' => strval($responseXML->Item->ListingStatus),
				'condition' => strval($responseXML->Item->ConditionDisplayName),
//				'quantity' => strval($responseXML->Item->QuantitySoldByPickupInStore),
//				'conditiondesc' => strip_tags($responseXML->Item->Description),
				'type' => strval($responseXML->Item->ListingType),
			    'name' => strval($responseXML->Item->Title), 
			    'epid' => $epid,
			    'ean13' => $partnumber, 
//			    'currency' => strval($responseXML->Item->CurrentPrice['currencyID']), 
//			    'price' => strval($responseXML->Item->CurrentPrice),
			    'currency' => strval($responseXML->Item->ConvertedCurrentPrice['currencyID']), 
			    'price' => strval($responseXML->Item->ConvertedCurrentPrice),			    
				'shipping' => $results[$responseXML['lot']]['shipping'],
				'seller' => strval($responseXML->Item->Storefront->StoreName),
				'feedback' => strval($responseXML->Item->Seller->FeedbackScore),
				'positive' => strval($responseXML->Item->Seller->PositiveFeedbackPercent),
			    'image' => $image,
                'cover' => $cover,
//			    'description' => self::cleanText(strip_tags(strval($responseXML->Item->Description))),
				'ebay_price' => $results[$responseXML['lot']]['shipping']+strval($responseXML->Item->CurrentPrice),
			    'compatibility' => $compatibility
			    );
			    $results[$out['lot']] = $out;
			}		    


			if ($responseXML->Errors->LongMessage) 
			{
    			if ($ajax == 0)
    			{
    				echo '<script>toastr.error(\'<a target="_blank" href="http://ebay.com/itm/'.$responseXML->CorrelationID.'">'.$responseXML->CorrelationID.' — '.$responseXML->Errors->LongMessage[0].'</a>\', \'Ответ getSingleItem: \');</script>';	
    				ob_get_flush();
				}
			}
	    
        curl_multi_remove_handle( $session, $ch );
        curl_close( $ch );

    } //end foreach

	// отбросим не имеющие доставки 
	foreach ($results as $result)
	    {
		    if ($skip_no_spipping==1)
		      if ($result['shipping']=='')
		      {
			       unset($results[$result['lot']]);
				   continue;
		      }

		     else 
		    $results[$result['lot']]['ebay_price'] = str_replace(',','.',strval($results[$result['lot']][price]+$results[$result['lot']]['shipping']));  

// передадим остальные лоты в отдельном массиве $variations
$variations[$result['lot']] = ($results[$result['lot']]['ebay_price']);
	    }

    curl_multi_close($session);
    return $results;
}	

///////////////////////////////////////////////////////////////////////////////////////////////////


	/* ищет стоимость доставки по номеру лота	
	// выдает ошибку если нет доставки
	//
	*/
	public static function getShipping( $request, $skip_no_spipping = 1, $endpoint = 'http://open.api.ebay.com/shopping?' )
	{
	    $xmlRequest  = "<?xml version=\"1.0\" encoding=\"utf-8\"?>";
	    $xmlRequest .= "<GetShippingCostsRequest xmlns='urn:ebay:apis:eBLBaseComponents'><ItemID>".$request."</ItemID>";
		$xmlRequest .= "<DestinationCountryCode>RU</DestinationCountryCode>";
		$xmlRequest .= "<MessageID>".strval($request)."</MessageID>"; // необязательно
		$xmlRequest .= "<IncludeDetails>false</IncludeDetails>"; // false|true необязательно
		$xmlRequest .= "</GetShippingCostsRequest>​";
	    $session  = curl_init($endpoint);                       
	    curl_setopt($session, CURLOPT_POST, true);              
	    curl_setopt($session, CURLOPT_POSTFIELDS, $xmlRequest); 
	    curl_setopt($session, CURLOPT_RETURNTRANSFER, true);    
	    $headers = array(
	      'X-EBAY-API-CALL-NAME: GetShippingCosts',
	      'X-EBAY-API-SITE-ID: 0',                              
	      'X-EBAY-API-APP-ID: RubenYak-81fb-43e6-b05e-58e99eeaf19e',
	      'X-EBAY-API-VERSION: 889',
	      "X-EBAY-API-REQUEST-ENCODING: XML",    
	      'Content-Type: text/xml;charset=utf-8',
	    );
	    curl_setopt($session, CURLOPT_HTTPHEADER, $headers);
	    $responseXML = curl_exec($session);
	    curl_close($session);
	    $responseXML = simplexml_load_string($responseXML);

		if (!$responseXML->ShippingCostSummary->ListedShippingServiceCost && $skip_no_spipping == 0) 
		{
			echo '<div id="console">нет доставки, ищем другой лот</div>';
			ob_get_flush();
			// здесь запускаем другой лот из найденного
		}
		elseif ($responseXML->Errors->LongMessage) 
		{
			echo 'хуйня с доставкой ';
			ob_get_flush();
			return array('ListedShippingServiceCost' => $responseXML->Errors->LongMessage);
		}
		else
		{
//printf(" (getShipping: %.2f сек)<br>", (microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"]));						
		    return array(
		    'lot' => $request,
		    'ShippingServiceName' => $responseXML->ShippingCostSummary->ShippingServiceName,
		    'ListedShippingServiceCost' => $responseXML->ShippingCostSummary->ListedShippingServiceCost,
		    'currencyID' => $responseXML->ShippingCostSummary->ListedShippingServiceCost['currencyID']
		    );
	    }
	}


///////////////////////////////////////////////////////////////////////////////////////////////////


	/* ищет товары по ключевым словам ВО ВСЕХ store	
	// в качестве ключевых слов понимает partnumber
	// 
	// использовать в EbayUpdater
	*/
	public static function findItemsAdvanced( $request, $findpair = 0, $csv = 0 )
	{
        // бан-лист продавцов-гандонов
        // бан-лист объявляется в ДВУХ функциях: getsingleItem и finditemAdvanced
      	$banlist = array(               
        'speedoutfitters',
        'motorcityperformanceplus',
        'ridersaddiction',
        'hondaeasttoledo',
        'riderswarehouse'
        );
    	

		$endpoint = 'http://svcs.ebay.com/services/search/FindingService/v1?';
	    $xmlRequest  = "<?xml version=\"1.0\" encoding=\"utf-8\"?>";
	    $xmlRequest .= "<findItemsAdvancedRequest xmlns='http://www.ebay.com/marketplace/search/v1/services'>";
	    $xmlRequest .= "<categoryId>10063</categoryId>"; // 10063 - запчасти для мотоциклов // 6028 - запчасти вообще
	    $xmlRequest .= "<descriptionSearch>false</descriptionSearch>"; // ИНОГДА может найти полную хуйню, отключено
	    $xmlRequest .= "<keywords>".$request."</keywords>";
	    
	    $xmlRequest .= "<itemFilter><name>Condition</name><value>New</value></itemFilter>"; 
	    $xmlRequest .= "<itemFilter><name>FeedbackScoreMin</name><value>1000</value></itemFilter>"; 	    
	    $xmlRequest .= "<itemFilter><name>ListingType</name><value>FixedPrice</value></itemFilter>"; 	    
	    $xmlRequest .= "<itemFilter><name>AvailableTo</name><value>RU</value></itemFilter>";
	    $xmlRequest .= "<itemFilter><name>PaymentMethod</name><value>PayPal</value></itemFilter>"; 	
		$xmlRequest .= "<itemFilter><name>HideDuplicateItems</name><value>true</value></itemFilter>"; 	
		
		/* пока не работает 
		$xmlRequest .= "<itemFilter><name>ExcludeSeller</name>
						<value>".implode("|", $banlist)."</value></itemFilter>"; 
        */
        
	    $xmlRequest .= "<outputSelector>SellerInfo</outputSelector>
		<paginationInput><entriesPerPage>100</entriesPerPage></paginationInput> 
	    <sortOrder>PricePlusShippingLowest</sortOrder>"; 
	    
		$xmlRequest .= "</findItemsAdvancedRequest>";
	    $session  = curl_init($endpoint);                       
	    curl_setopt($session, CURLOPT_POST, true);              
	    curl_setopt($session, CURLOPT_POSTFIELDS, $xmlRequest); 
	    curl_setopt($session, CURLOPT_RETURNTRANSFER, true);    
	    $headers = array(
	      'X-EBAY-SOA-SERVICE-NAME:FindingService',
	      'X-EBAY-SOA-OPERATION-NAME:findItemsAdvanced',                              
	      'X-EBAY-SOA-SERVICE-VERSION:1.12.0',
	      'X-EBAY-SOA-GLOBAL-ID:EBAY-US',
	      'X-EBAY-SOA-SECURITY-APPNAME:RubenYak-81fb-43e6-b05e-58e99eeaf19e',
	      "X-EBAY-API-REQUEST-ENCODING: XML",    
	      'Content-Type: text/xml;charset=utf-8',
	    );
	    curl_setopt($session, CURLOPT_HTTPHEADER, $headers);
	    $responseXML = curl_exec($session);
	    curl_close($session);

   
//print_r($responseXML); 
//die;

	    $responseXML = simplexml_load_string($responseXML); 
	    
//echo '<br><br>';
//print_r($responseXML); 	    

		foreach ($responseXML->searchResult->item as $item) 
		{

			if (strval($item->sellingStatus->sellingState) !== 'Active')		// пропустим проданные лоты
			{
				$error = 'Лот продан';
				continue; 	
			}
			
			// пропустим селлеров с positive feedback меньше X
			// не учитываем kakahealthcare, Meow-Auctshop, Mutazu
			if ((float)$item->sellerInfo->positiveFeedbackPercent < 98.0 && ($item->sellerInfo->sellerUserName != 'mutazu' && $item->sellerInfo->sellerUserName != 'kakahealthcare' && $item->sellerInfo->sellerUserName != 'Meow-Auctshop')   )		
			{
				continue;
			}
			

            // если продавец (название магазина) в бан-листе - пропускаем
            // бан-лист объявляется в ДВУХ функциях: getsingleItem и finditemAdvanced            
            if (in_array($item->sellerInfo->sellerUserName, $banlist)) {
                echo "<script>toastr.warning('забанен, пропускаем', '".$item->sellerInfo->sellerUserName."');</script>";    
                ob_get_flush();        
                
                //echo '============= ПИДОРАС: ';
                //echo $item->sellerInfo->sellerUserName.'<br>';
                //ob_get_flush();    
                
                continue;
            }
			

  		$items[] = $item;
  		$itemslots[] = strval($item->itemId);
		}
		
		$results = (self::getSingleItem($itemslots, 1));
//$results = self::priceSort($results);

//return $results; 
		
		// если ищется одиночный товар
		if ($findpair == 0) 
		{
			$results = self::priceSort($results);
			
			// если запрос не для вывода в файл
			if ($csv == 0)
			return $results;
			
			else 
			{
				$results[$results['lot']] = $results;
//				$results =(self::getSingleItem($results,0)); // отправить на return
//				print_r($results);die;
				return $results;
			}

		}
		

		// если ищется парный товар
        else
		{
            echo "<script>toastr.info('$item->title','findItemsAdvanced:');</script>";
            ob_get_flush();
			$results = array_values($results);
			return $results; 
		}



		
	} // end of findItemsAdvanced





///////////////////////////////////////////////////////////////////////////////////////////////////


	/* ищет составные товары из нескольких лотов
	// принимает строку с разделителями
	// разделитель — знак плюса +
	// понимает номера лотов
	*/
	public static function findPair( $request )
	{
        $tmp = array();
        $tmp1 = array();
        echo 'Ищем '. $request.'<br><br>';
        
    	$request = explode('+', $request);
    	foreach ($request as $keyword)
    	{
            $results[trim($keyword)] = self::findItemsAdvanced(trim($keyword) ,1);
    	}

    	foreach ($results as $result => $values)
    	{
            foreach ($values as $value)
    	    {  
    		    $tmp[$value['seller']][] = $value;
    	  	}
    	}

    	foreach ($tmp as $seller => $products)
        {
            if (count($products) >= count($request)) 
            {
                $tmp1[$seller] = $products;
                $data = '';
                $price = array();
                $total = 0;
                foreach ($tmp1[$seller] as $product)
                {   
                    // сравним текущую цену с забитыми ранее
                    if ( !in_array($product['price'], $price) )
                    {
                        $tmp1[$seller]['total_price'] += round($product['ebay_price']);
                        $data .= '<br><div style=""><img style="width: 150px; height: 80px; margin-right: 20px; object-fit: contain; border: #d0d1d5 solid 1px; border-radius: 5px;" src="'.$product['cover'].'">';
                        $data .= '<a href="http://www.ebay.com/itm/'.$product['lot'].'" target="_blank">$'.$product['ebay_price'].' — '.$product['ean13'].'</div></a>';
                        $tmp2[] = $product;
                        
                        // набиваем массив с ценами для послед проверки
                        array_push($price, $product['price']); 
                        $total++;                    
                    }
                }
                $tmp2['total_price'] = $tmp1[$seller]['total_price'];
                
                // если колво товаров меньше запрошенных - ничего не выводим
                if ($total >= count($request))
                {
                    
                    
                    $return .= '
                    <div class="sellers" data-price="'.$tmp1[$seller]['total_price'].'" data-supplier="'.$seller.'" id="'.$tmp1[$seller]['total_price'].'"> 
                        <hr><h1>$'.$tmp1[$seller]['total_price'].' — '.$seller.'</h1><p></p>
                        '.$data.'<br></div><br>';
                }
            }
            unset($tmp2);
        }

        return $return;
}




///////////////////////////////////////////////////////////////////////////////////////////////////

	/* ищет похожие товары по номеру лота на основе ключевых слов взятых из имени оригинального лота
	// частенько ищет полную хуйню
	// не работает если лот протух окончательно	
	// использовать непонятно где
	*/
	public static function getSimilarItemsRequest( $request, $endpoint = 'http://svcs.ebay.com/MerchandisingService?' )
	{
	    $xmlRequest  = "<?xml version=\"1.0\" encoding=\"utf-8\"?>";
	    $xmlRequest .= "<getSimilarItemsRequest xmlns=\"http://www.ebay.com/marketplace/services\">";
		$xmlRequest .= "<itemId>".$request."</itemId>";
		$xmlRequest .= "<listingType>FixedPriceItem</listingType>";
//		$xmlRequest .= "<maxPrice>20</maxPrice>"; // если ограничить цену, может найти еще более полную хуйню
//		$xmlRequest .= "<maxResults>25</maxResults>";
		$xmlRequest .= "</getSimilarItemsRequest>";
	    
	    $session  = curl_init($endpoint);                       
	    curl_setopt($session, CURLOPT_POST, true);              
	    curl_setopt($session, CURLOPT_POSTFIELDS, $xmlRequest); 
	    curl_setopt($session, CURLOPT_RETURNTRANSFER, true);    
	    $headers = array(
		'X-EBAY-SOA-OPERATION-NAME:getSimilarItems',
		'EBAY-SOA-CONSUMER-ID:RubenYak-81fb-43e6-b05e-58e99eeaf19e',
		'X-EBAY-SOA-REQUEST-DATA-FORMAT:XML',
		'X-EBAY-SOA-SERVICE-NAME:MerchandisingService'
	    );
	    curl_setopt($session, CURLOPT_HTTPHEADER, $headers);
	    $responseXML = curl_exec($session);
	    curl_close($session);
	    return simplexml_load_string($responseXML);
	}
	

///////////////////////////////////////////////////////////////////////////////////////////////////

	/* ищет товары по ключевым словам
	// НЕ ПОНИМАЕТ страну!
	// выводит SellerInfo
	*/ 			
	public static function findItemsByKeywordsRequest( $request, $endpoint = 'http://svcs.ebay.com/services/search/FindingService/v1?' )
	{
	    $xmlRequest  = "<?xml version=\"1.0\" encoding=\"utf-8\"?>";
	    $xmlRequest .= "<findItemsByKeywordsRequest xmlns='http://www.ebay.com/marketplace/search/v1/services'>";
	    $xmlRequest .= "<keywords>".$request."</keywords>";
	    $xmlRequest .= "<itemFilter>";
   	    $xmlRequest .= "<name>Condition</name><value>1000</value>";							// либо ListingType, либо Condition
//   	    $xmlRequest .= "<paramName>HideDuplicateItems</paramName><paramValue>true</paramValue>";// непонятно работает или нет
//   	    $xmlRequest .= "<paramName>AvailableTo</paramName><paramValue>RU</paramValue>"; 	// НЕ РАБОТАЕТ
//   	    $xmlRequest .= "<name>ListingType</name><value>FixedPrice</value>"; 					// либо ListingType, либо Condition
	    $xmlRequest .= "</itemFilter>";	    
	    $xmlRequest .= "<sortOrder>PricePlusShippingLowest</sortOrder>";
	    $xmlRequest .= "<outputSelector>SellerInfo</outputSelector>";
   	    $xmlRequest .= "</findItemsByKeywordsRequest>";
    
	    $session  = curl_init($endpoint);                       
	    curl_setopt($session, CURLOPT_POST, true);              
	    curl_setopt($session, CURLOPT_POSTFIELDS, $xmlRequest); 
	    curl_setopt($session, CURLOPT_RETURNTRANSFER, true);    
	    $headers = array(
		'X-EBAY-SOA-SERVICE-NAME:FindingService',
		'X-EBAY-SOA-OPERATION-NAME:findItemsByKeywords',
		'X-EBAY-SOA-SERVICE-VERSION:1.12.0',
		'X-EBAY-SOA-GLOBAL-ID:EBAY-MOTOR',
		'X-EBAY-SOA-SECURITY-APPNAME:RubenYak-81fb-43e6-b05e-58e99eeaf19e',
		'X-EBAY-SOA-REQUEST-DATA-FORMAT:XML'
	    );
	    curl_setopt($session, CURLOPT_HTTPHEADER, $headers);
	    $responseXML = curl_exec($session);
	    curl_close($session);
		return simplexml_load_string($responseXML);
	}
	

///////////////////////////////////////////////////////////////////////////////////////////////////


	/* ищет товары по EPID, показывает %PositiveFeedback
	// имеет фильтр по колву feedback продавца
	// показывает большие фотки
	// не показывает стоимость доставки
	//
	// <outputSelector>SellerInfo|StoreInfo|AspectHistogram|ConditionHistogram|GalleryInfo|PictureURLSuperSize|PictureURLLarge|UnitPriceInfo</outputSelector>
	// <sortOrder>BestMatch|CurrentPriceHighest|DistanceNearest|EndTimeSoonest|PricePlusShippingLowest|PricePlusShippingHighest|StartTimeNewest|BidCountMost|BidCountFewest|CountryAscending(Only showing first 10 of 11)</sortOrder>
	*/
	
	public static function findItemsByEPID( $request, $endpoint = 'http://svcs.ebay.com/services/search/FindingService/v1?' )
	{
	    $xmlRequest  = '<?xml version="1.0" encoding="utf-8"?>';
	    $xmlRequest  .= '<findItemsByProductRequest xmlns="http://www.ebay.com/marketplace/search/v1/services">
	    <itemFilter><name>FeedbackScoreMin</name><value>10000</value></itemFilter>
	    <productId type="ReferenceID">'.$request.'</productId>
	    <outputSelector>SellerInfo</outputSelector>	    
	    <outputSelector>PictureURLLarge</outputSelector>	    
		<sortOrder>PricePlusShippingLowest</sortOrder>
	    <paginationInput><entriesPerPage>10</entriesPerPage></paginationInput>
	    </findItemsByProductRequest>';
    
	    $session  = curl_init($endpoint);                       
	    curl_setopt($session, CURLOPT_POST, true);              
	    curl_setopt($session, CURLOPT_POSTFIELDS, $xmlRequest); 
	    curl_setopt($session, CURLOPT_RETURNTRANSFER, true);    
	    $headers = array(
		'X-EBAY-SOA-SERVICE-NAME:FindingService',
		'X-EBAY-SOA-OPERATION-NAME:findItemsByProduct',
		'X-EBAY-SOA-SERVICE-VERSION:1.12.0',
		'X-EBAY-SOA-SECURITY-APPNAME:RubenYak-81fb-43e6-b05e-58e99eeaf19e',
		'X-EBAY-SOA-REQUEST-DATA-FORMAT:XML'
	    );
	    curl_setopt($session, CURLOPT_HTTPHEADER, $headers);
	    $responseXML = curl_exec($session);
	    curl_close($session);
		$responseXML = simplexml_load_string($responseXML);
		
		if (!isset($responseXML->errorMessage))
		{
			foreach ($responseXML->searchResult->item as $lots)
			{
				print_r($lots);die;
				return $responseXML;
			}
		}
		else return $responseXML->errorMessage->error->message;
		
	}


///////////////////////////////////////////////////////////////////////////////////////////////////


	/*
	// ищет ключевые слова в заданной store
	// аналог RSS
	// понимает доставку в рашку
	// itemFilter - http://developer.ebay.com/Devzone/finding/CallRef/findItemsIneBayStores.html искать по itemFilter.name
	*/
	public static function findItemsIneBayStores( $request, $store, $minprice = 0, $maxprice = 99999, $site_id = 'MOTOR')
	{
		$endpoint = 'http://svcs.ebay.com/services/search/FindingService/v1?';
	    $xmlRequest  = '<?xml version="1.0" encoding="utf-8"?>';
	    $xmlRequest  .= '<findItemsIneBayStoresRequest xmlns="http://www.ebay.com/marketplace/search/v1/services">
		<keywords>'.$request.'</keywords>
		<storeName>'.$store.'</storeName>
		<itemFilter><name>MinPrice</name><value>'.$minprice.'</value></itemFilter><itemFilter><name>MaxPrice</name><value>'.$maxprice.'</value></itemFilter>  
		<itemFilter><name>AvailableTo</name><value>RU</value></itemFilter>
		<itemFilter><name>Condition</name><value>1000</value></itemFilter>
		
		<paginationInput>
		<entriesPerPage>100</entriesPerPage>  
		<pageNumber>0</pageNumber>
		</paginationInput>

		</findItemsIneBayStoresRequest>
		';
	    $headers = array(
        'X-EBAY-SOA-SERVICE-NAME:FindingService',
        'X-EBAY-SOA-OPERATION-NAME:findItemsIneBayStores',
        'X-EBAY-SOA-SERVICE-VERSION:1.13.0',
        'X-EBAY-SOA-GLOBAL-ID:EBAY-US',
        'X-EBAY-SOA-SECURITY-APPNAME:RubenYak-81fb-43e6-b05e-58e99eeaf19e',
        'X-EBAY-SOA-REQUEST-DATA-FORMAT:XML'
	    );
    
	    $session  = curl_init($endpoint);                       
	    curl_setopt($session, CURLOPT_POST, true);              
	    curl_setopt($session, CURLOPT_RETURNTRANSFER, true);    
	    curl_setopt($session, CURLOPT_HTTPHEADER, $headers);

		$curr_page = 0;
		$totalpages = 0;
		do
		{
		$xmlRequest = str_replace('<pageNumber>'.$curr_page.'</pageNumber>', '<pageNumber>'.($curr_page+1).'</pageNumber>', $xmlRequest);
	    curl_setopt($session, CURLOPT_POSTFIELDS, $xmlRequest); 
	    $responseXML = curl_exec($session);
		$responseXML = simplexml_load_string($responseXML);
//echo '<pre>';
//print_r($responseXML)		;die;
		// ошибка
		if ($responseXML->errorMessage)
		return $responseXML->errorMessage->error->message;
		
		// ничего не найдено
		elseif ($responseXML->searchResult['count'] == 0)
		return '<div id="console">'.$error = 'Ничего не найдено. Возможно нет доставки?</div';

		// выведем результаты в виде номеров лотов
		else
		{ 
		  if ($totalpages==0)
		   {
			echo $error = 'Найдено '. strval($responseXML->paginationOutput->totalEntries).' лотов ('.strval($responseXML->paginationOutput->totalPages).' страниц).<br>';

			// если лотов больше 100, запросим след страницу
			// результат в виде номеров лотов запишем в $items
			$totalpages = strval($responseXML->paginationOutput->totalPages);
			}

		   foreach ($responseXML->searchResult->item as $item)
			{
				$items[] = strval($item->itemId);
		
			} // end foreach
			
			
		}

		$curr_page++;
		} 
		while ($curr_page<$totalpages);
		unset($curr_page);
		// end DO
		
	    curl_close($session);

//echo '<pre>';
//print_r($items);
//die;	    
  		$out =(self::getSingleItem($items,0)); // отправить на return

	return ($out);
		
		
	} // end findItemsIneBayStores()



///////////////////////////////////////////////////////////////////////////////////////////////////


	// ищет юзера, смотрит positive feedback 
	public static function GetUserProfile( $request, $endpoint = 'http://open.api.ebay.com/shopping?' )
	{
	    $xmlRequest  = '<?xml version="1.0" encoding="utf-8"?><GetUserProfileRequest xmlns="urn:ebay:apis:eBLBaseComponents"><UserID>'.$request.'</UserID></GetUserProfileRequest>';
    
	    $session  = curl_init($endpoint);                       
	    curl_setopt($session, CURLOPT_POST, true);              
	    curl_setopt($session, CURLOPT_POSTFIELDS, $xmlRequest); 
	    curl_setopt($session, CURLOPT_RETURNTRANSFER, true);    
	    $headers = array(
		'X-EBAY-API-APP-ID:RubenYak-81fb-43e6-b05e-58e99eeaf19e',
		'X-EBAY-API-VERSION:889',
		'X-EBAY-API-CALL-NAME:GetUserProfile',
		'X-EBAY-API-REQUEST-ENCODING:XML',
		'Content-type:text/xml;charset=utf-8' //////////////////// этой ебаной бляди надо ИНОГДА указывать эту строку //////////////////////////////////////////////
	    );
	    curl_setopt($session, CURLOPT_HTTPHEADER, $headers);
	    $responseXML = curl_exec($session);
	    curl_close($session);
	    $responseXML = simplexml_load_string($responseXML);

		if (!isset($responseXML->Errors))
		{
		return $responseXML->User;
/*	    return array(
	    'FeedbackScore' => $responseXML->User->FeedbackScore,
	    'PositiveFeedbackPercent' => $responseXML->User->PositiveFeedbackPercent
	    );
*/	    
		}
		else return $error = $responseXML->Errors->LongMessage;
	}
	

///////////////////////////////////////////////////////////////////////////////////////////////////



	/*
	// ищет мои покупки за Х дней
	//
	*/
	public static function GetMyeBayBuying($days, $endpoint = 'https://api.ebay.com/ws/api.dll')
	{
		$xmlRequest  = '<?xml version="1.0" encoding="utf-8"?>
		<GetMyeBayBuyingRequest xmlns="urn:ebay:apis:eBLBaseComponents">
		<RequesterCredentials>
		<eBayAuthToken>AgAAAA**AQAAAA**aAAAAA**/t6FUw**nY+sHZ2PrBmdj6wVnY+sEZ2PrA2dj6wMkoKnDZWKoASdj6x9nY+seQ**6dABAA**AAMAAA**MZvV97RUr0PGlAYrScS+Ue88NZfRbJkV0AU3delwQHq5yClREduOpeII9aHsL/0EYAOwPvIhJJ+3xmPb/Pu81lCK7ewYMJ6eGjyQZzF8kYH7U2dAJt909rKey6c5rlSZn3eP7y9qVcToDXh4LLy2OVeG3A12j664Y/GnCEWxUNOk79jdZmBPianhfLyXnm+vrh6dabRShC0DRzrhGAu1H5knQBZC+O22xbVL63Lv9tFeJvudcbecYU70YEC6y60v1pEj5jOHonhSZNoRDjR4maVffP27tDjE/OqxuqEGL6fPugu3sKq3hgmhKDziQFSLi5F6h9SLyb2C1YtoNMEp9z4pQVk5IC374Wkw7i6+51bA91J3IP8QgzQbp+hHBOxgmTjn3h/p/sdkWVV0v4SLhnpp0hdnHf+j/XNhOn4DO09/e133HTi+4DZwhSG7NDApZZJDjZsk+0vGd6MGp25hrKxH7503EPoLVdnrH6xrinCC0DCeFwCDUyFGKsxlr/LJk1l5umrWQC2mqcXa/bd+NvmasDVdrQaz4yFoGMvtCIGD+ugkBj/CYxwegY3MzHJH4Vb7EWh8+w4MHsvMYyhb5qvj09aNw5gKTfeZhrkanQBlBGh9z+OhWlhAW95DtJg1T1SjJ1Ty3DkvEgvjaTpr0jLhVsBK/8DsK//X+nrihIfCxltyqIApVueKBJYep/NzrZcBn8Q+84+8BwPmcshJ0wUylc1QToxq7fwm1NMv/qYY4n3k/8NORPfVAdFAtng7</eBayAuthToken>
		</RequesterCredentials>
		
		<WonList>
		<IncludeNotes>true</IncludeNotes>
		<DurationInDays>'.$days.'</DurationInDays>
		</WonList>
		  
		<DeletedFromWonList>
		<Include>true</Include>
		<DurationInDays>'.$days.'</DurationInDays>
		<Sort>EndTime</Sort>
		<IncludeNotes>true</IncludeNotes>
		</DeletedFromWonList>
		  
		<ErrorLanguage>RU</ErrorLanguage>
		</GetMyeBayBuyingRequest>​';
		$session  = curl_init($endpoint);                       
	    curl_setopt($session, CURLOPT_POST, true);              
	    curl_setopt($session, CURLOPT_POSTFIELDS, $xmlRequest); 
	    curl_setopt($session, CURLOPT_RETURNTRANSFER, true);    
	    $headers = array(
	    'X-EBAY-API-COMPATIBILITY-LEVEL:893',
		'X-EBAY-API-DEV-NAME:0e75d032-06df-4b04-82e8-c45a6f7f5515',
		'X-EBAY-API-APP-NAME:RubenYak-81fb-43e6-b05e-58e99eeaf19e',
		'X-EBAY-API-CERT-NAME:56e007b5-0a25-48d0-997b-28377c615dc6',
		'X-EBAY-API-SITEID:0',
		'X-EBAY-API-CALL-NAME:GetMyeBayBuying'
		);
		curl_setopt($session, CURLOPT_HTTPHEADER, $headers);
	    $responseXML = curl_exec($session);
	    curl_close($session);
	    $responseXML = simplexml_load_string($responseXML);

		// текущий purchase history
		foreach ($responseXML->WonList->OrderTransactionArray->OrderTransaction as $transaction) 
		{
			// если несколько лотов в одном заказе
			if ($transaction->Order)
			{
				foreach ($transaction->Order->TransactionArray->Transaction as $order) 
				{
				$currency = 0;
				if ($order->Item->SellingStatus->CurrentPrice['currencyID'] == 'USD')
				{
					$currency = Currency::getCurrency(2);
				}
				if ($order->Item->SellingStatus->CurrentPrice['currencyID'] == 'EUR')
				{
					$currency = Currency::getCurrency(1);
				}			
					$currency = (1 / $currency['conversion_rate']);			
					$result .= $order->Item->ItemID.' '.$order->FeedbackReceived->CommentType.' (';
					$result .= $order->Item->PrivateNotes.')<br>';			
					$result .= $order->Item->Title.'<br>Цена '.$order->Item->SellingStatus->CurrentPrice['currencyID'].' ';
					$result .= floatval($order->Item->SellingStatus->CurrentPrice).'<br>Доставка '.$order->Item->SellingStatus->CurrentPrice['currencyID'].' ';
					$result .= floatval($order->Item->ShippingDetails->ShippingServiceOptions->ShippingServiceCost).'<br>Итого: ';
					$result .= round(((floatval($order->Item->SellingStatus->CurrentPrice) + floatval($order->Item->ShippingDetails->ShippingServiceOptions->ShippingServiceCost)) * $currency), -2).'р.<br><br>';						
				$currency = 0;				
//print_r($order->Item->SellingStatus->CurrentPrice['currencyID']);
				}
				continue;
			}

				$currency = 0;
				if ($transaction->Transaction->Item->SellingStatus->CurrentPrice['currencyID'] == 'USD')
				{
					$currency = Currency::getCurrency(2);
				}
				if ($transaction->Transaction->Item->SellingStatus->CurrentPrice['currencyID'] == 'EUR')
				{
					$currency = Currency::getCurrency(1);
				}			
				$currency = (1 / $currency['conversion_rate']);			
				$result = $transaction->Transaction->Item->ItemID.' '.$transaction->Transaction->FeedbackReceived->CommentType.' (';
				$result .= $transaction->Transaction->Item->PrivateNotes.')<br>';			
				$result .= $transaction->Transaction->Item->Title.'<br>Цена '.$transaction->Transaction->Item->SellingStatus->CurrentPrice['currencyID'].' ';
				$result .= floatval($transaction->Transaction->Item->SellingStatus->CurrentPrice).'<br>Доставка '.$transaction->Transaction->Item->SellingStatus->CurrentPrice['currencyID'].' ';
				$result .= floatval($transaction->Transaction->Item->ShippingDetails->ShippingServiceOptions->ShippingServiceCost).'<br>Итого: ';
				$result .= round(((floatval($transaction->Transaction->Item->SellingStatus->CurrentPrice) + floatval($transaction->Transaction->Item->ShippingDetails->ShippingServiceOptions->ShippingServiceCost)) * $currency), -2).'р.<br><br>';						

//			print_r($responseXML->WonList->OrderTransactionArray);
			
		}
		
		// hidden purchase history
		foreach ($responseXML->DeletedFromWonList->OrderTransactionArray->OrderTransaction as $transaction) 
		{
		
			// если несколько лотов в одном заказе
			if ($transaction->Order)
			{
				foreach ($transaction->Order->TransactionArray->Transaction as $order) 
				{
			$currency = 0;
			if ($order->Item->SellingStatus->CurrentPrice['currencyID'] == 'USD')
			{
				$currency = Currency::getCurrency(2);
			}
			if ($order->Item->SellingStatus->CurrentPrice['currencyID'] == 'EUR')
			{
				$currency = Currency::getCurrency(1);
			}			
				$currency = (1 / $currency['conversion_rate']);			
				$result .= $order->Item->ItemID.' '.$order->FeedbackReceived->CommentType.' (';
				$result .= $order->Item->PrivateNotes.')<br>';			
				$result .= $order->Item->Title.'<br>Цена '.$order->Item->SellingStatus->CurrentPrice['currencyID'].' ';
				$result .= floatval($order->Item->SellingStatus->CurrentPrice).'<br>Доставка '.$order->Item->SellingStatus->CurrentPrice['currencyID'].' ';
				$result .= floatval($order->Item->ShippingDetails->ShippingServiceOptions->ShippingServiceCost).'<br>Итого: ';
				$result .= round(((floatval($order->Item->SellingStatus->CurrentPrice) + floatval($order->Item->ShippingDetails->ShippingServiceOptions->ShippingServiceCost)) * $currency), -2).'р.<br><br>';						
				}
				continue;
//print_r($order->FeedbackReceived->CommentType);				
			}
			
				$currency = 0;
				if ($transaction->Transaction->Item->SellingStatus->CurrentPrice['currencyID'] == 'USD')
				{
					$currency = Currency::getCurrency(2);
				}
				if ($transaction->Transaction->Item->SellingStatus->CurrentPrice['currencyID'] == 'EUR')
				{
					$currency = Currency::getCurrency(1);
				}			
				$currency = (1 / $currency['conversion_rate']);			
				$result .= $transaction->Transaction->Item->ItemID.' '.$transaction->Transaction->FeedbackReceived->CommentType.' (';
				$result .= $transaction->Transaction->Item->PrivateNotes.')<br>';			
				$result .= $transaction->Transaction->Item->Title.'<br>Цена '.$transaction->Transaction->Item->SellingStatus->CurrentPrice['currencyID'].' ';
				$result .= floatval($transaction->Transaction->Item->SellingStatus->CurrentPrice).'<br>Доставка '.$transaction->Transaction->Item->SellingStatus->CurrentPrice['currencyID'].' ';
				$result .= floatval($transaction->Transaction->Item->ShippingDetails->ShippingServiceOptions->ShippingServiceCost).'<br>Итого: ';
				$result .= round(((floatval($transaction->Transaction->Item->SellingStatus->CurrentPrice) + floatval($transaction->Transaction->Item->ShippingDetails->ShippingServiceOptions->ShippingServiceCost)) * $currency), -2).'р.<br><br>';						
				
				
//			print_r($transaction);
			
		}

//print_r($result);

	}


///////////////////////////////////////////////////////////////////////////////////////////////////

	/*
	// обрезает хвосты у имен файлов картинок
	// 
	*/	
	static function imageNameTrim($image)
	{
		$p = strpos($image,".JPG");
		if ($p!=FALSE) return substr($image, 0,$p+4);
		else return $image;
	}


///////////////////////////////////////////////////////////////////////////////////////////////////

	/*
	//Делает массив из объекта simpleXMLelement Key=Value
	// 
	*/	
	public static function simplexmlelement2array($xml)
	{
		foreach ($xml as $NameValue)
		{
			$arr[strval($NameValue->Name)] = strval($NameValue->Value);
		} 
//var_dump($xml);die;	
return $arr;
	}	


///////////////////////////////////////////////////////////////////////////////////////////////////

    public static function simpleXmlToArray($xmlObject)
    {
        $array = array();

        foreach ($xmlObject->children() as $node) {
            if (is_array($node)) {
                $array[$node->getName()] = simplexml_to_array($node);
            } else {
                $array[$node->getName()] = (string) $node;
            }
        }
        return $array;
    }
    
   
///////////////////////////////////////////////////////////////////////////////////////////////////
    

	public static function cleanText($desc)
	{
		$search = array(
		'visit our ebay Store',
		'visit our store',
		'ebay',
		'positive feedback',
		'   ',
		';');
		$desc = str_ireplace($search, '', $desc);

	return $desc;
	}

////////////////////////////////////////////////////////////////////////////////////////////////////

	/*
	// берет стоимость доставки из базы на основе веса товара
	// для соотв уменьшения цены
	*/
	public static function weightPrice($weight)
	{
		$weight_price = Db::getInstance()->getValue('
		SELECT `price` FROM `presta_delivery`
		where `id_carrier` = 55
		and `id_zone` = 1
		and `id_range_weight` = (SELECT `id_range_weight` 
		FROM `presta_range_weight`
		where `id_carrier` = 55
		and `delimiter1` <= '.$weight.'
		and `delimiter2` >= '.$weight.')
		');
		$result = (float)$weight_price;
		return $result;
	}


///////////////////////////////////////////////////////////////////////////////////////////////

	/*
	// ищет наиболее дешевый лот из массива
	// используется в findItemsAdvanced
	//
	*/
	public static function priceSort($request)
	{
		foreach ($request as $lot)
			{
					$keys[] = strval($lot['lot']);
				$values[] = strval($lot['ebay_price']);
			}
		$set = array_combine($keys, $values);
	asort($set);
	return $request[array_keys($set)[0]]; 
	}
		

}

// список категорий ebay
// http://faq.frooition.com/ebay_categories.php


if (!isset($_POST['lot']))
{
    echo '<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>		
    <link href="//motokofr.com/js/toastr/toastr.css" rel="stylesheet"/>
    <script src="//motokofr.com/js/toastr/toastr.js"></script>';
}

?>