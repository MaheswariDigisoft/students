<?php

include("connect.php");
 if(isset($_POST['submit'])){
$user= $_POST['name'];
$password= $_POST['password'];
$email= $_POST['email'];
//echo "$password";
$que="INSERT INTO taskreg(name,password,email)VALUES('$user','$password','$email')";
//echo $que;
$rel=mysqli_query($conn,$que);
if($rel){
	//echo "sucess";
	header("location:login.php");
	
}
else{
	echo mysqli_error($conn);
}

}


?>
<h1  align="center">login Form</h1>
<table align="center">
<form method="post" action="#">
<tr><th>
USER NAME:</th><td><input type="text" name="name" required/> </td></tr>
<th>PASSWORD:</th><td><input type="password" name="password" required/> </td></tr>
<th>EMAIL:</th><td><input type="email" name="email" required/> </td></tr>
<tr align="center"><td><input type="submit" name="submit" value="Register here"/></td></tr>

</table>
</form>