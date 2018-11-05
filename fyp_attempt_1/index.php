<!DOCTYPE html>
<html lang="en">
<?php
include 'db_connection.php';
 
$conn = OpenCon();
 
echo "Connected Successfully";
 
CloseCon($conn);
 
?>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Round About - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/round-about.css" rel="stylesheet">
	<link href="css/half-slider.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="admin.html">Admin
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	
	    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('http://placehold.it/1900x1080')">
            <div class="carousel-caption d-none d-md-block">
              <img class="rounded-circle img-fluid d-block mx-auto" src="img/person.jpg" alt="">
          <h3><?php 
					$query = "SELECT id, name, age, role, team, division FROM employee WHERE id = ? LIMIT 0,1";
					$stmt = $conn->prepare( $query );
					$id=1;
					$stmt->bindParam(1, $id);
					$stmt->execute();
					$row = $stmt->fetch(PDO::FETCH_ASSOC);
					echo "<div>Name: " . $row['name'] . "</div>";	
			  ?>
            <small><?php echo "<div>Role: " . $row['role'] . "</div>"; ?></small>
          </h3>
          <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
            <div class="carousel-caption d-none d-md-block">
              <img class="rounded-circle img-fluid d-block mx-auto" src="img/person.jpg" alt="">
          <h3><?php 
					$query = "SELECT id, name, age, role, team, division FROM employee WHERE id = ? LIMIT 0,1";
					$stmt = $conn->prepare( $query );
					$id=2;
					$stmt->bindParam(1, $id);
					$stmt->execute();
					$row = $stmt->fetch(PDO::FETCH_ASSOC);
					echo "<div>Name: " . $row['name'] . "</div>";	
			  ?>
            <small><?php echo "<div>Role: " . $row['role'] . "</div>"; ?></small>
          </h3>
          <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
            <div class="carousel-caption d-none d-md-block">
              <img class="rounded-circle img-fluid d-block mx-auto" src="img/person.jpg" alt="">
          <h3><?php 
					$query = "SELECT id, name, age, role, team, division FROM employee WHERE id = ? LIMIT 0,1";
					$stmt = $conn->prepare( $query );
					$id=3;
					$stmt->bindParam(1, $id);
					$stmt->execute();
					$row = $stmt->fetch(PDO::FETCH_ASSOC);
					echo "<div>Name: " . $row['name'] . "</div>";	
			  ?>
            <small><?php echo "<div>Role: " . $row['role'] . "</div>"; ?></small>
          </h3>
          <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <!-- Page Content -->
    <div class="container">

      <!-- Introduction Row -->
      <!--<h1 class="my-4">About Us
        <small>It's Nice to Meet You!</small>
      </h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, explicabo dolores ipsam aliquam inventore corrupti eveniet quisquam quod totam laudantium repudiandae obcaecati ea consectetur debitis velit facere nisi expedita vel?</p>
		-->
      <!-- Team Members Row -->
      <div class="row">
        <div class="col-lg-12">
          <h2 class="my-4">Our Team</h2>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/200x200" alt="">
          <h3><?php 
					$query = "SELECT id, name, age, role, team, division FROM employee WHERE id = ? LIMIT 0,1";
					$stmt = $conn->prepare( $query );
					$id=1;
					$stmt->bindParam(1, $id);
					$stmt->execute();
					$row = $stmt->fetch(PDO::FETCH_ASSOC);
					echo "<div>Name: " . $row['name'] . "</div>";	
			  ?>
            <small><?php echo "<div>Role: " . $row['role'] . "</div>"; ?></small>
          </h3>
          <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/200x200" alt="">
          <h3><?php 
					$query = "SELECT id, name, age, role, team, division FROM employee WHERE id = ? LIMIT 0,1";
					$stmt = $conn->prepare( $query );
					$id=2;
					$stmt->bindParam(1, $id);
					$stmt->execute();
					$row = $stmt->fetch(PDO::FETCH_ASSOC);
					echo "<div>Name: " . $row['name'] . "</div>";	
			  ?>
            <small><?php echo "<div>Role: " . $row['role'] . "</div>"; ?></small>
          </h3>
          <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/200x200" alt="">
          <h3><?php 
					$query = "SELECT id, name, age, role, team, division FROM employee WHERE id = ? LIMIT 0,1";
					$stmt = $conn->prepare( $query );
					$id=3;
					$stmt->bindParam(1, $id);
					$stmt->execute();
					$row = $stmt->fetch(PDO::FETCH_ASSOC);
					echo "<div>Name: " . $row['name'] . "</div>";	
			  ?>
            <small><?php echo "<div>Role: " . $row['role'] . "</div>"; ?></small>
          </h3>
          <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
        </div>
        <!--<div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/200x200" alt="">
          <h3>John Smith
            <small>Job Title</small>
          </h3>
          <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/200x200" alt="">
          <h3>John Smith
            <small>Job Title</small>
          </h3>
          <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/200x200" alt="">
          <h3>John Smith
            <small>Job Title</small>
          </h3>
          <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
        </div>-->
      </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
