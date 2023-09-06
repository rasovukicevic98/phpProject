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

        
    </head>
    <?php include 'put.php'; ?>
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
          <h1 class="text-center">Edit Subject</h1>
          <hr style="height: 1px;color: black;background-color: black;">
        </div>
      </div>
      <div class="wrap-login100 p-l-55 p-r-55 p-t-44 p-b-54">
					<div class="wrap-input100 validate-input" data-validate = "A name is required">
						<span class="label-input100-1"> Change name</span>
						<input class="input100" type="text" name="Name" id="Name" placeholder="Name">
					</div>

                    <div class="wrap-input100 validate-input" >
						<span class="label-input100-1"> Change ESPB</span>
						<input class="input100" type="text" name="ESPB" id="ESPB" placeholder="ESPB">
					</div>

                    <div class="wrap-input100 validate-input" >
						<span class="label-input100-1"> Change Description</span>
						<input class="input100" type="text" name="Description" id="Description" placeholder="Description">
					</div>

					<div class="container-login100-form-btn p-t-44">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" onclick='updateSubject(<?php echo $_GET[
           'id'
       ]; ?>)'>
								Change Wizard
							</button>
						</div>
					</div>

					<div class="flex-col-c p-t-30">
						<span class="or p-b-20">
							OR
						</span>
					</div>
				
				<form action="index.php" enctype="multipart/form-data">
							<div class="container-login100-form-btn fs-150">
								<div class="wrap-login100-form-btn">
									<div class="login100-form-bgbtn"></div>
									<button class="login100-form-btn">
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
	<!-- <script src="js/main.js"></script> -->
	<script src="js/update.js"></script>
	<script src="js/validate.js"></script>
	
	<script type="text/javascript">
    document.getElementById("add").onclick = function () {
        location.href = "/phpProjects/index.php";
    };
</script>

</body>
</html>