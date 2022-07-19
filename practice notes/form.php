
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Contact Us</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">GET/POST</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/pract/form.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $desc = $_POST['desc'];
       
        //summit these to a database

            //Connecting to database
        $servername= "localhost";
        $username= "root";
        $password = "";
        $database = "contacts";


        //Create a connection
        $conn = mysqli_connect($servername,$username,$password,$database);
        //die function
        if (!$conn){
            die("sorry we failed to connect: " . mysqli_connect_error());
        }
        else{
        
        //summit these to a database
        //sql query to be executed
        $sql = "INSERT INTO `contactus` (`sno`, `name`, `email`, `concern`, `date`) VALUES (NULL, '$name', '$email', '$desc', '2022-07-04 01:10:37.000000')";

        $result = mysqli_query($conn, $sql);
        //add a new data in table

        if($result){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Sucess!</strong> Your entry has been submited sucessfully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';      
          }
        else{
            echo "record was not be insrted because of this error";
            mysqli_error($conn);
        }
    }
}
?>
<div class="container mt-3">
    <h1>Contact us for your concerns</h1>
    <form action ="/pract/form.php" method ="post">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    
    <div class="mb-3">
        <label for="desc" class="form-label">Discribtion</label>
        <textarea class="form-control" name="desc" id="desc" cols="30" rows="10"></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
