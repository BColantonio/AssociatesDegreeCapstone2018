<?php
if (!function_exists('curl_init')){
	throw new Exception('CURL is required to run the Nutritionix PHP API.');
} catch (Exception $e) {
	echo 'Error: ' , $e->getMessage(), "\n";
}

if (!function_exists('json_decode')){
	throw new Exception('JSON Extension is required to run the Nutritionix PHP API.');
} echo 'Error: ' , $e->getMessage(), "\n";

class Nutritionix
{
	private $app_id = "6d9373c3";
	private $apikey = "09c9c677f4aa0566fb208008b2919dbf";
	private $api_url = "http://api.nutritionix.com/v1_1/";
	
	public function __construct ($app_id, $api_key){
		$this->app_id = $app_id;
		$this->api_key = $api_key;		
	}
	
/** A null parameter will return the following item fields only: item_name, brand_name, item_id.
* NOTE-- passing "*" as a value will return all item fields.
 * The dev needs to make sure that the json result is returned with a json header,
 *  the api lib just returns the json string value
 * @return The search results array or json string depending on the return Json value*/


?>

