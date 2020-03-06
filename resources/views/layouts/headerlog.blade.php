@include('layouts.stylesheet')
@include('layouts.header')

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'name') }}</title>
</head>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a  class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name2', 'UB-PRODY') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                 <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @auth
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#!">
                                        Edit Profile
                                    </a>
 <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endauth
                        @guest
                          <meta http-equiv="refresh" content="0; URL='../register'" />
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

    </div>
    <!--SIDEBAR START-->
<div class="row" id="body-row">
    <!-- Sidebar -->
    <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
        <!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
        <!-- Bootstrap List Group -->
        <ul class="list-group">
            <!-- Separator with title -->
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small>MAIN MENU</small>
            </li>
            <!-- /END Separator -->
            <!-- Menu with submenu -->
            <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-window-close-o fa-fw mr-3"></span>
                    <span class="menu-collapsed">Alias Dump</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <!-- Submenu content -->
            <div id='submenu1' class="collapse sidebar-submenu">
                <a href="{{route('ADhome')}}" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Dump</span>
                </a>
                <a href="{{route('statshome')}}" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Stats Status</span>
                </a>
                <a href="{{route('AThome')}}" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Alias Tracker</span>
                </a>
                <a href="{{route('Apihome')}}" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Api Logs</span>
                </a>
                
            </div>


            <!--a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-user-circle-o fa-fw mr-3"></span>
                    <span class="menu-collapsed">Client</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a-->
            <!-- Submenu content -->
            <!--div id='submenu2' class="collapse sidebar-submenu">
                <a href="{{route('Chome')}}" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Client List</span>
                </a>
            </div-->

            <!-- Menu with submenu -->
            <!--a href="#submenu3" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-envelope-open-o fa-fw mr-3"></span>
                    <span class="menu-collapsed">Custom Reports</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a-->
            <!-- Submenu content -->
            <!--div id='submenu3' class="collapse sidebar-submenu">
                <a href="{{route('CRhome')}}" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Attendance Report</span>
                </a>
            </div>

             <a href="#submenu4" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-th-list fa-fw mr-3"></span>
                    <span class="menu-collapsed">Data Management</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a-->
            <!-- Submenu content -->
            <!--div id='submenu4' class="collapse sidebar-submenu">
                <a href="{{route('DMhome')}}" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Upload Logs</span>
                </a>
            </div>

             <a href="#submenu5" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-address-book-o fa-fw mr-3"></span>
                    <span class="menu-collapsed">Groups</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a-->
            <!-- Submenu content -->
            <!--div id='submenu5' class="collapse sidebar-submenu">
                <a href="{{route('Ghome')}}" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Groups</span>
                </a>
            </div>

             <a href="#submenu6" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-navicon fa-fw mr-3"></span>
                    <span class="menu-collapsed">Masterlist</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a-->
            <!-- Submenu content -->
            <!--div id='submenu6' class="collapse sidebar-submenu">
                <a href="{{route('Mhome')}}" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Operator List</span>
                </a>
            </div>

             <a href="#submenu7" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-keyboard-o fa-fw mr-3"></span>
                    <span class="menu-collapsed">Permissions</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a-->
            <!-- Submenu content -->
            <div id='submenu7' class="collapse sidebar-submenu">
                <a href="{{route('PEhome')}}" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Edit User Roles</span>
                </a>
            </div>

             <a href="#submenu8" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-server fa-fw mr-3"></span>
                    <span class="menu-collapsed">Platforms</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <!-- Submenu content -->
            <div id='submenu8' class="collapse sidebar-submenu">
                <a href="{{route('PLhome')}}" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Platforms</span>
                </a>
            </div>

             <!--a href="#submenu9" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-gears fa-fw mr-3"></span>
                    <span class="menu-collapsed">Services</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a-->
            <!-- Submenu content -->
            <!--div id='submenu9' class="collapse sidebar-submenu">
                <a href="{{route('Shome')}}" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Services</span>
                </a>
            </div-->

             <a href="#submenu10" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-line-chart fa-fw mr-3"></span>
                    <span class="menu-collapsed">Statistics</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <!-- Submenu content -->
            <div id='submenu10' class="collapse sidebar-submenu">
                <a href="{{route('Sthome')}}" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Platforms</span>
                </a>
                <a href="{{route('Ohome')}}" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Operators</span>
                </a>
                <a href="{{route('Thome')}}" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Teams</span>
                </a>
                <a href="{{route('Payhome')}}" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Payouts</span>
                </a>
            </div>

             <!--a href="#submenu11" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-vcard-o fa-fw mr-3"></span>
                    <span class="menu-collapsed">Teams</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a-->
            <!-- Submenu content -->
            <!--div id='submenu11' class="collapse sidebar-submenu">
                <a href="{{route('Teamhome')}}" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Teams Performance</span>
                </a>
            </div-->

             <a href="#submenu12" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-user-o fa-fw mr-3"></span>
                    <span class="menu-collapsed">Users</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <!-- Submenu content -->
            <div id='submenu12' class="collapse sidebar-submenu">
                <a href="{{route('Uhome')}}" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Users</span>
                </a>
            </div>

            <a href="#top" data-toggle="sidebar-colapse" class="bg-dark list-group-item list-group-item-action d-flex align-items-center">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span id="collapse-icon" class="fa fa-2x mr-3"></span>
                    <span id="collapse-text" class="menu-collapsed">Collapse</span>
                </div>
            </a>
        </ul><!-- List Group END-->
    </div><!-- SIDEBAR END -->

        <main class="col">
            @yield('content')
        </main>
        
