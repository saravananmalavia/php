
 
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
                        <h2>Create Student Record</h2>
                    </div>
                    <p>Please fill this form and submit to add student record to the database.</p>

                    <form action="insert_logic.php"
                     method="post">
                        
                    <!--
                        https://www.w3schools.com/bootstrap/bootstrap_forms.asp
                        https://getbootstrap.com/docs/4.0/components/forms/

                    -->
                        <div class="form-group">
                            <label>Student ID</label>
                            <input type="text" name="studentid" class="form-control">
                            <span class="help-block">student id (numbers )</span>

                        </div>


                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="studentname" class="form-control">
                             <!--
                                https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_input_help-block&stacked=h
                            -->
                            <span class="help-block">enter your name here without space</span>
                        </div>
                        

                        <div class="form-group">
                            <label>Mark 1</label>
                            <input type="text" name="mark1" class="form-control">
                           
                              <small id="emailHelp" class="form-text text-muted">We'll never share your marks with anyone else.</small>
                        </div>

                        <div class="form-group">
                            <label>Mark 2</label>
                            <input type="text" name="mark2" class="form-control">
                            <span class="help-block"></span>
                        </div>

                    <div class="form-group">
                            <label>Mark 3</label>
                            <input type="text" name="mark3" class="form-control">
                            <span class="help-block"></span>
                        </div>




                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>