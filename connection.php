<?php
$host = "localhost";
$username="root";
$passwd ="";
$dbname = "db_darshan";
// connection function 
$connection= mysqli_connect($host, $username, $passwd, $dbname);

$q=mysqli_query($connection, 
        "insert into tbl_student(user_name,user_gender,user_contact) values('darshan','male','123')") or die ("error". mysqli_error($connection));

if($q)
{
    echo"<script>alert('record added in database');</script>";
} 