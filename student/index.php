<?php 
// to iestabilish the connection the database server 

require_once 'connection.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Concept Solutions</title>
   <!-- https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/ -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="include/jquery.min.js"></script>
    <script src=include/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;   
        }
    </style>
    
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>

</head>
<body>
    <div class="wrapper">

      


        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                 
                    <div class="page-header clearfix">

                     

                        <h2 class="pull-right">Student Mark Details</h2>

                       

                        <a href="create.php" class="btn btn-success pull-left">Add New Student</a>
                    </div>
                   
                    <table class='table table-bordered table-striped'>
                              <thead>
                                   <tr>
                                        <th>Student ID</th>
                                       <th>Name</th>
                                       <th>Mark 1</th>
                                       <th>Mark 2</th>
                                       <th>Mark 3</th>
                                       <th>Total</th>
                                       <th>Result</th>
                                       <th></th>
                                   </tr>
                                </thead>
                             <tbody>

<?php
      // query to select all the data from the student table
      $sql = "select * from student order by studentid desc";

      // execute the query

      $result = $connect->query($sql);

      // $result->num_rows returns the no. of records return 

      if($result->num_rows > 0) {

        // $result->fetch_assoc() return each records in the 
        // $result as associative array ($row)

        while($row = $result->fetch_assoc()) {
          
          ?>
                     <tr>
                              <td><?php echo $row['studentid']  ?></td>
                                      <td><?php echo $row['name']  ?></td>
                                      <td><?php echo $row['mark1']  ?></td>
                                      <td><?php echo $row['mark2']  ?></td>
                                       <td><?php echo $row['mark3']  ?></td>
                                       <td><?php echo $row['total']  ?></td>
                                       <td><?php echo $row['result']  ?></td>
                                     <td>
             
               <a href="read.php?id=<?php echo $row['studentid']  ?>" title='View Record' data-toggle='tooltip'>
                <span class='glyphicon glyphicon-eye-open'></span>
               </a>

                <a href="update.php?id=<?php echo $row['studentid']  ?>" title='Update Record' data-toggle='tooltip'>
                <span class='glyphicon glyphicon-pencil'></span>
                </a>

                <a href="delete.php?id=<?php echo $row['studentid']  ?>" title='Delete Record' data-toggle='tooltip'>
                <span class='glyphicon glyphicon-trash'></span>
                </a>
                  

                                      </td>
                                  </tr>

                               <?php
                                        }
                              ?>



                              </tbody>                           
                          </table>

                         <?php
                         }
                         else 
                         {

                          echo  "<p class='lead'><em>No records were found.</em></p>";
                         }
                         ?>
                 
                </div>
            </div>        
        </div>
    </div>
</body>
</html>