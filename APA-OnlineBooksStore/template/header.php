<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $title; ?></title>

    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="./bootstrap/css/jumbotron.css" rel="stylesheet">
  </head>

  <body style="background-color:White;">
    
   
    <nav class="navbar navbar-expand-sm bg-danger navbar-dark">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">APA Online Bookstore</a>
        </div>

        <!--/.navbar-collapse -->
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
              <!-- link to home.php -->
              <li><a href="index.php"><span class="glyphicon glyphicon-home"></span>&nbsp; Home</a></li>
             <!-- <li><a href="publisher_list.php"><span class="glyphicon glyphicon-paperclip"></span>&nbsp; Publisher</a></li> --->
              <!-- link to books.php -->
              <li><a href="books.php"><span class="glyphicon glyphicon-book"></span>&nbsp; Books</a></li>
              <!-- link to contacts.php -->
              <li><a href="contact.php"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp; Contact</a></li>
              <!-- link to shopping cart -->
              <li><a href="login2/signup.php"><span class="glyphicon glyphicon-user"></span>&nbsp; Register</a></li>
              
              <!-- link to admin.php -->
              <li><a href="admin.php"><span class="glyphicon glyphicon-user"></span>&nbsp; Admin Login</a></li>
              <!-- link to book.php -->
             <!-- <li><a href="books.php"><span class="glyphicon glyphicon-search"></span>&nbsp; Search</a></li> --->
              
              
            </ul>
        </div>
      </div>
    </nav>
    <?php
      if(isset($title) && $title == "Index") {
    ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
   <!--- <div class="jumbotron">
      <div class="container">
        <h1>Welcome to online APA bookstore</h1>
        <p> </p>
        <p> </p>
      </div>
    </div> ---->
    <?php } ?>
  

    
    <div class="container" id="main">