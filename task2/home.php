<?php 
include('db.php');
include('session.php'); 
$result=mysqli_query($con,"select * from tab where email='$session_email'")or die('Error In Session');
$row=mysqli_fetch_array($result);
?>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  .card {
  box-shadow: 0 0px 10px 0 green;
  max-width: 390px;
  margin: auto;
  text-align: center;
  font-size:20px;
  font-weight:bold;
  margin-top:15px;
}

.title {
  color: grey;
  font-size: 18px;
}

/* button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 7px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
} */

a {
  text-decoration: none;
  font-size: 20px;
  color: black;
  padding: 5px;
  margin:10px;
}

a:hover {
  opacity: 0.7;
  background-color:black;
  color:white;

}
</style>

</head>
<body >


  
    
<div class="card">
    <br>
    <img src="img/team-1.jpg" style="width:70%; border-radius:50%"><br><br><br>
    FNAME: <?php echo $row['fname']; ?><br><br>
    LNAME: <?php echo $row['lname']; ?><br><br>
    EMAIL: <?php echo $row['email']; ?><br><br>
    NUMBER: <?php echo $row['number']; ?><br><br>
    ADDRESS: <?php echo $row['address']; ?><br><br>
    GENDER: <?php echo $row['gender']; ?><br><br>
    HOBBY: <?php echo $row['hobby']; ?><br><br>
    
   
  

  <!-- <h1>John Doe</h1>
  <p class="title">CEO & Founder, Example</p>
  <p>Harvard University</p>
  <a href="#"><i class="fa fa-dribbble"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <a href="#"><i class="fa fa-facebook"></i></a>
  <p><button>Contact</button></p> -->
</div><br><br>
<div class="reminder" >
      <center>
        <a href="edit.php" style="border: 4px solid gray; border-radius:10px;"> Edit Profile </a>
        <a href="logout.php" style="border: 4px solid gray; border-radius:10px;"> Log out </a>
      </center>
      
</div>


</body>
</html>