<?php
session_start();
?>
<html>
<head>
<title><h1> CabArena </h1>
</title>
</head>
<style type="text/css">
body {
height:100%;width:100%;
background-image:url(cb.jpg);
background-repeat:no-repeat; 
   background-size:cover; }
p{margin-left:50px;margin-right:50px;margin-top:100px;font-size:40pt;}
.footer {
    position: absolute;
    bottom: 0;
    height: 20px;
    
    width: 100%;
  }
</style>
<body>
<h1 style="text-align:center;font-size:500%;"><i><font color="yellow">CabArena</font></i></h1>
<form method="post">
<table>
<th="left"><h2><font color="yellow">Login</font></h2></th>
<tr>
<td><h3><font color="yellow">email_id</font></h3></td>
<td> <input type ="text" name="email_id" size="40"/>
</td>
</tr>
<tr>
<td>
<h3><font color="yellow">password</font></h3>
</td>
<td>
<input type="password" name="password" size="40"/>
</td>
</tr>
<tr>
<td><input type="submit" name="sub" value="login"></td>
</tr>
</table>
</form>
<div class=footer><font color="yellow">&copy; Copyright 2016 Himanshu Mishra</font></div>
</body>
</html>
<?php
mysql_connect("localhost","root","");
mysql_select_db("cartracking");
if(isset($_POST['sub']))
{
$email=$_POST['email_id'];
$pass=$_POST['password'];
$check="select * from customerlogin where email_id='$email' AND password='$pass'";
$run=mysql_query($check);
if(mysql_num_rows($run)>0)
{
$_SESSION['email_id']=$email;
echo "<script>window.open('mapf.html','_self')</script>";
}
else
{
echo "<script> alert('password or email_id is incorrect')</script>";
}
}
?>
