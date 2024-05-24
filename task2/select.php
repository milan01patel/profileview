<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
	integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>data select</title>
</head>

<body>
<div class="container mt-5">
<table class="table">
  <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
      <th scope="col">number</th>
      <th scope="col">image</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
<tbody>
	<?php 
		$con =mysqli_connect("localhost","root","","reg");
		$no =0;
		$select=mysqli_query($con,"SELECT * FROM `tab`");
		while ($row=mysqli_fetch_array($select))
		{ 
			$no=$no+1;	
	 ?>
	 <tr>
	 	<td scope="row"><?php echo $no;?></td>	

	 	      <td><?php echo $row['fname'];?></td>
	 	      <td><?php echo $row['email'] ;?></td>
	 	      <td><?php echo $row['password'];?></td>
	 	      <td><?php echo $row['number'];?></td>
			  <td><img src="images/ <?php echo $row['image']; ?>" class="img-fluid" width="20px"></td>
     		  <a class="btn btn-success" href="edit.php?uid=<?php echo $row['uid'];?>">Edit</a>
      </td> 
	 </tr>
<?php } ?>
</tbody>
</table>
</div>

<div class="container">
	<a class="btn btn-success" href="index.php">Add Data</a>
</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</body>
</html>