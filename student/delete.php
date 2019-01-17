<?php
// Process delete operation after confirmation
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Include config file
    require_once 'connection.php';

     $studentid = trim($_POST["id"]);
    
    // Prepare a delete statement
    $sql = "delete from student where studentid= $studentid";
    
    if($connect->query($sql) === TRUE) {

            //on success of query execution redirect to the landing page index.php

            header('Location: index.php');

            }
            else
            {

            // on Error taken to the error page

                header('Location: error.php');
            }
}
   
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
                        <h1>Delete Student Record</h1>
                    </div>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="alert alert-danger fade in">
                            
                            <input type="hidden" name="id" value='<?php echo trim($_GET["id"]); ?>'/>
                            <p>Are you sure you want to delete this record?</p><br>
                            <p>
                                <input type="submit" value="Yes" class="btn btn-danger">
                                <a href="index.php" class="btn btn-default">No</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>