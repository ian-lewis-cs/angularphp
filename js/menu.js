app.controller("menu", function ($scope, api) {
    $scope.username = "UserName";
	$scope.get_id=function() {
		api.get_id(
				$scope.username,
				function (data)
				{alert(data.id);}
					);
	}
});
