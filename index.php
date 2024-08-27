<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <h1>validate password:</h1><br>
    password: <input type="password" name="password" id=""><br>
    <input type="submit" name="check" id="" value="check"><br>
    </form>

<?php
if(isset($_POST['check'])){

    $password = $_POST['password'];
    
    if(empty($password)){
        echo"<span> password is required</span>";
    }
    
    else if(!preg_match("/^[a-zA-Z0-9]*$/",$password)){

        echo"<span> password must contain a-z ,A-Z or 0-9</span>";
    }

else if(strlen($password)<10){

    echo"<span> password length must be 10</span>";
}

else if(!preg_match("/[\W]/",$password)){
    echo"<span> password must contains special char</span>";

}
else{

    echo"<span> password is allowed</span>";
}















    }






    








?>
</body>
</html>