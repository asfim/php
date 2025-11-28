<?php
$connection = new mysqli('localhost','root','','ddd');

if(isset($_POST['developer'])){
$name=$_POST['name'];
$age=$_POST['age'];
$cell=$_POST['cell'];
$location =$_POST['location'];
$gender =$_POST['gender'];
$skill=$_POST['skill'];

$sql = "INSERT INTO developers (name,age,cell,location,gender,skill) 
VALUES('$name','$age','$cell','$location','$gender','$skill')";
$connection->query($sql);

}



?>




<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Developer Form</title>
</head>
<body>
<div class="team-form">


<a href="devs.php">create</a>
    <form action="" method="POST">
        <input type="text" name="name" placeholder="Name" required>
        <input type="text" name="age" placeholder="Age" required>
        <input type="text" name="cell" placeholder="Cell" required>

        <select name="location" required>
            <option value="">_select_</option>
            <option value="mirpur">Mirpur</option>
            <option value="uttara">Uttara</option>
            <option value="gulshan">Gulshan</option>
            <option value="banani">Banani</option>
        </select>

        <div>
            <label><input type="radio" name="gender" value="male" required> Male</label>
            <label><input type="radio" name="gender" value="female"> Female</label>
        </div>

        <select name="skill" required>
            <option value="">_select_</option>
            <option value="php">PHP</option>
            <option value="java">Java</option>
            <option value="python">Python</option>
        </select>

        <input type="submit" name="developer" value="Create">
    </form>
</div>
</body>
</html>