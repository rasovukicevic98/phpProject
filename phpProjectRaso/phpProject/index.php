<!doctype html>
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
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js" type="text/javascript"></script> 
        <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />

<script src="./js/delete.js" type="text/javascript"></script>
<script src="./js/update.js" type="text/javascript"></script>
    </head>
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
          <h1 class="text-center" style = "margin-top: 4%">All subject</h1>
          <hr style="height: 1px;color: black;background-color: black;">
        </div>
      </div>

      <?php
      include 'assignmentClass.php';
      $model = new Assignment();
      $model->fetch();
      ?>
   
     
    </div>

   <!-- Bootstrap core JS-->
   <script src="js/validate.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
  </body>
</html>