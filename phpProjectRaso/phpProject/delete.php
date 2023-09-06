<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Subjects</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />

<!--===============================================================================================-->
</head>

<?php include 'database.php'; ?>

<body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="index.php">Subjects</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                    <li class="first"><a href="add.php">Add Subject</a></li>
                      
		<li class="second"><a href="index.php">Sort by Asc</a></li>
		<li class="third"><a href="index.php?order=DESC">Sort by Desc</a></li>
    <li> 
    <div class="searchBox">
		<form method="post">
			<input class="searchInput" type="text" name="search" placeholder="Search">
            <button class="searchButton" href="#">
                <i class="material-icons">
                    <img src="images/glass.png" height='20px' weight='15px'>
                </i>
			</button>
		</form>
    
    </div>
</li>
                    </ul>
                </div>
            </div>
        </nav>
    <div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <h1 class="text-center" style = "margin-top: 4%">Delete Subject</h1>
          <hr style="height: 1px;color: black;background-color: black;">
        </div>
      </div>
					
					<div class="container-login100-form-btn p-t-44">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="remove" type="submit" id="remove" onclick="deleteSubject()">
								Remove Subject
							</button>
						</div>
					</div>

					<div class="flex-col-c p-t-30">
						<span class="or p-b-20">
							OR
						</span>
					</div>
				</form>
				<form method="GET" action="second.php" enctype="multipart/form-data">
							<div class="container-login100-form-btn fs-150">
								<div class="wrap-login100-form-btn">
									<div class="login100-form-bgbtn"></div>
									<button class="login100-form-btn" name="browse" id="browse" value="Browse all Wizards">
										Browse all Subjects
									</button>
							</div>
						</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->

<script src="js/delete.js"></script>

<script>
    $(".login100-form-bgbtn").click(function () {
        var id = parseInt();

        $.ajax({
            url: "http://localhost:8081/phpProject/api/subjects/" + id;
            type: "DELETE",
            success: function (data) {
                alert("Obrisano!");
            }
        });
    });
</script>
	




</body>
</html>