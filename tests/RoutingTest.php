<?php
Class RoutingTest extends PHPUnit_Framework_TestCase {
	public function testRouteApiLine(){

		

        // We need a request and response object to invoke the action
		$environment = \Slim\Http\Environment::mock([
			'REQUEST_METHOD' => 'GET',
			'REQUEST_URI' => '/chat',
			'QUERY_STRING'=>'lineID=apichartkhiaraiv&message=']
			);
		$request = \Slim\Http\Request::createFromEnvironment($environment);
		$response = new \Slim\Http\Response();

        // run the controller action and test it
		
		var_dump($response->withJson($request->getQueryParams())->getBody());
	}
}

?>