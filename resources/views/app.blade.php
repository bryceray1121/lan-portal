<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The Final LAN</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- MORRIS CHART STYLES-->
    <link href="/assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="/assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href="//cdn.datatables.net/1.10.5/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <script src="/assets/js/jquery-1.10.2.js"></script>

    <link rel="apple-touch-icon" sizes="57x57" href="/assets/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/assets/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/assets/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/assets/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon-16x16.png">
    <link rel="manifest" href="/assets/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand">Jimmy Wong</a>
        </div>
        <div style="padding-top: 8px;"><a style="font-size: 30px; font-weight: 700; padding-left: 40px; color: #fff;">The Final LAN</a></div>
    </nav>
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="/assets/img/jimmy_profile.png" class="user-image img-responsive"/>
                </li>
                <li>
                    <a class="{{ \Request::is('/') ? 'active-menu' : '' }}"  href="/"><i class="fa fa-dashboard fa-3x"></i> Games</a>
                </li>
                <li>
                    <a class="{{ \Request::is('usernames') ? 'active-menu' : '' }}" href="/usernames"><i class="fa fa-desktop fa-3x"></i> Usernames</a>
                </li>
                <li>
                    <a class="{{ \Request::is('brackets') ? 'active-menu' : '' }}" href="/brackets"><i class="fa fa-desktop fa-3x"></i> Brackets</a>
                </li>
            </ul>

        </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            @yield('content')
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<!-- BOOTSTRAP SCRIPTS -->
<script src="/assets/js/bootstrap.min.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="/assets/js/jquery.metisMenu.js"></script>
<!-- MORRIS CHART SCRIPTS -->
<script src="/assets/js/morris/raphael-2.1.0.min.js"></script>
<script src="/assets/js/morris/morris.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="//cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="/assets/js/custom.js"></script>


</body>
</html>
