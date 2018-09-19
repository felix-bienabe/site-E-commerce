<?php
include_once 'Connect_db.php';
function validate_form()
{
    $len=strlen($_POST["username"]);
    if($len < 3 || $len > 10)
    {
        echo "<center><p style='color:red;'>"."Invalid Username"."</p>";
        return FALSE;
    }
    else
    {
        $connection = connect_db("localhost","root","","3306","pool_php_rush");
        $sql = $connection->prepare("SELECT * FROM users WHERE username = ?");
        $sql->execute(array($_POST["username"]));
        $usernameExist = $sql->fetch (PDO::FETCH_ASSOC);
        if($usernameExist)
        {
            echo "<center><p style='color:red;'>"."This Username already exists"."</p>";
            unset($sql);   
            unset($connection);
            return FALSE;
        }

    }
    if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) //(!pregmatch("[a-z0-9.%+-]+@[a-z0-9.-]+.[a-z]{2,3}$", $_POST["email"])) 
    {
        echo "<center><p style='color:red;'>"."Invalid email format"."</p>"; 
        return FALSE;
    }
    if($_POST["password"] != $_POST["password_confirmation"] || empty($_POST["password"]))
    {
        echo "<center><p style='color:red;'>"."Invalid password or password confirmation"."</p>"; 
        return FALSE;
    }
return TRUE;
}