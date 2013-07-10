<?php
    
    /* after registering in yahoo
     * http://developer.yahoo.com/geo/geoplanet/
     * take your id and fill in the following variable called $app_id 
     */


     $app_id ='[your app id here]';


    $country_string = file_get_contents("http://where.yahooapis.com/v1/countries?appid=$app_id");
    $countries = new SimpleXMLElement($country_string);
   
    //define arrays to get Clean country name and id
    $array_country_list = array();
    $array_single_country = array();
    
    

    foreach ($countries->place as $place ){               
            $array_single_country['name'] = (string)$place->name; 
            $array_single_country['id'] = (string)$place->woeid; 
            $array_country_list[] = $array_single_country;
    }

?>
