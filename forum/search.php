<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Welcome to iDiscuss - Coding Forums</title>
    <style>
    #maincontainer {

        min-height: 100vh;
    }
    </style>
  </head>
  <body>
  <?php include 'partials/_dbconnect.php';?>
  <?php include 'partials/_header.php';?>
<!--search results starts here-->

    <div class="container my-3" id="maincontainer" >
        <h1 class="py-2">Search results for <em>"<?php echo $_GET['search']?>"</em></h1>
       
       <?php
       $noresults=true;
        $query =$_GET["search"];
       $sql= "SELECT * FROM `threads` WHERE MATCH (thread_title,thread_desc) against('$query')";
       $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            $title = $row['thread_title'];
            $desc = $row['thread_desc'];
            $thread_id = $row['thread_id'];
            $url = "thread.php?threadid=".$thread_id;
            $noresults=false;

         //display the search results
         echo '<div class="result">
                <h3> <a href="'.$url.'" class="text-dark">'.$title.'</a> </h3>
                <p>'.$desc.'</p>
            
              </div>';
        }
        if ($noresults) {
            echo '<div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <p class="display-4">No Result Found</p>
                        <p class="lead">

                        Suggestions:
                        <ul>
                        <li>Make sure that all words are spelled correctly.</li>
                        <li>Try different keywords.</li>
                        <li>Try more general keywords.</p></li>
                        </ul>
                    </div>
                 </div>'; 
        }
        ?>
    
        
  <?php include 'partials/_footer.php';?>

  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
</body>
</html>






