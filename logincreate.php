<?php

require_once "config.php";
require_once "login.php";

$user=new loginm();
if(isset($_POST['submitlogin'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);

    $user->setname($name);
    $user->setemail($email);
    $user->setpassword($password);
    $user->insertdata();
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Document</title>
</head>
<body class="antialiased bg-gray-200 text-gray-900 font-sans">
<div class="flex items-center h-screen w-full">
    <div class="w-full bg-white rounded shadow-lg p-8 m-4 md:max-w-sm md:mx-auto">
        <span class="block w-full text-xl uppercase font-bold mb-4">Login</span>
        <form class="mb-4"  method="post">
            <div class="mb-4 md:w-full">
                <label for="name" class="block text-xs mb-1">name or Email</label>
                <input class="w-full border rounded p-2 outline-none focus:shadow-outline" type="text" name="name" id="name" placeholder="name ">
            </div>
            <div class="mb-4 md:w-full">
                <label for="email" class="block text-xs mb-1">Username or Email</label>
                <input class="w-full border rounded p-2 outline-none focus:shadow-outline" type="email" name="email" id="email" placeholder="email ">
            </div>
            <div class="mb-6 md:w-full">
                <label for="password" class="block text-xs mb-1">Password</label>
                <input class="w-full border rounded p-2 outline-none focus:shadow-outline" type="password" name="password" id="password" placeholder="Password">
            </div>
            <button type="submit" name="submitlogin" class="bg-green-500 hover:bg-green-700 text-white uppercase text-sm font-semibold px-4 py-2 rounded">Login</button>
        </form>
    </div>
</div>
</body>
</html>
