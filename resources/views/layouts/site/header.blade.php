<html>
<head>
    <title>DEV-EXAM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</head>
<body>
<header>
    <div class="row">
        <div class="center">
            <span>E-MCQ</span>
        </div>
</header>
<!--FIXED NAV BAR START -->
<nav class="navbar navbar-inverse navbar-fixed-top " role="navigation">
    <div class="container">
        <div class="navbar-header">
            <div style="padding:7px;">
                <a href="#menu-toggle" class="btn btn-default btn-sm" id="menu-toggle"> <span
                            class="glyphicon glyphicon-eye-open"></span> </a>
            </div>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#top-nav">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse" id="top-nav">
            <ul class="nav navbar-nav">
                <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><i class="fa fa-suitcase"></i><span class="glyphicon glyphicon-envelope"> </span></a>
                </li>
                <li><a href="#"><i class="fa fa-suitcase"></i><span class="	glyphicon glyphicon-bell"> </span></a>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle profile-image" data-toggle="dropdown">
                        <img src="http://placehold.it/30x30" class="img-circle special-img"> {{ Auth::user()->name }} <b
                                class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="fa fa-cog"></i> Account</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-sign-out"></i> Sign-out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<hr>
<div class="row" id="second_row">
    <h1>What can you expect from Us</h1>

    <div class="row">

        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
        standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
        a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
        remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
        Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions
        of Lorem Ipsum.

    </div>
</div>


<hr>
<div class="row" id="third_row">
    <h1>Successful Stories</h1>

    <div class="row">

        <div class="col-md-4">
            <img src="img/student.png" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">

            <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>

        <div class="col-md-4">
            <img src="img/student.png" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">

            <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>

        <div class="col-md-4">
            <img src="img/student.png" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">

            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>


    </div>
</div>
<hr>

</body>
</html>