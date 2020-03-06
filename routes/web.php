<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Alias Dump
Route::get('/AliasDump/AliasDump', 'AliasDump\AliasDumpController@index')->name('ADhome');
Route::get('/AliasDump/Stats', 'AliasDump\AliasDumpController@index1')->name('statshome');
Route::get('/AliasDump/AliasTracker', 'AliasDump\AliasDumpController@index2')->name('AThome');
Route::get('/AliasDump/ApiLogs', 'AliasDump\AliasDumpController@index3')->name('Apihome');


//Clients
Route::get ('/Clients/ClientList', 'Clients\ClientsController@index')->name('Chome');

//Custom Reports
Route::get ('/CustomReports/AttendanceReport', 'CustomReports\CustomReportsController@index')->name('CRhome');

//Data Management
Route::get ('/DataManagement/UploadLogs', 'DataManagement\DataManagementController@index')->name('DMhome');

//Groups
Route::get ('/Groups/Groups', 'Groups\GroupsController@index')->name('Ghome');

//Masterlist
Route::get ('/Masterlist/OperatorList', 'Masterlist\MasterlistController@index')->name('Mhome');

//Permissions
Route::get ('/Permissions/EditUserRole', 'Permissions\PermissionsController@index')->name('PEhome');

//Platforms
Route::get ('/Platforms/Platforms', 'Platforms\PlatformController@index')->name('PLhome');

//Services
Route::get ('/Services/Services', 'Services\ServicesController@index')->name('Shome');

//Stastics
Route::get('/Statistics/Platforms', 'Statistics\StatisticsController@index')->name('Sthome');
Route::get('/Statistics/Operators', 'Statistics\StatisticsController@index1')->name('Ohome');
Route::get('/Statistics/Teams', 'Statistics\StatisticsController@index2')->name('Thome');
Route::get('/Statistics/Payouts', 'Statistics\StatisticsController@index3')->name('Payhome');

//Teams
Route::get('/Teams/TeamPerformance', 'Teams\TeamsController@index')->name('Teamhome');

//Users
Route::get('/Users/Users', 'Users\UsersController@index')->name('Uhome');










