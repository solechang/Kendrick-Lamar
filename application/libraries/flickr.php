<?php
class Flickr {
	public function __construct() {
		// $this->_api_key = $api_key;
	}
	function searchPhotosFlickr($searchTerm) {
		$searchTerm = urlencode($searchTerm); // The search with blank spaces will be one string
		
		$url = "http://www.flickr.com/services/rest/?api_key=712257cfbd9af2d67968def01b7161f5&method=flickr.photos.search&text=$searchTerm";
		$xmlString = file_get_contents($url);
		$simpleXML = simplexml_load_string($xmlString);
		return $simpleXML;
	}
}
