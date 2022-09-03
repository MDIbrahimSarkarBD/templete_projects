<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<link rel='stylesheet' type='text/css' href='style.css'>
	<title>CV</title>
</head>
<body>
<div id='container'>
	
<?php 
	if(isset($_SESSION['user_name'])){
		if (isset($_POST['fullname'])) {
			
		function showdata($value){
			if(isset($_POST[$value])){
				echo $_POST[$value];
			}else{
				echo "Empty";
			}
			
		}
		$path = "images/";
		$img_name  = $_FILES['picture']['name'];
		$img_tmp = $_FILES['picture']['tmp_name'];
		move_uploaded_file($img_tmp, $path . $img_name);

		// fisrt database bace create then line comment out
		//include "./query/insertCV_data.php";
					 
?>
		<div id='header'>
			<div id='left'>
				<div id='image'>
					<img src='images/<?php  if(isset($_FILES['picture'])) echo $_FILES['picture']['name']; ?>'>
				</div>
				<div>
					<h1>
						Full Name: <?php showdata("fullname") ?>
					</h1>
					<h3>
						(profession) <?php showdata("profession") ?>
					</h3>
				</div>
				<div>
					<h2>Contact</h2>
					<ul id='list'>
						<li>address :  <?php showdata("address") ?></li>
						<li>mobile :  <?php showdata("mobile") ?></li>
						<li>email :  <?php showdata("email") ?></li>
					</ul>
					<h2>Skills: </h2>
					<ul id='list'>
					<?php showdata("skills") ?>
					</ul>
					<h2>Languages</h2>
					<ul id='list'>
						<li> <?php showdata("language1") ?></li>
						<li> <?php showdata("language2") ?></li>
						<li> <?php showdata("language3") ?></li>
					</ul>
				</div>
			</div>
			<div id='right'>
				<div>
					<h2>Objective</h2>
					<p>
					<?php showdata("objective") ?>
					</p>
					<h2>Personal Information</h2>
					<table cellspacing='0' cellpadding='7'>
						<tr>
							<td><b>Father Name<b></td>
							<td><?php showdata("father") ?></td>
						</tr>
						<tr>
							<td><b>Gender<b></td>
							<td><?php showdata("gender") ?></td>

							
						</tr>
						<tr>
							<td><b>DOB<b></td>
							<td><?php showdata("dob") ?></td>
						</tr>
						<tr>
							<td><b>Nationality<b></td>
							<td><?php showdata("nationality") ?></td>
						</tr>
					</table>
					<h2>Education</h2>
					<p>
					<?php showdata("education") ?>
					</p>
					<h2>Experience</h2>
					<p>
						<?php showdata("experience") ?>
					</p>
					<h2>Certificates</h2>
					<ul>
						<li> <?php showdata("certificate1") ?></li>
						<li> <?php showdata("certificate2") ?></li>
						<li> <?php showdata("certificate3") ?></li>
					</ul>
				</div>
			</div>
		</div>
	
</div>
	<div id='footer'>
		Mobile: <?php showdata("mobile") ?> / Email: <?php showdata("email") ?>
	</div>
	<!-- CV mysqli -->
<?php }} ?>
<a style="display: block; height: vh100; margin: auto; text-align: center; padding: 20px 16px ; background: #888;" href="http://localhost/html%20code">Back Home</a>
</body>
</html>
</body>
</html>