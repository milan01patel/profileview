<!doctype html>
<?php include('db.php'); ?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>FOR REGISTER</title>
  </head>
  <body style="background-color: lightgray; ">
    
    <?php 
     
     $con= mysqli_connect("localhost","root","","reg");

      if(isset($_POST['submit']))
       {
            
        $fname =$_POST['fname'];
        $lname =$_POST['lname'];
        $email =$_POST['email'];
        $number =$_POST['number'];
        $password =$_POST['password'];
        $address=$_POST['address'];
        $gender =$_POST['gender'];
        $hobby=implode(",",$_POST['hobby']);

        $img = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        move_uploaded_file($tmp_name, "img".$img);

        $ins = mysqli_query($con,"INSERT INTO `tab`(`fname`,`lname`,`email`,`number`,`password`,`address`,`gender`,`hobby`,`image`)
                                             VALUES('$fname','$lname','$email','$number','$password','$address','$gender','$hobby','$img')");
        if($ins)
        {
          header('Location: index.php');
        }
        else
        {
          echo "Fail";
        }

       }


     ?>

    <div class="container mt-5 py-5" >
    <div class="container-fluid p-2 bg-dark text-white text-center">
        <h1>Registration Form</h1>
        
    </div>
      <form method="POST" enctype="multipart/form-data">
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">FName</label>
        <input type="text" name="fname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">LName</label>
        <input type="text" name="lname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Number</label>
        <input type="number" name="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Address</label>
        <textarea type="text" name="address" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>

      <label for="exampleInputPassword1" class="form-label">Gender</label>
      <div class="form-check">
     <input class="form-check-input" type="radio" name="gender" value="male" id="flexRadioDefault1">
     <label class="form-check-label" for="flexRadioDefault1">
       Male
    </label>
    </div>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="gender" value="female" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Female
  </label>
</div>
<label for="exampleInputPassword1" class="form-label">Hobbies</label>
<div class="form-check">
  <input class="form-check-input" type="checkbox" name="hobby[]" value="Cricket" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
   Cricket
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="Chess"  name="hobby[]" id="flexCheckChecked" checked>
  <label class="form-check-label" for="flexCheckChecked">
    Swimming
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" name="hobby[]" value="Cricket" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
   Free Fire
  </label>
</div>
<div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Image</label>
        <input type="file" name="image" class="form-control" id="exampleInputPassword1">
</div>
       <div style="margin-left:570px;">
      <button type="submit" value="submit" name="submit" class="btn btn-primary">Submit</button>
      <a class="btn btn-primary" href="index.php" role="button">LogIn</a>
      </div>
    </form>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </body>
</html>