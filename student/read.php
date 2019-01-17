<?php 
// to establish the connection the database server 

require_once 'connection.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Concept Soutions</title>
   <link rel="stylesheet" href="include/bootstrap.css">
 
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>View Student Record</h1>
                    </div>

                        <?php 

                        // to retrive the id from the query string
                        //  query string http://localhost/student/read.php?id=101

                    $studentid = $_GET['id'];
                   
                   // query to retrive partcular record from the table student

                     $sql = "select * from student where studentid=$studentid";

                       // execute the query
                    $result = $connect->query($sql);

                        // $result->num_rows returns the no. of records return 

                          if($result->num_rows > 0) {
                                 // $result->fetch_assoc() return each records in the 
                                 // $result as associative array ($row)
                            if($row = $result->fetch_assoc()) {
         
                            ?>
                <div class="col-lg-4 col-lg-offset-4">
                    <div class="form-group">
                            <label>Student ID </label>
                         : <?php echo $row['studentid']  ?>
                        </div>


                        <div class="form-group">
                            <label>Name</label>
                              : <?php echo $row['name']  ?>
                        </div>
                        

                        <div class="form-group">
                            <label>Mark 1</label>
                         : <?php echo $row['mark1']  ?>
                        </div>

                        <div class="form-group">
                            <label>Mark 2</label>
                           : <?php echo $row['mark2']  ?>
                        </div>

                    <div class="form-group">
                            <label>Mark 3</label>
                            : <?php echo $row['mark3']  ?>
                        </div>

                    <div class="form-group">
                            <label>Total </label>
                              : <?php echo $row['total']  ?>
                        </div>
                    <div class="form-group">
                            <label>Result </label>
                            : <?php echo $row['result']  ?>
                        </div>

                  
                            <?php
                         }
                              
                         }
                         else 
                         {

                          echo  "<p class='lead'><em>No records were found.</em></p>";
                         }
                         ?>


                    <p><a href="index.php" class="btn btn-primary">Back</a></p>
                      </div>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>