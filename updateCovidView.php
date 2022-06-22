<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>

<?php
$no_id = isset($_GET['no_id']) ? $_GET['no_id'] : '';
$curl= curl_init();
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
 //Pastikan sesuai dengan alamat endpoint dari REST API di ubuntu
curl_setopt($curl, CURLOPT_URL, 'http://192.168.56.69/modul1/sait_project_api/get_kasus_covid.php?no_id='.$no_id.'');
$res = curl_exec($curl);
$json = json_decode($res, true);
//var_dump($json);
?>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Update Data</h2>
                    </div>
                    <p>Please fill this form and submit to add student record to the database.</p>
                    <form action="updateCovidDo.php" method="post">
                        <div class="form-group">
                            <label>No</label>
                            <input type="integer" name="no_id" class="form-control" value="<?php echo($json["data"][0]["no_id"]); ?>">
                        </div>
                        <div class="form-group">
                            <label>Negara</label>
                            <input type="text" name="negara" class="form-control" value="<?php echo($json["data"][0]["negara"]); ?>">
                        </div>
                        <div class="form-group">
                            <label>Total</label>
                            <input type="text" name="total" class="form-control" value="<?php echo($json["data"][0]["total"]); ?>">
                        </div>
                        <div class="form-group">
                            <label>Meninggal</label>
                            <input type="text" name="meninggal" class="form-control" value="<?php echo($json["data"][0]["meninggal"]); ?>">
                        </div>
                        <a href="index.php" class="btn btn-danger">Cancel</a>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>