<?php

	if(isset($_POST['ajaxCall'])){
		$url = "http://ws.audioscrobbler.com/2.0/?method=user.gettopalbums&limit=10&period=1month&user=premendax&api_key=fdae06d5f55e33f313eec0d691b201b8";

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