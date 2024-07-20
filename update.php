
<?php
require_once "login.php";
require_once "data.php";
$w=new loginm();
if(isset($_POST['submitupdate'])){
    try {

        $id=$_GET['upt'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $w->setemail($email);
        $w->setpassword($password);
        $w->up($id);
    }catch (PDOException $r){
        echo $r->getMessage();
    }


}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form  method="post">
    <input type="text" name="email" placeholder="email">
    <input type="text" name="password" placeholder="password">
    <button type="submit" name="submitupdate">update</button>
</form>
</body>
</html>