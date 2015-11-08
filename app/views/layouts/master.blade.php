<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/general.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron" style="padding-top: 0; padding-bottom: 0; margin-bottom: 0;">
    <div class="container splash-001">
        <div class="row">
            <div class="col-md-6">
                <h2>Bullshit Found<span class="tiny">&#x2588;</span></h2>
            </div>
            <div class="col-md-6 intro">
                <p>The words blur together, an amalgamation of <span class="stronger">stone soup</span>, snake oil, accidental honesty, and <span class="sharper">pure lies</span>.</p>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-inverse mainNav">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav" style="float: none">
                <li class="active"><a href="#">Aboutface</a></li>
                <li><a href="#">'They'</a></li>
                <li><a href="#">Local Edition</a></li>
                <li class="pull-right" style="font-family: 'Courier New';"><a href="#">Devs_</a></li>
                <li class="pull-right"><a href="#">About</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

@yield('content')

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.3.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
