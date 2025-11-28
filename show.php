<?php
$connection = new mysqli('localhost','root','','ddd');

if(isset($_POST['developer'])){
$name      =$_POST['name'];
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
    <title>Document</title>
</head>
<body>
    <div class="team-form">
        <form action="" method="POST">
            <input type="text" name="name"placeholder="Name">
             <input type="text"name="age" placeholder="Age">
              <input type="text" name="cell" placeholder="Cell">
               <select name="location" id="">
                <option value="">_select_</option>
                <option value="Mirpur">Mirpur</option>
                <option value="Uttora">Uttora</option>
                <option value="Gulshan">Gulshan</option>
                 <option value="Banani">Banani</option>
               
               </select>
                <div>
                    <label>
                        <input type="radio"name="gender" value="Male"> Male
                    </label>
                    <label>
                        <input type="radio"name="gender" value="Female"> Female
                    </label>
                </div>
                   <select name="skill" id="">
                <option value="">_select_</option>
                <option value="PHP">PHP</option>
                <option value="java">java</option>
                <option value="Python">Python</option>
             
               
               </select>
               <input type="submit" name="developer" value="create">
        </form>

    </div>
</body>
</html>