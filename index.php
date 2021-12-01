<?php
	session_start();
	include('configdb.php');
?>
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title><?php echo $_SESSION['judul']." - ".$_SESSION['by'];?></title>

    <!-- Bootstrap core CSS -->
    <!--link href="ui/css/bootstrap.css" rel="stylesheet"-->
	<link href="ui/css/cerulean.min.css" rel="stylesheet">
	<link rel="stylesheet" href="style.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!--script src="./index_files/ie-emulation-modes-warning.js"></script-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
      <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" style="color:white; font-family:'arial black'"><?php echo $_SESSION['judul'];?></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse" style=" font-family:'arial black'">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="kriteria.php">Data Kriteria</a></li>
              <li><a href="alternatif.php">Data Alternatif</a></li>
			  <li><a href="analisa.php">Analisa</a></li>
              <li><a href="perhitungan.php">Perhitungan</a></li>
			</ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
		<div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading" style=" font-family:'Bookman Old Style'; font-size:18px"><b>Home</b></div>
		  <div class="panel-body">
			<h3><p align="center" class="text-primary" style="color:#2980b9; font-family:'cooper black'; font-size:20px"><?php echo $_SESSION['welcome'];?></p></h3>

			<center>
				<h1 style="color:#2980b9; font-family:'cooper black'; font-size:25px" >SELEKSI CALON PENERIMA ZAKAT</h1>
			<img src="4.jpg" alt="Zakat Yak" height="290">
		</center>
		  </div>

		  <!-- Table -->
		  <table class="table">
		  </table>
		  <div class="panel-footer text-primary" style=" font-family:'Bookman Old Style'"><b><?php echo $_SESSION['by'];?></b>
		  <h5 class="text-primary" style="color:#2980b9; font-family:'Bookman Old Style'">
			<p>1. Devi Yanti Cantika Fitri (20051214019)</p>
			<p>2. Siti Nur Azizah (20051214073)</p>
			<p>3. Siti Mahmudah Putri Yanna (20051214077)</p>
		  </h5>
		  <div class="pull-right">
		  </div></div>
		</div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="ui/js/jquery-1.10.2.min.js"></script>
	<script src="ui/js/bootstrap.min.js"></script>
	<script src="ui/js/bootswatch.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="ui/js/ie10-viewport-bug-workaround.js"></script>

</body></html>
