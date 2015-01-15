<?php
$status = @$_GET['status'];
?>
<html>
	<head>
		<title>Sistemul nostru solar</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="../js/bootstrap.js"></script>
	</head>
	<body>
		<nav id="navb" class="navbar navbar-default navbar-fixed-top">
		  <div class="container">
			<ul class="nav navbar-nav navbar">
				<li id="navitm" ><a href="index.html">Home</a></li>
				<li id="navitm" ><a href="soare.html">Soare</a></li>
				<li id="navitm" ><a href="mercur.html">Mercur</a></li>
				<li id="navitm" ><a href="venus.html">Venus</a></li>
				<li id="navitm" ><a href="pamant.html">Pamant</a></li>
				<li id="navitm" ><a href="marte.html">Marte</a></li>
				<li id="navitm" ><a href="jupiter.html">Jupiter</a></li>
				<li id="navitm" ><a href="saturn.html">Saturn</a></li>
				<li id="navitm" ><a href="uranus.html">Uranus</a></li>
				<li id="navitm" ><a href="neptun.html">Neptun</a></li>
				<li id="navitm" ><a href="pluto.html">Pluto</a></li>
			</ul>
		  </div>
		</nav>
		<br/>
		<div id="logo"><a src="index.html"><img src="img/logo.png"/></a></div>
		<br/>
		<br/>
		<br/>
		<div id="content">
			<center class="title">FeedBack</center>
			<br/>
		<p class="maintext">Doriti sa ne lasati un feedback in legatura cu site-ul nostru?</p>
		<center>
			<form role="form" action="exec.php" method="POST">
			  <div class="form-group">
				<label for="exampleInputEmail1">Numele si Prenumele</label>
				<input type="text" class="form-control" id="text" placeholder="Eg : Seltea Clara Stefania" name="nume" required>
			  </div>
			  <div class="form-group">
				<label for="exampleInputEmail1">Email</label>
				<input type="email" class="form-control" id="text" placeholder="Eg : clarastefania@seltea.ro" name="mail" required>
			  </div>
			  <div class="form-group">
				<label for="exampleInputEmail1">Varsta</label>
				<input type="number" min="6" max="100" class="form-control" id="text" placeholder="Eg : 18" name="age" required>
			  </div>
			  <div class="form-group">
				<label for="exampleInputEmail1">Descriere</label>
				<textarea class="form-control" rows="4" name="txt"></textarea>
			  </div>
			  <button type="submit" class="btn btn-default" name="Submit">Submit</button>
			</form>
		</center>
        <br/>
		</div>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<div id="footer">
			<marquee behavior="scroll" direction="left" class="footertext">CopyRight Seltea Stefania Clara &copy; 2015&#8482;. All Right Reserved &reg;</marquee>
		</div>
		<div style="position: fixed; top: 487; left: 1218;z-index:9999;"><a href="feedback.php"><img src="img/feedback.png"/></a></div>
		<?php
		if($status == "success")
		echo "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>Thanks you for feedback!</div>";
		if($status == "fail")
		echo "<div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>Sorry! Please try again</div>";
		?>
	</body>
</html>