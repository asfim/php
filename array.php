$developer = [
    [
    "name" =>"jarin",
     "age" =>18,
      "skill" =>"developer",
       "loacaton" =>"mirpur",
        "gender" =>"female",
        "photo" => "https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/800px-Image_created_with_a_mobile_phone.png"
    ],
    [
        "name" =>"korim",
     "age" =>50,
      "skill" =>"developer",
       "loacaton" =>"badda",
        "gender" =>"male",
        "photo" => "https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/800px-Image_created_with_a_mobile_phone.png"

    ] ,
    [
        "name" =>"korim",
     "age" =>30,
      "skill" =>"developer",
       "loacaton" =>"mirpur",
        "gender" =>"male",
        "photo" => "https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/800px-Image_created_with_a_mobile_phone.png"

    ]           
    

];

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Team Section</title>

<style>
    * { 
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: sans-serif;
    }

    .team {
        background-color: yellow;
        padding: 40px 0;
    }

    .container {
        width: 80%;
        margin: 0 auto;
        display: flex;
   
        align-items: center;
        gap: 20px; /* space between members */
    }

    .team-member {
        background-color: white;
        border-radius: 8px;
        padding: 20px;
        text-align: center;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    .team-member img {
        width: 200px;
        height: 200px;
        border-radius: 8px;
        object-fit: cover;
    }

    .team-member h2 {
        color: tomato;
        font-size: 22px;
        margin-top: 10px;
    }

    .team-member p {
        margin: 5px 0;
        font-size: 16px;
    }
</style>
</head>
<body>

<div class="team">
    <div class="container">
        <?php foreach($developer as $d):
            if ($d['age'] >= 20 && $d['age'] <= 40):
        ?>

            
            ?>
            
        <div class="team-member">
            <img src="<?php echo $d["photo"];?>" alt="Preetom">
            <h2><?php echo $d["name"];?></h2>
            <p><?php echo $d["age"];?></p>
            <p><?php echo $d["skill"];?></p>
            <p><?php echo $d["location"];?></p>
            <p><?php echo $d["gender"];?></p>
        </div>
        <?php endif ; endforeach;?>

</div>

</body>
</html>
