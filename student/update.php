<?php 
// to establish the connection the database server 

require_once 'connection.php';

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Concept Solutions</title>
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
                        <h2>Update Student Record</h2>
                    </div>
                    <p>Please fill this form with updated details and submit to update student record to the database.</p>
                    <form action="update_logic.php" method="post">


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
                        
                        <div class="form-group">
                            <label>Student ID</label>
                            <input type="text" name="studentid" class="form-control" value='<?php echo $row['studentid']  ?>' readonly='readonly'>
                            <span class="help-block"></span>
                        </div>


                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="studentname" class="form-control" value='<?php echo $row['name']  ?>'>
                            <span class="help-block" ></span>
                        </div>
                        

                        <div class="form-group">
                            <label>Mark 1</label>
                            <input type="text" name="mark1" class="form-control" value='<?php echo $row['mark1']  ?>'>
                            <span class="help-block"></span>
                        </div>

                        <div class="form-group">
                            <label>Mark 2</label>
                            <input type="text" name="mark2" class="form-control" value='<?php echo $row['mark2']  ?>'>
                            <span class="help-block"></span>
                        </div>

                    <div class="form-group">
                            <label>Mark 3</label>
                            <input type="text" name="mark3" class="form-control" value='<?php echo $row['mark3']  ?>'>
                            <span class="help-block"></span>
                        </div>




                        <input type="submit" class="btn btn-primary" value="Submit">

                        <a href="index.php" class="btn btn-default">Cancel</a>

                         <?php
                         }
                              
                         }
                         else 
                         {

                          echo  "<p class='lead'><em>No records were found.</em></p>";
                          echo "<p><a href='index.php' class='btn btn-primary'>Back</a></p>";
                         }
                         ?>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>