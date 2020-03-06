app.controller('PlatformController', function ($scope, $http, API_URL) {
    //retrieve platforms listing from 

    $http({
        method: 'GET',
        url: API_URL + "platforms"
    }).then(function (response) {
        $scope.platforms = response.data.platforms;
        console.log(response);
    }, function (error) {
        console.log(error);
        alert('This is embarassing. An error has occurred2. Please check the log for details');
    });

    //show modal form
    $scope.toggle = function (modalstate, id) {
        $scope.modalstate = modalstate;
        $scope.platform = null;

        switch (modalstate) {
            case 'add':
                $scope.form_title = "Add New platform";
                break;
            case 'edit':
                $scope.form_title = "platform Detail";
                $scope.id = id;
                $http.get(API_URL + 'platforms/' + id)
                    .then(function (response) {
                        console.log(response);
                        $scope.platform = response.data.platform;
                    });
                break;
            default:
                break;
        }
        
        console.log(id);
        $('#myModal').modal('show');
    }

    //save new record / update existing record
    $scope.save = function (modalstate, id) {
        var url = API_URL + "platforms";
        var method = "POST";

        //append platform id to the URL if the form is in edit mode
        if (modalstate === 'edit') {
            url += "/" + id;

            method = "PUT";
        }

        $http({
            method: method,
            url: url,
            data: $.param($scope.platform),
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
        }).then(function (response) {
            console.log(response);
            location.reload();
        }), (function (error) {
            console.log(error);
            alert('This is embarassing. An error has occurred. Please check the log for details');
        });
    }

    //delete record
    $scope.confirmDelete = function (id) {
        var isConfirmDelete = confirm('Are you sure you want this record?');
        if (isConfirmDelete) {

            $http({
                method: 'DELETE',
                url: API_URL + 'platforms/' + id
            }).then(function (response) {
                console.log(response);
                location.reload();
            }, function (error) {
                console.log(error);
                alert('Unable to delete');
            });
        } else {
            return false;
        }
    }
});