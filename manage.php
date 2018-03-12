<?php
ob_start(); 
include 'conn.php';
include ('pagination.php');

$sql = "SELECT * FROM add_book_records_copy";
$result = mysqli_query($conn, $sql);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>LMS</title>
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

  <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
        <a class="navbar-brand" href="index.php">
          <h1 style="color: white;">Library Management System</h1>
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
        <ul class="nav navbar-nav">
          <li class=""><a href="admin.php">Admin</a></li>
          <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-book fa-fw"></i>Books<i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="manage.php"><i class="fa fa-book fa-fw"></i>Manage Books</a>
                        </li>

                        </li>

                    </ul>
                    <!-- /.dropdown-user -->
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>User<i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i>Manage User</a>
                        </li>
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>Add User</a>
                        </li>
                        </li>
                        
                    </ul>
                    <li class="active"><a href="index.php">Logout</a></li>
                    <!-- /.dropdown-user -->
                </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>

  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-chevron-up"></i></button>

  <section id="intro" class="intro">
<div class="container">
  <div class="jumbotron">
  <h2>BOOKS</h2>
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <div class="container " style="margin-top: 5px">
      <div class="form-group">
          <!-- <select name="state" id="maxRows" class="form-control" style="width: 150px">
            <option value="5000">Show All</option>
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="15">15</option>
          </select> -->
      </div>
      
  </div>
  <div class="container">
    <button class="btn btn-success" data-toggle="modal" data-target="#addData">Add Books</button>
    <!-- Modal -->
<div class="modal fade" id="addData" tabindex="-1" role="dialog" aria-labelledby="addLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="addLabel">add Books</h4>
      </div>
      
<form action="insertdataexe.php" method="POST">
      <div class="modal-body">
           <div class="form-group">
            <label>Call Number</label>
            <input type="text" class="form-control" name="Call_Numbers" placeholder="">
          </div>
          <div class="form-group">
            <label>Authors</label>
            <input type="text" class="form-control" name="Authors" placeholder="">
          </div>
          <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="Title" placeholder="">
          </div>
          <div class="form-group">
            <label>Editor</label>
            <input type="text" class="form-control" name="Editor" placeholder="">
          </div>
          <div class="form-group">
            <label>Edition</label>
            <input type="text" class="form-control" name="Edition" placeholder="">
          </div>
          <div class="form-group">
            <label>Place Of Publ</label>
            <input type="text" class="form-control" name="Place_Of_Publ" placeholder="">
          </div>
          <div class="form-group">
            <label>Publisher</label>
            <input type="text" class="form-control" name="Publisher" placeholder="">
          </div>
          <div class="form-group">
            <label>Date Of Publ</label>
            <input type="text" class="form-control" name="Date_Of_Publ" placeholder="">
          </div>
          <div class="form-group">
            <label>Page No</label>
            <input type="text" class="form-control" name="Page_No" placeholder="">
          </div>
          <div class="form-group">
            <label>Series</label>
            <input type="text" class="form-control" name="Series" placeholder="">
          </div>
          <div class="form-group">
            <label>Notation1</label>
            <input type="text" class="form-control" name="Notation1" placeholder="">
          </div>
          <div class="form-group">
            <label>Notation2</label>
            <input type="text" class="form-control" name="Notation2" placeholder="">
          </div>
          <div class="form-group">
            <label>ISBN No</label>
            <input type="text" class="form-control" name="ISBN_No" placeholder="">
          </div>
          <div class="form-group">
            <label>ISSN No</label>
            <input type="text" class="form-control" name="ISSN_No" placeholder="">
          </div>
          <div class="form-group">
            <label>Accession No</label>
            <input type="text" class="form-control" name="Accession_No" placeholder="">
          </div>
          <div class="form-group">
            <label>Subject</label>
            <input type="text" class="form-control" name="Subject" placeholder="">
          </div>
          <div class="form-group">
            <label>Quantities</label>
            <input type="text" class="form-control" name="Quantities" placeholder="">
          </div>
          <div class="form-group">
            <label>Total Remaining Books</label>
            <input type="text" class="form-control" name="Total_remaining_books" placeholder="">
          </div>
          <div class="form-group">
            <label>Abstract</label>
            <input type="text" class="form-control" name="Abstractt" placeholder="">
          </div>
      </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success" name="submit">Save <i class="fa fa-plane"></i></button>
          </div>
</form>
    </div>
    </div>
</div>
<p></p>

  <table id="mytable" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Call Number</th>
        <th>Authors</th>
        <th>Title</th>
        <th>Editor</th>
        <th>Edition</th>
        <th>Action</th>
      </tr>
    </thead>
    

    <!--   
      $query=mysqli_query($conn,"select * from `add_book_records_copy` $limit");    $limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;-->
<?php

if ($result->num_rows > 0) {

          while ($row = $result->fetch_assoc()) { 
               
               while($row = mysqli_fetch_array($query)){
                  // ini_set('max_execution_time', 300); //300 seconds = 5 minutes
                  ?>
                  <tbody id="myTable">
                    <tr>
                      <td><?php echo $row['ID']; ?></td>
                      <td><?php echo $row['Call_Numbers']; ?></td>
                      <td><?php echo $row['Authors']; ?></td>
                      <td><?php echo $row['Title']; ?></td>
                      <td><?php echo $row['Editor']; ?></td>
                      <td><?php echo $row['Edition']; ?></td>
                      
                        <td><button class="btn btn-danger">
                          <i class="glyphicon glyphicon-trash"></i>
                          <a style="color: white;" href="manage.php?delete= <?php echo $row['ID']; ?>" onclick = "return confirm('Are you sure?');">Delete</a>
                            </button>
                        </td>
                              <?php

            $i++;
          

          if (isset($_GET['delete'])) {
            $delete_id = $_GET['delete'];

            mysqli_query($conn, "DELETE FROM add_book_records_copy WHERE ID = '$delete_id'");
            header("Location: manage.php");
            //header('Location: index.php');
          }

        
          ?>
                      <?php
                      echo'
                      <td><button class="btn btn-primary btn-sm" data-target="#editModal'.$row['ID'].'" data-toggle="modal"><i class="glyphicon glyphicon-pencil" aria-hidden="true"></i> Edit</button></td>
                      '; ?>
                    </tr>
                    <?php
                      include "editModal.php";
                      ?>
                    
               
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
  <div class="col-lg-2">
  </div>
  
<script>
  $(document).ready(function(){
    $('#myInput').keyup(function(){
      search_table($(this).val());
    });

    function search_table(value){
      $('#myTable tr').each(function(){
        var found = 'false';
        $(this).each(function(){
          if ($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0) {
            found = 'true';
          }
        });
        if (found == 'true') {
          $(this).show();
        } else {
          $(this).hide();
        }
      });
    }

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

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/jquery.scrollTo.js"></script>
  <script src="js/wow.min.js"></script>
  <!-- Custom Theme JavaScript -->
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
</body>
</html>