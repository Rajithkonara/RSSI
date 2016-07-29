@extends('layouts.site.header')
        <!-- Image Background Page Header -->
<!-- Note: The background image is set within the business-casual.css file. -->
<header class="business-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="tagline">QBank</h1>
            </div>
        </div>
    </div>
</header>

        <!-- Page Content -->
<div class="container">


    <!-- /.row -->

    <hr>
    <div class="row">
        <div class="col-sm-3">
            <button class="btn btn-primary" style="width:100%;padding:20px;text-align:center;" >
                <h4><b> Register <span class="glyphicon glyphicon-hand-right"></span> </b></h4>
            </button>
        </div>
        <div class="col-sm-3">
            <button class="btn btn-success" style="width:100%;padding:20px;" >
                <h4><b> Log in <span class="glyphicon glyphicon-log-in"></span> </b></h4>
            </button>
        </div>
        <div class="col-sm-3">
            <a href="{{url('/test/1')}}" class="btn btn-danger" style="width:100%;padding:20px;" >
                <h4><b>Answer Questions <span class="glyphicon glyphicon-pencil"></span> </b></h4>
            </a>
        </div>
        <div class="col-sm-3">
            <button class="btn btn-warning" style="width:100%;padding:20px;" >
                <h4><b>Evaluate   Progress <span class="glyphicon glyphicon-flag"></span></b></h4>
            </button>
        </div>
    </div>
    <hr>

<div class="hero">


    <div class="row">
        <div class="col-sm-3">
            <a href="{{url('/biology')}}" class="btn btn-primary" style="width:100%;padding:20px;" >
                <h4><b>Biology <span class="glyphicon glyphicon-pencil"></span> </b></h4>
            </a>
        </div>
        <div class="col-sm-3">
            <button class="btn btn-primary" style="width:100%;padding:20px;" >
                <h4><b> Chemistry <span class="glyphicon glyphicon-log-in"></span> </b></h4>
            </button>
        </div>
        <div class="col-sm-3">
            <a href="{{url('/papers')}}" class="btn btn-primary" style="width:100%;padding:20px;" >
                <h4><b>Physics <span class="glyphicon glyphicon-pencil"></span> </b></h4>
            </a>
        </div>
        <div class="col-sm-3">
            <button class="btn btn-primary" style="width:100%;padding:20px;" >
                <h4><b>Combine Maths <span class="glyphicon glyphicon-flag"></span></b></h4>
            </button>
        </div>
    </div>



</div>


<hr>

<!-- Footer -->
<footer>
    <div class="row">
        <div class="col-lg-12">
            <p>QBank 2016</p>
        </div>
    </div>
    <!-- /.row -->
</footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="{{asset('js/jquery.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>

</body>

</html>
