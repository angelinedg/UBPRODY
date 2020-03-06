<!doctype html>
<html lang="en" ng-app="">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,
            shrink-to-fit=no">

      

     
    </head>
    <body>
        <div class="container-sm-8" ng-controller="operatorstats">
            <header>
                <h2>Platform</h2>
            </header>
            <div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Platform Name</th>
       
                       
                  
                            <th><button id="btn-add" class="btn btn-primary
                                    btn-xs"
                                    ng-click="toggle('add', 0)">Add New Platform</button></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="operatorstat in operatorstats">
                            <td>{{ operatorstat.report_date }}</td>

                     
                             <td>
                                <button class="btn btn-default btn-xs
                                    btn-detail"
                                    ng-click="toggle('edit', employee.id)">Edit</button>
                                <button class="btn btn-danger btn-xs btn-delete"
                                    ng-click="confirmDelete(employee.id)">Delete</button>
                            </td>
                         
                        </tr>
                    </tbody>
                </table>
            </div>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>

        <!-- Load Javascript Libraries (AngularJS, JQuery, Bootstrap) -->
        <script
            src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.min.js"></script>
        <script
            src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular-animate.min.js"></script>
        <script
            src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular-route.min.js"></script>
        <!-- AngularJS Application Scripts -->
        <script src="<?= asset('app/statsoperator.js') ?>"></script>
        <script src="<?= asset('app/controllers/operatorstats.js') ?>"></script>
    </body>
</html>