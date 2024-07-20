<?php
require_once "data.php";
require_once "config.php";
session_start();
class loginm
{
    private $name;
    private $email;
    private $password;
    public  $id;

    public function setname($name)
    {
        $this->name=$name;
    }

    public function setemail($email)
    {
        $this->email=$email;
    }

    public function setpassword($password)
    {
        $this->password=$password;
    }

    public function insertdata()
    {
        $sql="INSERT INTO users(name,email,password) VALUES (:name,:email,:password)";
      $w=DB::papaerone($sql);
      $w->bindParam(':name',$this->name);
        $w->bindParam(':email',$this->email);
        $w->bindParam(':password',$this->password);
        $w->execute();
    }

    public function checklogin()
    {

        $sql = "SELECT * FROM users WHERE email='$this->email' AND password='$this->password' ";
        $check = DB::papaerone($sql);
        $check->execute();
        if($check->fetchAll()){
            $_SESSION['login'] = $this->email;

            header('Location: userpanel.php');
        } else {
            echo "no";
        }
    }

    public function up($id)
    {
        $sql="UPDATE users SET email=:email,password=:password WHERE email=:id";
        $er=DB::papaerone($sql);
        $er->bindParam(':email',$this->email);
        $er->bindParam(':password',$this->password);
        $er->bindParam(':id',$id);
        $er->execute();


     }




}
?>