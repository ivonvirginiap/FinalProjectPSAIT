<?php
include_once 'config.php';
$no_id = isset($_GET['no_id']) ? $_GET['no_id'] : '';
// $no_id = $_GET['no_id'];

//delete data di database local
    $sql = "DELETE FROM kasus_covid where no_id='$no_id'";
    if (mysqli_query($link, $sql)) {
        echo "<center>Record has been deleted successfully in local database!<br>";
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($link);


// delete data di OS ubuntu
//Pastikan sesuai dengan alamat endpoint dari REST API di ubuntu
$url='http://192.168.56.69/modul1/sait_project_api/get_kasus_covid.php?no_id='.$no_id.'';


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
// pastikan method nya adalah delete
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);
$result = json_decode($result, true);

curl_close($ch);

//var_dump($result);
// tampilkan return statusnya, apakah sukses atau tidak
print("<center><br>status :  {$result["status"]} "); 
print("<br>");
print("message :  {$result["message"]} "); 
 //
echo "<br>Sukses menghapus data di ubuntu server !";
echo "<br><a href=index.php> OK </a>";
 
?>