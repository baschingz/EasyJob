app.controller('RegisterController',function($scope,$http){
    $scope.registerform = null;
    $scope.save= function(e){
        debugger;
        var req = {
            params : e,
            url:''
        }
        $http.get(req).then(function(response){

        },function(response){
            alert('fail');
        })
    }
});