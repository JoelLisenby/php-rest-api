<?php // index | Joel Lisenby | 2017-10-13 | parse uri and init
require_once 'rest-api.class.php';

define('api_uri','api/v1');
define('base_uri','/');

// If the request URI starts with '/api/v1', instantiate the API class.
if(substr($_SERVER['REQUEST_URI'],0,strlen(base_uri . api_uri)) === base_uri . api_uri) {
	new \PMS\API;
}
?>
