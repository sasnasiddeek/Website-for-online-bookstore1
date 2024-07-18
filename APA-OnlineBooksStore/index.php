<?php
  session_start();
  $count = 0;
  // connecto database
  
  $title = "Index";
  require_once "./template/header.php";
  require_once "./functions/database_functions.php";
  $conn = db_connect();
  $row = select4LatestBook($conn);
?>


      <!-- Example row of columns -->
      <p class="lead text-center text-muted"></p>
     <!--- <div class="row">
        <?php foreach($row as $book) { ?>
      	<div class="col-md-3">
      		<a href="book.php?bookisbn=<?php echo $book['book_isbn']; ?>">
           <img class="img-responsive img-thumbnail" src="./bootstrap/img/<?php echo $book['book_image']; ?>">
          </a>
      	</div>
        <?php } ?> 
      </div> --->
  <!------Slider----->
<div id="slider">
<div id= "headerSlider" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
    <li data-target="#headerSlider" data-slide-to="1"></li>
    <li data-target="#headerSlider" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="bootstrap/img/e.webp" class="d-block img-fluid" >
         <div class="carousel-caption">
            
          </div>
   <!-- </div>
    <div class="carousel-item">
      <img src="bootstrap/img/" class="d-block img-fluid" >
          <div class="carousel-caption">
            
          </div>
    </div>
    <div class="carousel-item">
      <img src="bootstrap/img/" class="d-block img-fluid">
          <div class="carousel-caption">
            
          </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div> ----->
       <!------About------->
<section id="about">
<div class="container">
<div class="container">
<div class="row">
<div class="col-mod-6">
<h2>About US</h2>
    <div class="about-content">
    “APA Bookstore works to connect readers with independent booksellers all over the world.We believe local bookstores are essential community hubs that foster culture, curiosity, and a love of reading, and we're committed to helping them thrive.Every purchase on the site financially supports independent bookstores. Our platform gives independent bookstores tools to compete online and financial support to help them maintain their presence in local communities.
    
    APA Bookstore began as an idea to help support bookstores and their communities as more and more people are buying their books online. We saw an opportunity to create an alternative to Amazon for socially-conscious online shoppers. Amazon sells over 60% of all books in the US and is growing. That shift threatens the future of bookstores and will hurt readers, authors, and publishers who rely on a diverse, healthy ecosystem for books. We had a better idea — give readers the convenience of online shopping while supporting independent bookstores at the same time."
</div>
</div>
</div>
</section>
    
      <!-- Example row of columns -->
      <p class="lead text-center text-muted"> New Arrivals</p>
     <div class="row">
        <?php foreach($row as $book) { ?>
      	<div class="col-md-3">
      		<a href="book.php?bookisbn=<?php echo $book['book_isbn']; ?>">
           <img class="img-responsive img-thumbnail" src="./bootstrap/img/<?php echo $book['book_image']; ?>">
          </a>
      	</div>
        <?php } ?> 
      </div> 
   
 <?php
  if(isset($conn)) {mysqli_close($conn);}
  require_once "./template/footer.php";
?>