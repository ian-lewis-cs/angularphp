<!doctype html>
<html ng-app="app">
	<head>
		<script src="http://code.angularjs.org/1.2.7/angular.min.js"></script>
		<script src="http://code.angularjs.org/1.2.7/angular-route.min.js"></script>
		<script type="text/javascript" src="app.js"></script>
		<style>
		.header
		{
			font-size: 50px;
			font-color: navy;
			text-align: center;
		}
		.menu
		{
			float: left;
			width: 20%;
			background-color: #eee;
		}
		.content
		{
			float: right;
			width: 80%;
			text-align: center;
		}
		</style>
	</head>
	<body>
		<div class="header">AngularPHP</div>
		<div class="menu">
			<ul>
			<li><a href="#/">home</a></li>
			<li><a href="#/client">Simple client example</a></li>
			<li><a href="#/server">Server API example</a></li>
			</ul>
		</div>
		<div class="content" ng-view>
		</div>
	</body>
</html>
