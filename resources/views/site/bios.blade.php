
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('css/mycss.css')}}" rel="stylesheet">



</head>

<body>
<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" style=" width: 250px; background-color:#3366ff;">  IAS  </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#menu-toggle" class="btn btn-link" id="menu-toggle">  <span class="	glyphicon glyphicon-th-list"></span> </a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li  ><a href="#"><i class="fa fa-suitcase"></i><span class="glyphicon glyphicon-envelope"> </span></a></li>
                <li  ><a href="#"><i class="fa fa-suitcase"></i><span class="	glyphicon glyphicon-bell"> </span></a></li>
                <li class="dropdown" style="padding-left:5px;padding-right:5px;">
                    <a href="#" class="dropdown-toggle profile-image" data-toggle="dropdown">
                        <img src="img/profile.jpg" class="img-circle special-img" width="30" height="30" > Sunil <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="fa fa-cog"></i><span class="glyphicon glyphicon-user"></span>  Profile</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i><span class="glyphicon glyphicon-wrench"></span>  Edit-Profile</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-sign-out"></i> Sign-out</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- navbar-collapse -->
    </div>
</nav>

<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">


            <li class="side" style="padding-top:60px;padding-left:45px:padding-bottom:5px;">

                <img src="img/profile.jpg" class="img-circle" width="150" height="150">

            </li>
            <nav class="nav-sidebar">
                <ul class="nav">
                    <li style="background-color: #999999;"><a href="javascript:;"><b>Hello Sunil!</b></a></li>
                    <li><a href="javascript:;"><span class="glyphicon glyphicon-fire"></span> IAS Quaterly News</a></li>
                    <li><a href="javascript:;"><span class="glyphicon glyphicon-book"></span> Student Handbooks</a></li>
                    <li><a href="javascript:;"><span class="glyphicon glyphicon-book"></span> Award Handbooks</a></li>
                    <li><a href="javascript:;"><span class="glyphicon glyphicon-ok-sign"></span> Regulations</a></li>
                    <li><a href="javascript:;"><span class="glyphicon glyphicon-bell"></span> Examination Time Tables</a></li>
                    <li><a href="javascript:;"><span class="glyphicon glyphicon-eye-open"></span> Class Time Tables</a></li>
                    <li><a href="javascript:;"><span class="glyphicon glyphicon-earphone"></span> Contact Us</a></li>
                    <li class="nav-divider"></li>
                    <li><a href="javascript:;"><i class="glyphicon glyphicon-log-in"></i> Sign in</a></li>
                </ul>
            </nav>

        </ul>
    </div>
    <!-- sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <a href="#menu-toggle" class="btn btn-default btn-sm" id="menu-toggle">  <span class="glyphicon glyphicon-eye-open"></span> Toggle Menu</a>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-md-6" style="padding:35px; overflow-x: scroll; max-height:500px;  ">
                    <!--Answers-->
                    <form method="post" action="{{ route('answers', $id) }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="paper_id" value="{{ $id }}">

                        @foreach($questions as $question)

                            <div class="options" >
                                <label class="radio-inline">
                                    {{ $question->id }}.
                                </label>
                                @foreach($question->choices as $choice)
                                    <label class="radio-inline">
                                        <input type="radio" name="{{ $question->id }}" value="{{ $choice->key }}" required>{{ $choice->label }}
                                    </label>
                                @endforeach
                            </div>
                            <br>

                        @endforeach

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Check
                                </button>
                            </div>
                        </div>
                    </form>
                    <!--End Answers-->

                </div>
            </div>
            {{--Validations --}}
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{--End Here--}}
        </div>
    </div>
    <!-- page-content-wrapper -->

</div>
<!-- wrapper -->




<!-- jQuery -->
<script src="{{asset('js/jquery.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>

</body>

</html>
