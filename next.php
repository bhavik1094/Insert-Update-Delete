<?php

$id=$_REQUEST['txtid'];
$name=$_REQUEST['txtname'];
$pass=md5($_REQUEST['txtpass']);
$hiden=$_REQUEST['txthidden'];
$con=mysqli_connect('localhost','root','');
mysqli_query($con,"create database if not exists cht");
mysqli_select_db($con,"cht");

mysqli_query($con,"create table if not exists student(id varchar(20),name varchar(20),pass varchar(20))");
if($hiden=="insert")
{
    mysqli_query($con,"insert into student values('$id','$name','$pass')");
    echo "<script>alert('record inserted');</script>";
    
}


elseif($hiden=="update")
{
    mysqli_query($con,"update student set name='$name',pass='$pass' where id='$id'");
    echo "<script>alert('record updated');</script>";
    
}
 else {
       mysqli_query($con,"delete from  student where id='$id'");
    echo "<script>alert('record deleted');</script>";
} 
 ?>