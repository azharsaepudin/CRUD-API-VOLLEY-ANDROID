<?php 
 if($_SERVER['REQUEST_METHOD']=='POST'){
 
 //Getting values
 $npm = $_POST['npm'];
 $nama = $_POST['nama'];
 
 
 
 //Creating an sql query
 $sql = "INSERT INTO mahasiswa (npm, nama) VALUES ('$npm','$nama')";
 
 //Importing our db connection script
 require_once('dbConnect.php');
 
 //Executing query to database
 if(mysqli_query($con,$sql)){
 echo 'Data terkirim';
 }else{
 echo 'data gagal terkirim';
 }
 
 //Closing the database 
 mysqli_close($con);
 }