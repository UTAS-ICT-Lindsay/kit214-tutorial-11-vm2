<?php
// The functionality of this service is to reverse a string
function reverseString($inputString)
{
    return json_encode(array("result" => strrev($inputString)));
}

// Create SOAP Server and Register the function 
$server = new SoapServer(null, array('uri' => "urn://utas/kit214"));
$server->addFunction('reverseString');
$server->handle();
?>