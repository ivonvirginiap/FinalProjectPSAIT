<?php
include_once 'config.php';
if(isset($_POST['submit']))
{    
$no_id = $_POST['no_id'];
$negara = $_POST['negara'];
$total = $_POST['total'];
$meninggal = $_POST['meninggal'];


//update data ke database local
    $sql = "UPDATE kasus_covid SET no_id='$no_id', negara='$negara', total='$total', meninggal='$meninggal' where no_id='$no_id'";
    if (mysqli_query($link, $sql)) {
        echo "<center>Record has been updated successfully to local database!<br>";
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($link);


// update data di ubuntu OS, melalui REST API
//Pastikan sesuai dengan alamat endpoint dari REST API di ubuntu
$url='http://192.168.56.69/modul1/sait_project_api/get_kasus_covid.php?no_id='.$no_id.'';
$ch = curl_init($url);
//kirimkan data yang akan di update
$jsonData = array(
    'no_id' =>  $no_id,
    'negara' =>  $negara,
    'total' =>  $total,
    'meninggal' =>  $meninggal,
);

//Encode the array into JSON.
$jsonDataEncoded = json_encode($jsonData);


curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//Tell cURL that we want to send a POST request.
curl_setopt($ch, CURLOPT_POST, true);

//Attach our encoded JSON string to the POST fields.
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);

//Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 

$result = curl_exec($ch);
$result = json_decode($result, true);
curl_close($ch);

//var_dump($result);
print("<center><br>status :  {$result["status"]} "); 
print("<br>");
print("message :  {$result["message"]} "); 
echo "<br>Sukses mengupdate data di ubuntu server !";
echo "<br><a href=index.php> OK </a>";
}
?>