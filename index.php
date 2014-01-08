<!doctype html>
<html ng-app="app">
	<head>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.7/angular.min.js"></script>
		<script type="text/javascript" src="app.js"></script>
	</head>
	<body>
		<div>
			<a href="#/">home</a><br />
			<a href="#/menu">menu</a><br />
		</div>
		<div ng-view>
		</div>
	</body>
</html>