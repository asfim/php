<?php


$connection = new mysqli('localhost','root','','ddd');
// $sql="SELECT name,age,cell,localtion,gender,skill,from developers";
//or
 $sql="SELECT * from developers  ORDER BY id DESC ";

$data = $connection-> query($sql);

// echo "<pre>";
// print_r($data->fetch_object());
// print_r($data->fetch_all());
// echo "</pre>";

// $dev =$data->fetch_object(); 
// foreach($dev as $d):
// while($dev = $data->fetch_object()):
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Developers List</title>
<style>
    table { border-collapse: collapse; width: 100%; }
    th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
    th { background: #f4f4f4; }
</style>
</head>
<body>

<h2>Developers List</h2>
<a href="show.php">create</a>
 
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Cell</th>
            <th>Location</th>
            <th>Gender</th>
            <th>Skill</th>
            <th>Status</th>
            <th>Trash</th>
            <th>Created At</th>
           
        </tr>
    </thead>
    <tbody>
                <?php while($dev = $data->fetch_object()): ?>

                <tr>
                <td><?php  echo $dev -> id; ?></td>
                <td><?php  echo $dev -> name; ?></td>
                <td><?php  echo $dev -> age; ?></td>
                <td><?php  echo $dev -> cell; ?></td>
                <td><?php  echo $dev -> location; ?></td>
                <td><?php  echo $dev -> gender; ?></td>
                <td><?php  echo $dev -> skill; ?></td>
                <td><?php  echo $dev -> status; ?></td>
                <td><?php  echo $dev -> trash; ?></td>
                <td><?php  echo $dev -> created_at; ?></td>
                
                </tr>
<?php endwhile; ?>
      </tbody>
</table>

</body>
</html>

