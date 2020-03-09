<!doctype html>
<html lang="en" ng-app="OperatorRecords">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,
            shrink-to-fit=no">

        <!-- Bootstrap CSS -->
       

        <title>Laravel 6 AngularJS Tutorial</title>

    </head>
    <body>
        <div class="container" ng-controller="OperatorController">
            <header>
                <h2>Platforms</h2>
            </header>
            <div>
                 <th><button id="btn-add" class="btn btn-primary
                                    btn-xs"
                                    ng-click="toggle('add', 0)">Add New Platform</button></th>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Operator Code</th>
                            <th>Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Contact No</th>
                            <th>Address</th>
                            <th>Action</th>
                          
                        </tr>
                    </thead>
                    <tbody>
                            <!--model in controller-->
                        <tr ng-repeat="operators in operators">
                            <td>{{ operators.id }}</td>
                            <td>{{ operators.operatorcode }}</td>
                            <td>{{ operators.firstname }}</td>
                            <td>{{operators.lastname }}</td>
                            <td>{{ operators.email }}</td>
                            <td>{{ operators.contactno }}</td>
                            <td>{{ operators.address }}</td>
                            <td>
                                <button class="btn btn-default btn-xs
                                    btn-detail"
                                    ng-click="toggle('edit', operators.id)">Edit</button>
                                <button class="btn btn-danger btn-xs btn-delete"
                                    ng-click="confirmDelete(operators.id)">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1"
                role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{form_title}}</h5>
                            <button type="button" class="close"
                                data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form name="frmOp" class="form-horizontal"
                                novalidate="">

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-12
                                        control-label">Operator Code</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control"
                                            id="operatorcode" name="operatorcode"
                                            placeholder="Operator Code"
                                            value="{{operatorcode}}"
                                            ng-model="operator.operatorcode"
                                            ng-required="true">
                                        <span class="help-inline"
                                            ng-show="frmOp.operatorcode.$invalid
                                            && frmOp.operatorcode.$touched">Operator Code is required</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-12
                                        control-label">First Name</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control"
                                            id="firstname" name="firstname"
                                            placeholder="First Name"
                                            value="{{firstname}}"
                                            ng-model="operator.firstname"
                                            ng-required="true">
                                        <span class="help-inline"
                                            ng-show="frmOp.firstname.$invalid
                                            && frmOp.firstname.$touched">First Name is required</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-12
                                        control-label">Last Name</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control"
                                            id="lastname" name="lastname"
                                            placeholder="Last Name"
                                            value="{{lastname}}"
                                            ng-model="operator.lastname"
                                            ng-required="true">
                                        <span class="help-inline"
                                            ng-show="frmOp.lastname.$invalid
                                            && frmOp.lastname.$touched">Last Name is required</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-12
                                        control-label">Email</label>
                                    <div class="col-sm-12">
                                        <input type="email" class="form-control"
                                            id="email" name="email"
                                            placeholder="Email"
                                            value="{{email}}"
                                            ng-model="operator.email"
                                            ng-required="true">
                                        <span class="help-inline"
                                            ng-show="frmOp.email.$invalid
                                            && frmOp.email.$touched">Email is required</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-12
                                        control-label">Contact Number</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control"
                                            id="contactno"
                                            name="contactno"
                                            placeholder="Contact Number"
                                            value="{{contactno}}"
                                            ng-model="operator.contactno"
                                            ng-required="true">
                                        <span class="help-inline"
                                            ng-show="frmOp.contactno.$invalid
                                            &&
                                            frmOp.contactno.$touched">Contact Number is required</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-12
                                        control-label">Address</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control"
                                            id="address"
                                            name="address"
                                            placeholder="Address"
                                            value="{{address}}"
                                            ng-model="operator.address"
                                            ng-required="true">
                                        <span class="help-inline"
                                            ng-show="frmOp.address.$invalid
                                            &&
                                            frmOp.address.$touched">Timezone field is required</span>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary"
                                id="btn-save" ng-click="save(modalstate, id)"
                                ng-disabled="frmOp.$invalid">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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
        <script src="<?= asset('app/appoper.js') ?>"></script>
        <script src="<?= asset('app/controllers/operator.js') ?>"></script>
    </body>
</html>