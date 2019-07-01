<?php
$conn=mysql_connect("localhost","root");
if(!$conn)
{}
else
{}
$selection=mysql_select_db('university',$conn);
$id=$_POST['stud_id'];
$names=$_POST['stud_name'];

$qur="Insert into student(stud_id,stud_name)values('$id','$names')";
if(!mysql_query($qur,$conn))
{
echo mysql_error();
}
echo "Record Inserted";
?>