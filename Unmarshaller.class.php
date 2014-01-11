<?php
require_once('cv.class.php');


class Unmarshaller {

	private $xml;
	private $xmlString;
	private $xmlFile;
	private $cv;
	
	function readFile() {
		$fp = fopen($xmlFile, 'r');
		$this->xmlString = fread($fp, filesize($this->xmlFile));
		fclose($fp);
	}
	
	function unmarshall($xmlFile) {
		$this->xmlFile = $xmlFile;
		$this->readFile();
		$this->xml = simplexml_load_string($this->xmlString);
		$this->unmarshallCV($this->xml->CV);
		return $this->cv;
	}
	
	function unmarshallCV($xmlCv) {
		$this->cv = new CV();
		
	}

}

?>