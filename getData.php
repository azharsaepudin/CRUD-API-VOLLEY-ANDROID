<?php 
 //Importing Database Script 
 require_once('dbConnect.php');
 
 //Creating sql query
 $sql = "SELECT * FROM mahasiswa";
 
 //getting result 
 $r = mysqli_query($con,$sql);
 
 //creating a blank array 
 $result = array();
 
 //looping through all the records fetched
 while($row = mysqli_fetch_array($r)){
 
 //Pushing name and id in the blank array created 
 array_push($result,array(
 "id"=>$row['id'],
 "npm"=>$row['npm'],
 "nama"=>$row['nama']
 ));
 }
 
 //Displaying the array in json format 
 echo json_encode(array('results'=>$result));
 
 mysqli_close($con);