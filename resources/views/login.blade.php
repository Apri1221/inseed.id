<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="assets/image/logo.png">
  <title>inseed.id - Invest Seaweed in Indonesia</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  
  <link rel="stylesheet" type="text/css" href="{{asset('css/styleCSS.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/jcarousel.responsive.css')}}">

  <!-- <link rel="stylesheet" href="css/styleCSS.css">
  <link rel="stylesheet" href="css/jcarousel.responsive.css"> -->
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" type="text/javascript" href="{{asset('js/jquery.jcarousel.min.js')}}">
  <link rel="stylesheet" type="text/javascript" href="{{asset('js/jcarousel.responsive.js')}}">  

  <!-- <script src="js/jcarousel.responsive.js"></script>
  <script src="js/jquery.jcarousel.min.js"></script> -->

</head>

<body style="background:url(image/petani/bg.jpg) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">
  <section id="header">
<nav class="navbar navbar-expand-lg navbar-light bg-white" id="header">
 <a href="index.php"><img src="image/logo.png" style=" padding: 0 10px 0 10px;
    height: 55px;
    width: 200px;"></a> 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">SEAWEED INVEST</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">SEAWEED MART</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="article.php">SEAWEED ARTICLE</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="about_us.php">TENTANG KAMI</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="login.php">MASUK</a>
      </li>
    </ul>
  </div>
</nav>
  </section>

  <section id="login Page" >
    
<div class = "container">
  <div class="col-md-6 col-sm-12 col-xs-12" style="margin: 10% auto;">
  <div class ="card" id="cardLogin">
    <div class="card-body">
        <h2 style="text-align: center;">Masuk Ke inseed.id</h2>
        <form action="insert.php" method="POST" class="col-md-10 col-sm-10 col-xs-10" style="float: left;">
  <div class="form-group" >
    <input type="email" class="form-control" placeholder="Email" name="email" >
    <input type="password" class="form-control" placeholder="Password" name="password">
  </div>
  <button type="submit" class="btn btn-outline-primary">Masuk</button>
</form>


</div>
<div class="col-md-12" style="text-align: center;"> 
<a href="#"><h6>Lupa Password?</h6></a>
<h6 id="daftarNow" style="">Belum memiliki akun? <a href="#">Daftar Sekarang!</a></h6>
</div>
</div>
</div>
  </section>
</body>
</html>