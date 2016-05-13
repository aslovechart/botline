<?php
// Routes
use Respect\Validation\Validator as v;
// $app->get('/[{name}]', function ($request, $response, $args) {
//     // Sample log message
//     $this->logger->info("Slim-Skeleton '/' route");

//     // Render index view
//     return $this->renderer->render($response, 'index.phtml', $args);
// });
// 
$app->get('/',function($request, $response, $args){
	return $response->withJson(['msg'=>'Welcome to lineBot.']);
});
$app->get('/chat',function($request, $response, $args){
var_dump($_GET);
	try {
		v::key('lineID', v::allOf(
			v::notEmpty()->setName('lineID')
			)
		)
		->key('message', v::allOf(
			v::notEmpty()->setName('message')
			)
		)
		->assert($_GET);
	} catch(\InvalidArgumentException $e) {
		$error = $e->getMessages();
	
		return $response->withJson(['error'=>$error]);
	}
});
