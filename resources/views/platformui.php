<!doctype html>
<html lang="en" ng-app="PlatformRecords">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,
            shrink-to-fit=no">

        <!-- Bootstrap CSS -->
       

        <title>Laravel 6 AngularJS Tutorial</title>

    </head>
    <body>
        <div class="container" ng-controller="PlatformController">
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
                            <th>Name</th>
                            <th>Code</th>
                            <th>Type</th>
                            <th>Rate</th>
                            <th>Description</th>
                            <th>Timezone</th>
                            <th>Status</th>
                            <th>Action</th>
                          
                        </tr>
                    </thead>
                    <tbody>
                            <!--model in controller-->
                        <tr ng-repeat="platforms in platforms">
                            <td>{{ platforms.id }}</td>
                            <td>{{ platforms.platformname }}</td>
                            <td>{{ platforms.platformcode }}</td>
                            <td>{{platforms.platformtype }}</td>
                            <td>{{ platforms.rate }}</td>
                            <td>{{ platforms.description }}</td>
                            <td>{{ platforms.timezone }}</td>
                            <td>{{ platforms.status }}</td>
                            <td>
                                <button class="btn btn-default btn-xs
                                    btn-detail"
                                    ng-click="toggle('edit', platforms.id)">Edit</button>
                                <button class="btn btn-danger btn-xs btn-delete"
                                    ng-click="confirmDelete(platforms.id)">Delete</button>
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
                            <form name="frmPlat" class="form-horizontal"
                                novalidate="">

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-12
                                        control-label">Platform Name</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control"
                                            id="platformname" name="platformname"
                                            placeholder="Platform Name"
                                            value="{{platformname}}"
                                            ng-model="platform.platformname"
                                            ng-required="true">
                                        <span class="help-inline"
                                            ng-show="frmPlat.platformname.$invalid
                                            && frmPlat.platformname.$touched">Platform Name is required</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-12
                                        control-label">Platform Code</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control"
                                            id="platformcode" name="platformcode"
                                            placeholder="Platform Code"
                                            value="{{platformcode}}"
                                            ng-model="platform.platformcode"
                                            ng-required="true">
                                        <span class="help-inline"
                                            ng-show="frmPlat.platformcode.$invalid
                                            && frmPlat.platformcode.$touched">Platform Code is required</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-12
                                        control-label">Platform Type</label>
                                    <div class="col-sm-12">
                                        <select class="form-control"
                                            id="platformtype"
                                            name="platformtype"
                                            placeholder="Platform Type"
                                            ng-model="platform.platformtype"
                                            ng-required="true"
                                            ng-selected="{{platformtype}}">
                                            <option>IM</option>
                                            <option>SMS</option>
                                            <option>EMAIL</option>
                                            <option>TEXT</option>
                                            <option>MOD</option>
                                        </select>
                                        <span class="help-inline"
                                            ng-show="frmPlat.platformtype.$invalid
                                            &&
                                            frmPlat.platformtype.$touched">Rate field is required</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-12
                                        control-label">Rate</label>
                                    <div class="col-sm-12">
                                        <input type="number" class="form-control"
                                            id="rate"
                                            name="rate"
                                            placeholder="Rate"
                                            value="{{rate}}"
                                            ng-model="platform.rate"
                                            ng-required="true">
                                        <span class="help-inline"
                                            ng-show="frmPlat.rate.$invalid
                                            &&
                                            frmPlat.rate.$touched">Rate field is required</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-12
                                        control-label">Description</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control"
                                            id="description"
                                            name="description"
                                            placeholder="Description"
                                            value="{{description}}"
                                            ng-model="platform.description"
                                            ng-required="true">
                                        <span class="help-inline"
                                            ng-show="frmPlat.description.$invalid
                                            &&
                                            frmPlat.description.$touched">Description field is required</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-12
                                        control-label">Timezone</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control"
                                            id="timezone"
                                            name="timezone"
                                            placeholder="Format Required: +00:00"
                                            pattern="(+[0-9][0-9])+([0-9][0-9])" 
                                            value="{{timezone}}"
                                            ng-model="platform.timezone"
                                            ng-required="true">
                                        <span class="help-inline"
                                            ng-show="frmPlat.timezone.$invalid
                                            &&
                                            frmPlat.timezone.$touched">Timezone field is required</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-12
                                        control-label">Status</label>
                                    <div class="col-sm-12">
                                        <select class="form-control"
                                            id="status"
                                            name="status"
                                            placeholder="Status"
                                            ng-model="platform.status"
                                            ng-required="true"
                                            ng-selected="{{status}}">
                                            <option>Active</option>
                                            <option>Inactive</option>
                                        </select>
                                        <span class="help-inline"
                                            ng-show="frmPlat.status.$invalid
                                            &&
                                            frmPlat.status.$touched">Rate field is required</span>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary"
                                id="btn-save" ng-click="save(modalstate, id)"
                                ng-disabled="frmPlat.$invalid">Save changes</button>
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
        <script src="<?= asset('app/app1.js') ?>"></script>
        <script src="<?= asset('app/controllers/platform.js') ?>"></script>
    </body>
</html>