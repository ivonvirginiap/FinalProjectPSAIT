<?php
include_once 'config.php';
if(isset($_POST['submit']))
{    
$no_id = $_POST['no_id'];
$negara = $_POST['negara'];
$total = $_POST['total'];
$meninggal = $_POST['meninggal'];

//memasukkan data ke database local
   $sql = "INSERT INTO kasus_covid (no_id, negara, total, meninggal)
   VALUES ('$no_id','$negara', '$total', '$meninggal')";
   if (mysqli_query($link, $sql)) {
      echo "<center>New record has been added successfully to local database!<br>";
   } else {
      echo "Error: " . $sql . ":-" . mysqli_error($conn);
   }
   mysqli_close($link);

// memasukkan data ke server ubuntu, lewat API
//Pastikan sesuai dengan alamat endpoint dari REST API di ubuntu
$url='http://192.168.56.69/modul1/sait_project_api/get_kasus_covid.php';
$ch = curl_init($url);
// data yang akan dikirim ke REST api, dengan format json
$jsonData = array(
   'no_id' =>  $no_id,
   'negara' =>  $negara,
   'total' =>  $total,
   'meninggal' =>  $meninggal,
);
//Encode the array into JSON.
$jsonDataEncoded = json_encode($jsonData);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//pastikan mengirim dengan method POST
curl_setopt($ch, CURLOPT_POST, true);

//Attach our encoded JSON string to the POST fields.
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);

//Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
//Execute the request
$result = curl_exec($ch);
$result = json_decode($result, true);
curl_close($ch);

//var_dump($result);
// tampilkan return statusnya, apakah sukses atau tidak
print("<center><br>status :  {$result["status"]} "); 
print("<br>");
print("message :  {$result["message"]} "); 
echo "<br>Sukses terkirim ke ubuntu server !";
echo "<br><a href=index.php> OK </a>";
}
?>