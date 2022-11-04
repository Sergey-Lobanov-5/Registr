<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
require('connect.php');
if(isset($_POST['username']) && isset($_POST['password'])){
    $username=$_POST['username']; 
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query="INSERT INTO users (username, email, password) VALUES('$username','$email','$password')";
    $result=mysqli_query($connection, $query);
    if($result){
        $sms="Регестрация прошла успешно";
    }
    else{
        $flsms="Ошибка";
    }
}
?>




    <div class="container">
<form class="form" method="POST">
<h2>Registr</h2>
<?php if(isset($sms)){ ?> <div class="alert alert-success" role="alert"> <?php echo $sms; ?></div> <?php }?>
<?php if(isset($flsms)){ ?> <div class="alert alert-danger" role="alert"> <?php echo $flsms; ?></div> <?php }?>
<input type="text" name="username" class="form-control"  placeholder="Username" required>
<input type="email" name="email" class="form-control"  placeholder="Email" required>
<input type="password" name="password" class="form-control"  placeholder="Password" required>
<button class="btn btn-lg btn-primary btn-block" type="submit">Registor</button>
</form>
</div>
</body>
</html>