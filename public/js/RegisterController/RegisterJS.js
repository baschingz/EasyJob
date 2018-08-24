app.controller('RegisterController',function($scope,$http){
    $scope.registerform = null;
    $scope.save= function(e){
        debugger;
        var req = {
            params : e,
            url:'test.php'
        }
        $http.get(req).then(function(res){

        },function(res){
            alert('fail');
        })
    }
});