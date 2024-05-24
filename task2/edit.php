<?php 
include('db.php');
include('session.php');
 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>edit profile</title>
  </head>
  <body>
    <?php 


      $select=mysqli_query($con,"SELECT * FROM `tab` WHERE email='$session_email'");
      $row=mysqli_fetch_array($select);

    ?>
    <?php 

    if(isset(
     
       $_POST['submit'])){  
        $fname =$_POST['fname'];
        $lname =$_POST['lname'];
        $email =$_POST['email'];
        $number =$_POST['number'];
        $password =$_POST['password'];
        $img = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        move_uploaded_file($tmp_name,"images/".$img);

        $edits = mysqli_query($con,"UPDATE `tab` SET `fname`='$fname',`lname`='$lname',`email`='$email',`number`='$number',`password`='$password',`image`='$img' WHERE email = '$session_email'");
    //  $ins = mysqli_query($con,"INSERT INTO `tab`(`image`)VALUES('$img')");
     if($edits){
           header("location:home.php"); 
     }else{
      echo 'fail';
     }
    }
    ?>

    <div class="container py-5 mt-5 border">

      
            <form method="POST" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">firstname</label>
          <input type="text" class="form-control" value="<?php echo $row['fname'];?>" name="fname" >
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">lastname</label>
          <input type="text" class="form-control" value="<?php echo $row['lname'];?>" name="lname" >
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <input type="email" class="form-control" value="<?php echo $row['email'];?>" name="email" >
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Mobile</label>
          <input type="number" class="form-control" value="<?php echo $row['number'];?>" name="number" >
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" value="<?php echo $row['password'];?>" name="password" >
        </div>

        <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Image</label>
        <input type="file" name="image" class="form-control" id="exampleInputPassword1">
      </div>
        
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </form>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

   
  </body>
</html>