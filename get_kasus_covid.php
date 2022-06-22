<?php
// include('config.php');

// $sql = "SELECT * FROM kasus_covid";
// $result = mysqli_query($link, $sql);

// $array = array();
// if (mysqli_num_rows($result) > 0) {
    
//     while($row = mysqli_fetch_array($result)) {
//         $data = array(
//             'no' => $row['no'],
//             'negara' => $row['negara'],
//             'total' => $row['total'],
//             'meninggal' => $row['meinggal'],
//         );
//         array_push($array, $data);
//     }
// }

// echo json_encode($array);
?>

<?php
require_once "config.php";
$request_method=$_SERVER["REQUEST_METHOD"];
switch ($request_method) {
   case 'GET':
         if(!empty($_GET["no_id"]))
         {
            $no_id=intval($_GET["no_id"]);
            get_covid($no_id);
         }
         else
         {
            get_covids();
         }
         break;
   case 'POST':
         if(!empty($_GET["no_id"]))
         {
            $no_id=intval($_GET["no_id"]);
            update_covid($no_id);
         }
         else
         {
            insert_covid();
         }     
         break; 
   case 'DELETE':
          $no_id=intval($_GET["no_id"]);
            delete_covid($no_id);
            break;
   default:
      // Invalid Request Method
         header("HTTP/1.0 405 Method Not Allowed");
         break;
      break;
 }



   function get_covids()
   {
      global $link;
      $query="SELECT * FROM kasus_covid";
      $data=array();
      $result=$link->query($query);
      while($row=mysqli_fetch_object($result))
      {
         $data[]=$row;
      }
      $response=array(
                     'status' => 1,
                     'message' =>'Get List Covid Successfully.',
                     'data' => $data
                  );
      header('Content-Type: application/json');
      echo json_encode($response);
   }
 
   function get_covid($no_id=0)
   {
      global $link;
      $query="SELECT * FROM kasus_covid";
      if($no_id != 0)
      {
         $query.=" WHERE no_id=".$no_id." LIMIT 1";
      }
      $data=array();
      $result=$link->query($query);
      while($row=mysqli_fetch_object($result))
      {
         $data[]=$row;
      }
      $response=array(
                     'status' => 1,
                     'message' =>'Get Covid Successfully.',
                     'data' => $data
                  );
      header('Content-Type: application/json');
      echo json_encode($response);
        
   }
 
   function insert_covid()
      {
         global $link;
         if(!empty($_POST["no_id"])){
            $data=$_POST;
         }else{
            $data = json_decode(file_get_contents('php://input'), true);
         }

         $arrcheckpost = array('no_id' => '', 'negara' => '','total' => '', 'meninggal' => '');
         $hitung = count(array_intersect_key($data, $arrcheckpost));
         if($hitung == count($arrcheckpost)){
          
               $result = mysqli_query($link, "INSERT INTO kasus_covid SET
               no_id = '$data[no_id]',
               negara = '$data[negara]',
               total = '$data[total]',
               meninggal = '$data[meninggal]'");                
               if($result)
               {
                  $response=array(
                     'status' => 1,
                     'message' =>'Covid Added Successfully.'
                  );
               }
               else
               {
                  $response=array(
                     'status' => 0,
                     'message' =>'Covid Addition Failed.'
                  );
               }
         }else{
            $response=array(
                     'status' => 0,
                     'message' =>'Parameter Do Not Match'
                  );
         }
         header('Content-Type: application/json');
         echo json_encode($response);
      }
 
   function update_covid($no_id)
      {
         global $link;
         if(!empty($_POST["no_id"])){
            $data=$_POST;
         }else{
            $data = json_decode(file_get_contents('php://input'), true);
         }

         $arrcheckpost = array('no_id' => '', 'negara' => '','total' => '', 'meninggal' => '');
         $hitung = count(array_intersect_key($data, $arrcheckpost));
         if($hitung == count($arrcheckpost)){
          
               $result = mysqli_query($link, "UPDATE kasus_covid SET
               no_id = '$data[no_id]',
               negara = '$data[negara]',
               total = '$data[total]',
               meninggal = '$data[meninggal]'
              WHERE no_id ='$no_id'");
          
            if($result)
            {
               $response=array(
                  'status' => 1,
                  'message' =>'Covid Updated Successfully.'
               );
            }
            else
            {
               $response=array(
                  'status' => 0,
                  'message' =>'Covid Updation Failed.'
               );
            }
         }else{
            $response=array(
                     'status' => 0,
                     'message' =>'Parameter Do Not Match'
                  );
         }
         header('Content-Type: application/json');
         echo json_encode($response);
      }
 
   function delete_covid($no_id)
   {
      global $link;
      $query="DELETE FROM kasus_covid WHERE no_id=".$no_id;
      if(mysqli_query($link, $query))
      {
         $response=array(
            'status' => 1,
            'message' =>'Covid Deleted Successfully.'
         );
      }
      else
      {
         $response=array(
            'status' => 0,
            'message' =>'Covid Deletion Failed.'
         );
      }
      header('Content-Type: application/json');
      echo json_encode($response);
   }

 
?> 
