<!DOCTYPE html>
<html>
<head>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" link rel="stylesheet" href="admin.css">
<!------ Include the above in your HEAD tag ---------->
    <title></title>
</head>
<body class="bg-light">
   <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link " href="#">Active</a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item ">
      <a class="nav-link disabled" href="#">Disabled</a>
    </li>
  </ul>
    <form class="form-inline offset-md-5" id="nav-form">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-success my-2 my-sm-0" >Search</button>
    </form>
  </div>
</nav>

    <div class="container-fluid">
        <div class="row" >
            <div id="height" class="col-md-2 bg-info" style="height: 700px;">
                <ul class="list-unstyled ">
                    <li class="font-weight-bold text-light mt-5">CORE</li>
                    <li class="text-light"><i class="fa fa-dashboard mr-md-1 f text-muted"></i>Dashboard</li>
                    <li class="font-weight-bold text-light mt-md-3">INTERFACE</li>

      <li class="dropdown my-md-3">
        <a id="nav-color" class="dropdown-toggle text-light" data-toggle="dropdown" href="#"><i class="fa fa-dashboard mr-md-1 f text-muted"></i>Layouts
        <span class="caret"></span></a>
        <ul id="d-bg" class="dropdown-menu">
          <li><a href="#" class="text-light">STATIC NAVIGATION</a></li>
          <li><a href="#" class="text-light">LIGHT SIDENAV</a></li>
          
        </ul>
      </li>
      <li class="dropdown">
        <a id="nav-color" class="dropdown-toggle text-light" data-toggle="dropdown" href="#"><i class="fa fa-clone text-muted mr-md-1"></i>Pages
        <span class="caret"></span></a>
        <ul id="d-bg" class="dropdown-menu ">
          <li><a href="#" class="text-light">Page 1-1</a></li>
          <li><a href="#" class="text-light">Page 1-2</a></li>
          <li><a href="#" class="text-light">Page 1-3</a></li>
        </ul>
      </li>
                </ul>
            </div>
            <div class="col-md-10">
                <h1 id="Dashboard" class="my-md-3">Dashboard</h1>
                <h4>Dashboard</h4>
                <div class="row justify-content-between">
                    <div class="col-md-3 py-md-4 rounded  text-center bg-primary">primary Card<hr class="bg-light"><a href="" class="text-light">view detail</a></div>
                    <div class="col-md-3 py-md-4 rounded  text-center bg-warning">Warning Card<hr class="bg-light"><a href="" class="text-light">view detail</a></div>
                    <div class="col-md-3 py-md-4 rounded  text-center bg-success">Success<hr class="bg-light"><a href="" class="text-light">view detail</a></div>
                    <div class="col-md-3 py-md-4 rounded  text-center bg-danger">Danger<hr class="bg-light"><a href="" class="text-light">view detail</a></div>

                </div>

            </div>
        </div>
    </div>


</body>
</html>