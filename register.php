<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<style type="text/css">
	body{
		margin: 0px;
		padding: 0px;
	}
	form {
    margin-left: 451px;
    padding-top: 144px;
    padding-bottom: 40px;
		}
		button {
    margin-left: 224px;
    padding: 5px;
}

		</style>
</head>
<body>
		<?php
		if(!empty($_POST)){
			$error=array();
			if(empty($_POST['name'])){
				$error['name']="Please Check ur name";
			}
			if(empty($_POST['password'])){
				$error['password']="Please Check ur Password";
			}
			if(empty($_POST['confirm_password'])){
				$error['confirm_password']="Please Check ur Confirm password";
			}
			if(empty($_POST['email'])){
				$error['email']="Please Check ur email";
			}
			if(empty($_POST[''])){
				$error['mobile']="Please Check ur mobile number";
			}
			if(empty($_POST['gender'])){
			$error['gender']="please fill the Gender";
			}
			if(empty($_POST['cities'])){
			$error['cities']="please select the Cities";
			}	
			if(empty($_POST['check'])){
			$error['check']="please tick Hobbies";
			}	
		}
		?>
		<?php include 'header.php'; ?>
			<form method="post">

			User name: <input type="text" name="name">
			<span style="color:red;"><?php if(!empty($error['name'])){echo $error['name'];}?></span>
			<br><br>
			Password:
			<input type="text" name="password">
			<span style="color:red;"><?php if(!empty($error['password'])){echo $error['password'];}?></span>
			
			<br><br>
			Confirm Password:
			<input type="text" name="confirm_password">
			<span style="color:red;"><?php if(!empty($error['confirm_password'])){echo $error['confirm_password'];}?></span>
			
			<br><br>
			E-mail :
			<input type="text" name="email">
			<span style="color:red;"><?php if(!empty($error['email'])){echo $error['email'];}?></span>
			<br><br>
			Mobile No.:
			<input type="text" name="mobile">
			<span style="color:red;"><?php if(!empty($error['mobile'])){echo $error['mobile'];}?></span>
			<br><br>
			Gender:
			<input type="radio" name="gender" value="female">Female		
			<input type="radio" name="gender" value="male">Male<?php if(!empty($error['gender'])){ echo $error['gender'];}?></span><br><br>
			Cities: 
			<select name="cities">
				<option value="1">Ahmedabad</option>
				<option value="2">Bihar</option>
				<option value="3">Chennai</option>
				<option value="4">Delhi</option>
				<option value="5">Kolkata</option>
				<option value="6">Pune</option>
			</select><span style="color:red;"><?php if(!empty($error['cities'])){echo $error['cities'];}?></span>
			<br><br>
			Check your Hobbies
				<input type="checkbox" name="check[]" value="1"> Browsing
				<input type="checkbox" name="check[]" value="2">Watching tv
				<input type="checkbox" name="check[]" value="3">Playing
				<input type="checkbox" name="check[]" value="4">Sleeping<br><br><span style="color:red;"><?php if(!empty($error['check'])){echo $error['check'];}?></span>
			<button name="submit">Validate</button>

</form> 

<?php if (!empty($error)) {?>
	<h1>Output:</h1>
	<p>Name:<?php echo $_POST['name'];?></p>
	<p>Password:<?php echo $_POST['password'];?></p>
	<p>Email Id:<?php echo $_POST['confirm_password'];?></p>
	<p>Gender:<?php echo $_POST['gender'];?></p>
	<p>Mobile:<?php echo $_POST['mobile'];?></p>	
	<p>Cities:<?php echo $_POST['cities'];?></p>
	<p>Hobbies:<?php print_r($_POST['check']) ;?></p>
	<?php }?>
</div>
			<?php include 'footer.php'; ?>

</body>
</html>