<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="/nopaste/css/nopaste.css" rel="stylesheet" media="screen">
    <title>Nopaste.waigie.de</title>
</head>
<body>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="brand" href="#"><em>No</em>Paste</a>
            <ul class="nav pull-right">
                <li><a href="">Möp</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a>foo</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="container">
    <div class="content">
        <form class="form-horizontal">
            <fieldset>
                <legend><em>New</em> paste</legend>
                <textarea placeholder="paste"></textarea>
            </fieldset>
            <fieldset>
                <legend><em>Optional</em> Settings</legend>
                <div class="control-group">
                    <label class="control-label" for="title">Title</label>
                    <div class="controls">
                        <input type="text" id="title" placeholder="title">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="language">Language</label>

                    <div class="controls">
                        <select id="language"></select>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <input type="submit" value="submit" class="btn-large btn-primary">
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>
<script src="http://code.jquery.com/jquery.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

