<?php 
 if($_SERVER['REQUEST_METHOD']=='POST'){
 
 //Getting values
 $id = $_POST['id'];
 
 //Creating an sql query
 $sql = "DELETE FROM mahasiswa WHERE id = '$id'";
 
 //Importing our db connection script
 require_once('dbConnect.php');
 
 //Executing query to database
 if(mysqli_query($con,$sql)){
 echo 'Delete berhasil';
 }else{
 echo 'Delete gagal';
 }
 
 //Closing the database 
 mysqli_close($con);
 }