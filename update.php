<?php

 include 'conn.php';

 if(isset($_POST['done'])){

 $id = $_GET['id'];
 $name = $_POST['name'];
 $email = $_POST['email'];
 $day = $_POST['day'];
 $gender = $_POST['gender'];
 $city = $_POST['city'];
 $state = $_POST['state'];

 $q = " update crudtable set id=$id, name='$name', password='$password' where id=$id  ";

 $query = mysqli_query($con,$q);

 }

?>

<!DOCTYPE html>
<html>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Update Operation </h1>

 <form method="post" action="./insert.php">
name : <input type=text name="name"required ><br><br>
email :<input type=text name="email"required ><br><br>
<label for="birthday" >Birthday:</label>
<input type="date" birthday="birthday" name="day" ></br>
<br>
  <br> gender :</br>
     <input type="radio" name="gender" value="male" checked> Male<br>
     <input type="radio" name="gender" value="female"> Female<br>
     <input type="radio" name="gender" value="other"> Other<br>
 </br>
  <br>city : <input type= text name="city"required ><br><br>
  state : <input type= text name="state"required><br><br>
<input type="submit" name="submit" value="save">

 </form>
 </div>
</body>
</html>