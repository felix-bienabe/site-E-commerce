<?php

include_once 'Connect_db.php';

if(isset($_POST["bouton_valid"])) 
{ 
    
    if(empty($_POST["username"]) || empty($_POST["password"])) 
    {
        echo "<center><p style='color:red;'>"."Please enter username and password."."</p>";
    } 
    else
    {
        $connection = connect_db("localhost","root","","3306","pool_php_rush");
        $sql = $connection->prepare("SELECT * FROM users WHERE username = ?");
        $sql->execute(array($_POST["username"]));
        $usernameExist = $sql->fetch (PDO::FETCH_ASSOC);
        if($usernameExist != NULL)
        {
            if(password_verify($_POST["password"], $usernameExist["password"]))    
            {
                session_start();
                $_SESSION["username"] = $_POST["username"];//save the username to the sesssion   
                //var_dump($username);   
                header("location: index1.php");
                unset($sql);   
                unset($connection);
            }
            else 
                echo "<center><p style='color:red;'>"."Incorrect Password"."</p>";
        }
        else 
            echo "<center><p style='color:red;'>"."You don't have an account with us. Please register"."</p>";    
    }  
}    
?>

<!DOCTYPE html>
<html>

<head>
<title> Login Page  </title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="materialize.css" type="text/css" rel="stylesheet">
    <link href="materialize.min.css" type="text/css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body background="imgs/waterfall.jpg" class="responsive-img">

    <main>

    <div id = "main-wrapper">
        <center><h2> Login </h2>
        
        <form action="login.php" method="post" class="card-panel grey">
            <div id="textform" <label><b> Username :</b></label></div>
                 <input type="text" name="username" class="inputvalues" placeholder="username"/>
            <div id="textform" <label><b> Password :</b></label></div>
                 <input type="password" name="password" class="inputvalues" placeholder="password"/>
                 <button class="btn waves-effect waves-light z-depth-4" type="submit" name="bouton_valid">Submit<i class="material-icons right">send</i></button>
                 <a href="Inscription.php" class="waves-effect waves-light btn"><input type="button" id="register_btn" value="Register"/></a>
    
        </center>
        </form>


        
    

    </main>
</body>
</hmtl>