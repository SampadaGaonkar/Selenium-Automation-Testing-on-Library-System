<?php



include('config.php');



// check if the 'id' variable is set in URL, and check that it is valid

if (isset($_GET['email']))

{

// get id value

$email = $_GET['email'];



// delete the entry

$query = "SELECT * FROM libraryregister  WHERE email='$email' ";
$result = mysqli_query($mysqli, $query)
or die(mysqli_error($mysqli));



// redirect back to the view page
while($res = mysqli_fetch_array($result))
{
	$name = $res['name'];
	$num = $res['num'];
	$password = $res['password'];
}
				}

?>
<html>
<head>	
	<title>Update Your Data</title>
	<link rel="stylesheet" href="update.css" type="text/css">
</head>

<body>
	
	<div class="header">
		<img src = "index.jpg" width=150, height= 120>
  <h1 style="font-size:270%;">LIBRARY HOUSE</h1>
</div>
<div class="form">
	
	<form name="form1" method="post" action="update.php">
		<fieldset disable><legend >Update Account</legend>
				<p align="left">Name:
				<input type="text" name="name"  id="name" value="<?php echo $name;?>">
			
				<p align="left">Mobile:
				<input type="text" name="num" id ="num" value="<?php echo $num;?>">
			<p align="left">Password:
				<input type="text" name="password" id="password" value="<?php echo $password;?>">
			<input type="hidden" name="email" value="<?php echo $email;?>">
				<input type="submit" name="update" value="Update">
	
	
	</form></fieldset>
	
	</html>

