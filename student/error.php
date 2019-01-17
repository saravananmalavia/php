<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Error</title>
    <link rel="stylesheet" href="include/bootstrap.css">

    <style type="text/css">
        .wrapper{
            width: 750px;
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
                        <h1>Invalid Request</h1>
                    </div>
                    <!--
                        https://getbootstrap.com/docs/4.0/components/alerts/
                        https://www.w3schools.com/bootstrap/bootstrap_alerts.asp
                    -->
                    <div class="alert alert-danger fade in">
                        <p>Sorry, you've made an invalid request. Please <a href="index.php" class="alert-link">go back</a> and try again.</p>
                    </div>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>