<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Welcome to iDiscuss - Coding Forums</title>
    
  </head>
  <body>
  <?php include 'partials/_dbconnect.php';?>
  <?php include 'partials/_header.php';?>

  <!-- slider start here -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="true">
  

  <div class="carousel-indicators">
    <button type="button" data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></button>
    <button type="button" data-target="#carouselExampleIndicators" data-slide-to="1"></button>
    <button type="button" data-target="#carouselExampleIndicators" data-slide-to="2"></button>
</div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/slider-1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/slider-2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/slider-3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  <!-- catagory cintainer starts from here -->

  <div class="container my-3">
    <h2 class="text-center my-3">iDiscuss - Browse Categories</h2>
    <div class="row my-3">
      <!-- fetch all the catagories -->
      <!-- use a for loop to iterate through catagories -->

      <?php
      $sql = "SELECT * FROM `categories`";
      $result = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_assoc($result)) {
        //echo $row['category_id'];
        //echo $row['category_name'];
        $id = $row['category_id'];
        $cat = $row['category_name'];
        $desc = $row['category_description'];

        echo '<div class="col-md-4">
                <div class="card" style="width: 18rem;">
                <img src="https://source.unsplash.com/500x400?'. $cat .',coding" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title"><a href ="threadlist.php?catid=' . $id . '">' . $cat . '</a></h5>
                <p class="card-text">'. substr($desc, 0,80).'...</p>
                <a href="threadlist.php?catid=' . $id . '" class="btn btn-primary">View Threads</a>
                </div>
                </div>

              </div>';

      }
      
      ?>
       
        
    </div>
  </div>  


  <?php include 'partials/_footer.php';?>

  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>






