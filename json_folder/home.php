<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
    
    </body>
    <div style="border:2px solid red;">

    <?php
    
    $user1 ='{"first_name":"Babatunde",
        "lastname" : "Ogundele",
        "skills":["HTML","CSS","JS","PHP"]
        }';

        $user_array_version =json_decode($user1);

        echo"my skills are ". $user_array_version->skills[0]. " ,".$user_array_version->skills[1]. " ,". $user_array_version->skills[2];

        echo "<pre>";
            print_r($user_array_version);
        echo "</pre>";
    
    ?>


    <script>

    var user =
     '{"firstname":"Babatunde","lastname":"Ogundele","skills":["HTML","CSS","JS","PHP"]}'
    var newuser =JSON.parse(user);
    //Dot notation
    alert(newuser.firstname);
    //bracket notation
    alert(newuser['lastname']);
    console.log(newuser);

    alert(newuser['skills'][0]);
    </script>
    </div>
</html>