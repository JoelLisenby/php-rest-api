<?php // API | Joel Lisenby | 2017-10-13 | REST API route provider
namespace API;
class API {

	private $output = array();
	private $route = '';
	
	public function __construct() {
		
		$this->route = substr($_SERVER['REQUEST_URI'],strlen(base_uri . api_uri));

		switch($this->route) {
			case '/test/':
			$this->route_test();
			break;
			default:
			$this->output = array('success'=>false,'message'=>'invalid route','data'=>null);
		}

		header('Content-Type: application/json');
		echo json_encode($this->output);

	}

	private function route_test() {
		$this->output = array(
			'success' => true,
			'message' => 'valid route',
			'data' => 'test'
		);
	}

}
?>
