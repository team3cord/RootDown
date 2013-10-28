<?php
ini_set("user_agent", "FOOBAR");

  class MINDBODY_API {

  private $client;
  private $sourceCredentials = array("SourceName"=>'{MoxyDevTeam}', "Password"=>'{FOOWyuk6cG7NK0xwvtHyfQ5HRYY=}', "SiteIDs"=>array('{23456}'));


function getClasses($params = array()) {
	$this->client = new SoapClient('https://api.mindbodyonline.com/0_5/ClassService.asmx?WSDL', array("soap_version"=>SOAP_1_1, 'trace'=>true));
	$request = sourceCredentials;
	try {
		$result = $this->client->GetClasses(array("Request"=>$request));
	} catch (SoapFault $s) {
    		echo 'ERROR: [' . $s->faultcode . '] ' . $s->faultstring;
	} catch (Exception $e) {
    		echo 'ERROR: ' . $e->getMessage();
	}
	return $result;
}

function getXMLRequest() {
	return $this->client->__getLastRequest();
}
	
function getXMLResponse() {
	return $this->client->__getLastResponse();
}
      

}

?>

