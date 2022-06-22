<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Create Record</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        <!-- Required meta tags -->
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
                            <h2>Add New Data</h2>
                        </div>
                        <form action="insertCovidDo.php" method="post">
                            <div class="form-group">
                                <label>No</label>
                                <input type="integer" name="no_id" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Negara</label>
                                <input type="text" name="negara" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Total</label>
                                <input type="text" name="total" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Meninggal</label>
                                <input type="text" name="meninggal" class="form-control">
                            </div>
                            <a href="index.php" class="btn btn-danger">Cancel</a>
                            <input type="submit" class="btn btn-primary " name="submit" value="Submit">
                        </form>
                    </div>
                </div>        
            </div>
        </div>
    </body>
</html>