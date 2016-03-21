<?php
Class SoMiddleware{
	public function __invoke($request, $response, $next){
    	$response->getBody()->write($this->header());
    	$response = $next($request, $response);
    	$response->getBody()->write($this->footer());
		
		return $response;
	}

	public function header(){
		return "
			<!DOCTYPE html>
			<html>
			<head>
			<meta charset='utf-8'>
			<meta name='viewport' content='width=device-width, initial-scale=1.0'>
			<title>Ramonesia</title>
			<link rel='stylesheet' type='text/css' href='".HOMEBASE."asset/css/bootstrap.min.css' >
			<link rel='stylesheet' type='text/css' href='".HOMEBASE."asset/css/font-awesome.min.css' >
			</head>
			<body>
		";
	}

	public function footer(){
		return "
			<script type='text/javascript' src='".HOMEBASE."asset/js/jquery-1.11.3.min.js' ></script>
			<script type='text/javascript' src='".HOMEBASE."asset/js/bootstrap.min.js' ></script>
			</body>
			</html>
		";
	}
}
