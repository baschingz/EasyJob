app.controller('RegisterController',function($scope,$http){
    $scope.saveEmployer = function(e){
        debugger;
        var req = {
            params : e,
            url:base_path +'/register/Employer'
        }

        $http.post(req).then(function(response){
        
        },function(response){
            alert('fail');
        })
    }

    $scope.saveJobSeeker = function(e){
        debugger;
        var req = {
            params : e,
            url:base_path +'/register/JobSeeker'
        }

        $http.post(req).then(function(response){
        
        },function(response){
            alert('fail');
        })
    }
});