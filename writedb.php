<?php
    require_once "phpCouch/lib/couch.php";
    require_once "phpCouch/lib/couchClient.php";
    require_once "phpCouch/lib/couchDocument.php";
    $client = new couchClient("http://localhost:5984", "applications"); 
 
    $new_doc = (object) $_POST;
    $new_doc->_id = $new_doc->user_name;
    try {
         $response = $client->storeDoc($new_doc);
    } catch (Exception $e) {
         echo "ERROR: ".$e->getMessage()." (".$e->getCode().")<br>\n";
    }
 echo "Doc recorded. id = ".$response->id." and revision = ".$response->rev."<br>\n";   
?>
