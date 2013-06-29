<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="/nopaste/css/nopaste.css" rel="stylesheet" media="screen">
    {{ LuminousViewHelper::headHtml() }}
    <title>Nopaste.waigie.de</title>
</head>
<body>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="brand" href="/"><em>No</em>Paste</a>
            <!--
            <ul class="nav pull-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        @yield('settings')
                    </ul>
                </li>
            </ul>
            -->
        </div>
    </div>
</div>

<div class="container">
    <div class="content">
        @yield('content')
    </div>
</div>
<script src="http://code.jquery.com/jquery.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

