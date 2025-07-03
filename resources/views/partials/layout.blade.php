<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>@yield('title', 'DE-FORT Tech and Health')</title>
</head>

<body>
    <nav class="navbar navbar-static-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#projects">
                    <span class="icon-bar" style="background-color:#337ab7"></span>
                    <span class="icon-bar" style="background-color:#337ab7"></span>
                    <span class="icon-bar" style="background-color:#337ab7"></span>
                </button>
                <a class="navbar-brand" href="#">DE-FORT</a>
            </div>
            <div class="collapse navbar-collapse" id="projects">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Expertise</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Projects<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Ongoing Projects</a></li>
                            <li><a href="#">Completed Projects</a></li>
                            <li><a href="#">Miscelianous Projects</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
    </div>
    @yield('content')
</body>

</html>