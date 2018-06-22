<?php
$dbc=mysqli_connect('localhost','root','','project1')or die('Unable to connect');
$sql="insert into employeeinfo(emp_id,firstname,lastname,email,reg_date) values('$_POST[eid]','$_POST[fname]',
'$_POST[lname]','$_POST[email]','$_POST[reg]')";
$result=mysqli_query($dbc,$sql)or die('Error');
mysqli_close($dbc);
?>