<?php
if (isset($_POST["btnsubmit"]))
{
$con=mysqli_connect("localhost","root","db_student");
if(!$con)
{
die("error connecting database");
}
$id=$_POST['txtid'];
$name=$_POST['txtname'];
$add=$_POST['txtaddress'];
$qry="insert into tbl_student(id,name,address)values('$id','$name','$add');
$result=mysqli_query($con, $qry);
if($result)
{
echo"Data inserted";
}
else
{
echo"Error inserting data";
}
mysqli_close($con);
}
?>


