app.controller("server", function ($scope, api) {
    $scope.username = "UserName";
	$scope.id='';
	$scope.get_id=function() {
		api.get_id(
				$scope.username,
				function (data)
				{$scope.id=data.id;}
					);
	}
});