<script>
    // Hide submenus
$('#body-row .collapse').collapse('hide'); 

// Collapse/Expand icon
$('#collapse-icon').addClass('fa-angle-double-left'); 

// Collapse click
$('[data-toggle=sidebar-colapse]').click(function() {
    SidebarCollapse();
});

function SidebarCollapse () {
    $('.menu-collapsed').toggleClass('d-none');
    $('.sidebar-submenu').toggleClass('d-none');
    $('.submenu-icon').toggleClass('d-none');
    $('#sidebar-container').toggleClass('sidebar-expanded sidebar-collapsed');
    
    // Treating d-flex/d-none on separators with title
    var SeparatorTitle = $('.sidebar-separator-title');
    if ( SeparatorTitle.hasClass('d-flex') ) {
        SeparatorTitle.removeClass('d-flex');
    } else {
        SeparatorTitle.addClass('d-flex');
    }
    
    // Collapse/Expand icon
    $('#collapse-icon').toggleClass('fa fa-angle-double-left fa fa-angle-double-right');
}
</script>
<style>
#body-row {
    margin-left:0;
    margin-right:0;
}
#sidebar-container {
    min-height: 100vh;   
    background-color: #333;
    padding: 0;
}

/* Sidebar sizes when expanded and expanded */
.sidebar-expanded {
    width: 230px;
}
.sidebar-collapsed {
    width: 60px;
}

/* Menu item*/
#sidebar-container .list-group a {
    height: 50px;
    color: white;
}

/* Submenu item*/
#sidebar-container .list-group .sidebar-submenu a {
    height: 45px;
    padding-left: 30px;
}
.sidebar-submenu {
    font-size: 0.9rem;
}

/* Separators */
.sidebar-separator-title {
    background-color: #333;
    height: 35px;
}
.sidebar-separator {
    background-color: #333;
    height: 25px;
}
.logo-separator {
    background-color: #333;    
    height: 60px;
}

/* Closed submenu icon */
#sidebar-container .list-group .list-group-item[aria-expanded="false"] .submenu-icon::after {
  content: " \f0d7";
  font-family: FontAwesome;
  display: inline;
  text-align: right;
  padding-left: 10px;
}
/* Opened submenu icon */
#sidebar-container .list-group .list-group-item[aria-expanded="true"] .submenu-icon::after {
  content: " \f0da";
  font-family: FontAwesome;
  display: inline;
  text-align: right;
  padding-left: 10px;
}
</style>