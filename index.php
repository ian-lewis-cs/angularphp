<!doctype html>
<html ng-app>
	<head>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.7/angular.min.js"></script>
		<script type="text/javascript" src="app.js"></script>
		<style>
		.left
		{
			float: left;
			width: 50%;
		}
		.right
		{
			float: right;
			width: 50%;
		}
		</style>
	</head>
	<body>
		<div class="left">
			<a href="#/">home</a><br />
			<a href="#/menu">menu</a><br />
		</div>
		<div class="right" ng-view>
		</div>
	</body>
</html>