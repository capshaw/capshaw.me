<?php

	$apiKey = 'fdae06d5f55e33f313eec0d691b201b8';

	if(isset($_POST['limit'])){
		$limit = $_POST['limit'];

		/*Make sure no one tries to call more than 50 */
		if($limit > 50){$limit = 50;}

		$url = 'http://ws.audioscrobbler.com/2.0/?method=user.gettopalbums&limit='.$limit.'&period=1month&user=premendax&api_key='.$apiKey;

		 // From http://lostechies.com/seanbiefeld/2011/10/21/simple-xml-to-json-with-php/ 
		function convertXmlToJson ($fileContents) {

			$fileContents = str_replace(array("\n", "\r", "\t"), '', $fileContents);

			$fileContents = trim(str_replace('"', "'", $fileContents));

			$simpleXml = simplexml_load_string($fileContents);

			$json = json_encode($simpleXml);

			return $json;

		}


		$a = file_get_contents($url);
		echo convertXmlToJson($a);
	}

?>