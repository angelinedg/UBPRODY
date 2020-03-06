app.controller('operatorstats', function ($scope, $http, API_URL) {
    //retrieve employees listing from 

    $http({
        method: 'GET',
        url: API_URL + "operatorstats"
    }).then(function (response) {
        $scope.operatorstats = response.data.operatorstats;
        console.log(response);
    }, function (error) {
        console.log(error);
        alert('This is embarassing. An error has occurred2. Please check the log for details');
    });


});