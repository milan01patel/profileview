<?php session_start(); ?>
<?php include('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>WELCOME</title>
</head>
<body style="background-color:yellow; margin-top:150px; text-align:center;">
	<div class="container-fluid p-2 bg-dark text-white text-center">
        <h1>LOGIN HERE</h1>
    </div>
	<div class="container mt-5 py-5">
      <form method="POST" enctype="multipart/form-data">
        <div class="mb-3">
        <input type="text" name="fname" class="form-control" id="exampleInputName1" aria-describedby="emailHelp" placeholder="enter fname">
      </div>
      <div class="mb-3">
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="email">
      </div>
      <button type="submit" value="submit" name="login" class="btn btn-primary">log in</button>
      <a class="btn btn-primary" href="register.php" role="button">Register</a>
      </form>
    </div>

    <?php
	if (isset($_POST['login']))
		{
			$fname = mysqli_real_escape_string($con, $_POST['fname']);
			$email = mysqli_real_escape_string($con, $_POST['email']);
			
			$query = mysqli_query($con,"SELECT * FROM tab WHERE  email='$email' and fname='$fname'");
			$row= mysqli_fetch_array($query);
			$num_row = mysqli_num_rows($query);
			if ($num_row > 0) 
				{			
					$_SESSION['email']=$row['email'];
					header('location:index.html');
				}
			else
				{
					echo 'Invalid Fname Or Email Combination';
				}
		}
  ?>
 

</body>
</html>