<?php 
include 'conn.php';
include 'header.php';
include ('pagination.php');


$sql = "SELECT ID, Call_Numbers, Authors, Title, Publisher FROM add_book_records_copy";

$result = mysqli_query($conn, $sql);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <title>Bootstrap Example</title>
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Fonts -->
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="css/animate.css" rel="stylesheet" />
  <!-- Squad theme CSS -->
  <link href="css/style.css" rel="stylesheet">
  <link href="color/default.css" rel="stylesheet">

<style>
  #myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 15px;
  border: none;
  outline: none;
  background-color: #6cf973;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 8%;
}

#myBtn:hover {
  background-color: green;
}
</style>

</head>
<body>

      <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-chevron-up"></i></button>

	<section id="intro" class="intro">
<div class="container">
	<div class="jumbotron">
  <h2>BOOKS</h2>
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>

  <div class="container">
  <table id="mytable" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Call Number</th>
        <th>Authors</th>
        <th>Title</th>
        <th>publisher</th>
      </tr>
    </thead>
    
<?php

if ($result->num_rows > 0) {

  while ($row = $result->fetch_assoc()) {

      while($row = mysqli_fetch_array($query)){
    
    ?>
    <tbody id="myTable">
      <tr>
        <td><?php echo $row['ID']; ?></td>
        <td><?php echo $row['Call_Numbers']; ?></td>
        <td><?php echo $row['Authors']; ?></td>
        <td><?php echo $row ['Title']; ?></td>
        <td><?php echo $row['Publisher']; ?></td>

      </tr>
      
    </tbody>
    <?php
           } //end of child while
      }//end of mother while
  } //end of if statement
?>

  </table>
  <div id="pagination_controls"><?php echo $paginationCtrls; ?>
  </div>
  </div>
  
  <div class="pagination-container">
            <nav>
                <ul class="pagination"></ul>
            </nav>
        </div>
 
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</div>
</div>

</section>
    <script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
</body>
</html>