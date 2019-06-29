<?php 
 if($_SERVER['REQUEST_METHOD']=='POST'){
 
 //Getting values
 $id = $_POST['id'];
 $npm = $_POST['npm'];
 $nama = $_POST['nama'];
 
 //Creating an sql query
 $sql = "UPDATE mahasiswa SET npm = '$npm', nama = '$nama' WHERE id = '$id'";
 
 //Importing our db connection script
 require_once('dbConnect.php');
 
 //Executing query to database
 if(mysqli_query($con,$sql)){
 echo 'Update berhasil';
 }else{
 echo 'Update gagal';
 }
 
 //Closing the database 
 mysqli_close($con);
 }