<!DOCTYPE html>
<html lang="en">
<?php
include 'db_connectionLocal.php';
 
$conn = OpenCon();
 
//echo "Connected Successfully";
 
CloseCon($conn);
 
?>
<!--<?php// prepare the statement. the place holders allow PDO to handle substituting
						// the values, which also prevents SQL injection
						$stmt = $pdo->prepare("SELECT id, name, age, role, team, division FROM employee WHERE id =: id LIMIT 0,1";
												// bind the parameters
						//$stmt->bindValue(":id", 1);
						//$stmt->bindValue(":role", "Manager");

						// initialise an array for the results 
						$products = array();
						if ($stmt->execute()) {
							while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
								$products[] = $row;
							}
						}

						// set PDO to null in order to close the connection
						$pdo = null;
?>-->
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Round About - Start Bootstrap Template</title>
	
	    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <!--<link href="css/sb-admin.css" rel="stylesheet">-->
    <link href="css/round-about.css" rel="stylesheet">
	<link href="css/half-slider.css" rel="stylesheet">
	<link href="css/sb-admin.css" rel="stylesheet">

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
          <div class="carousel-item active" style="background-image: url('img/abstractBackground.jpg')">
            <div class="carousel-caption d-none d-md-block">
			<a href = "test.php">
          <img class="rounded-circle img-fluid d-block mx-auto" src="img/person.jpg" alt=""></a>
          <h3><?php 
					$query = "SELECT * FROM department WHERE departmentID = ? LIMIT 0,1";
					$stmt = $conn->prepare( $query );
					$id=1;
					$stmt->bindParam(1, $id);
					$stmt->execute();
					$row = $stmt->fetch(PDO::FETCH_ASSOC);
					echo "<div>Group: " . $row['departmentName'] . "</div>";	
			  ?>
          </h3>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('img/greenBackground.jpg')">
            <div class="carousel-caption d-none d-md-block">
			<a href="test.php">
              <img class="rounded-circle img-fluid d-block mx-auto" src="img/person.jpg" alt=""></a>
          <h3><?php 
					$query = "SELECT * FROM department WHERE departmentID = ? LIMIT 0,1";
					$stmt = $conn->prepare( $query );
					$id=2;
					$stmt->bindParam(1, $id);
					$stmt->execute();
					$row = $stmt->fetch(PDO::FETCH_ASSOC);
					echo "<div>Group: " . $row['departmentName'] . "</div>";	
			  ?>
          </h3>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('img/blueBackground.jpg')">
            <div class="carousel-caption d-none d-md-block">
			<a href = "test.php">
              <img class="rounded-circle img-fluid d-block mx-auto" src="img/person.jpg" alt="">
			  </a>
          <h3><?php 
					$query = "SELECT * FROM department WHERE departmentID = ? LIMIT 0,1";
					$stmt = $conn->prepare( $query );
					$id=3;
					$stmt->bindParam(1, $id);
					$stmt->execute();
					$row = $stmt->fetch(PDO::FETCH_ASSOC);
					echo "<div>Group: " . $row['departmentName'] . "</div>";	
			  ?>
          </h3>
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
    <div class="container"><br>
		<!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-users"></i>
                  </div>
                  <div class="mr-5">Team Player!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">Award Merit Badge</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-star"></i>
                  </div>
                  <div class="mr-5">Above and Beyond!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">Award Merit Badge</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-trophy"></i>
                  </div>
                  <div class="mr-5">Took the Lead!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">Award Merit Badge</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-rocket"></i>
                  </div>
                  <div class="mr-5">Creation and Innovation!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">Award Merit Badge</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
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
