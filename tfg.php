<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Alberto Lorente. Software Engineer</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body role="document">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="index.php"><img src="img/new.png" alt="AlbertoLorente" border="2" align="middle" width="300px" height="50px"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="index.php#studies">Studies</a></li>
            <li><a href="index.php#workExperience">Work Experience</a></li>
            <li><a href="index.php#recommendations">Recommendations</a></li>
			<li><a href="index.php#jobs">Jobs</a></li>
			<li><a href="index.php#personal">Personal</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container theme-showcase" role="main">

      <div class="page-header">
        <h1>Final Degree Work</h1>
		<h3>StarCraft solving mazes using reinforcement learning</h3>
      </div>

		
		<p><strong>Abstract</strong></p>
		<p>In this project the team will try to develop an application that, using the <strong>Q-Learning algorithm</strong>, 
		will be able to learn several activities by itself in the environment of real-time strategy 
		game (RTS) StarCraft. In particular, we will use it to solve maze on an autonomous way, 
		in other words, without providing it with previous knowledge about the maze's structure. </p>
		<p>To accomplish it, we will be moving one game-unity inside a maze that may have 
		enemies, and thanks to the reinforcement learning the game-unity will be able to find the 
		maze's exit by itself. </p>
		<p>We will show experiments with different learning strategies, using diverse rewards, and 
		at the end we will explain which of them worked better. Also we will develop a reusable 
		framework for this kind of learning based on Q-Learning algorithm, which will be used to 
		solve our problem and could be useful as a base to future developments.</p>
		<p>This project was realized with the help of my two friends Juan Deltell and Jes&uacutes Mart&iacutenez.</p>
		<p>If you want to read all our work you could do it <a href="http://eprints.ucm.es/32886/1/Memoria%20TFG%20-%20Resoluci%C3%B3n%20de%20laberintos%20en%20StarCraft%20empleando%20aprendizaje%20por%20refuerzo.pdf" target="_blank">here</a>.</p>
		<p align="middle"><iframe width="560" height="315" src="https://www.youtube.com/embed/tYYGrzDSRLw" frameborder="0" allowfullscreen></iframe></p>

	  <footer class="blog-footer">
		<a href="mailto:alberto.lorente92@gmail.com"><img src="img/gmail.png" alt="Gmail alberto.lorente92@gmail.com" width="100" height="100"></a>
		<a href="https://github.com/AlbertoLorente92" target="_blank"><img src="img/github.png" alt="GitHub AlbertoLorente92" width="100" height="100"></a>
	    <p>
	      <a href="#">Back to top</a>
	    </p>
	  </footer>
		


    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
