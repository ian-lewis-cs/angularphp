<?php
/*
This file generates the entire angular app.
1. it generates the routing automatically
2. it creates an angular service called "api" that wraps all the server access
3. it merges all the js files into a single file
*/
$dir= getcwd();
$php_files = scandir($dir.'/api');
$js_files = scandir($dir.'/js');
$view_files = scandir($dir.'/views');
//define the routing for angular's SPA
echo 'var app = angular.module("app");\n'
echo 'app.config(function ($routeProvider) {\n';
foreach ($view_files as $view_file)
{
	$view=str_replace('.html','',$view_file);
	if (($view=='index')||($view=='default')||($view=='home'))
		echo '$'."routeProvider.when('/', {\n";
	else
		echo '$'."routeProvider.when('/$view', {\n";
    echo "templateUrl: 'Views/$view.html',\n"
	echo "controller: '$view'\n"
    echo "});\n"
}
echo    '$routeProvider.otherwise({ redirectTo: \'/\' });'
echo '});\n';
//create an API service for angular
echo 'app.service( \'api\', function($http)\n{\n';
foreach ($php_files as $php_file)
{
	$func=str_replace('.php','',$php_file);
	echo 'this.'.$func.'=function (js_data,success_fn) {
			$http({
			url: \'/'.$func.'\',
			method: "POST",
			data: js_data,
			headers: {\'Content-Type\': \'application/json\'}
		}).success(function (json) {var data=angular.fromJson(json);success_fn(data);})
		};\n'
}
echo '\n});';

//merge all js file to one big one
foreach ($js_files as $js_file)
{
	include($dir.'/js/'.$js_file);
}
?>