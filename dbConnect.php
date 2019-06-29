<?php
 
 //Defining Constants
 define('HOST','localhost');
 define('USER','root');
 define('PASS','root');
 define('DB','CRUD');
 
 //Connecting to Database
 $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');