<?php
include_once 'Connect_db.php';
include_once 'Validate_form.php';

class User 

{
    protected $username;
    protected $pswd;
    protected $email;
    
    function __construct ($username,$pswd,$email)
    {
        $this->username=$username;
        $this->pswd=$pswd;
        $this->email=$email;
    }

    function getUsername()
    {
      return $this->username;
    }

    function getPswd()
    {
      return $this->pswd;
    }
    
    function getEmail()
    {
      return $this->email;
    }
}

if(isset($_POST["bouton_valid"]) && (validate_form()))
{ 
  $User=New User($_POST["username"],$_POST["password"],$_POST["email"]);
  $pswdh = password_hash($User->getPswd(), PASSWORD_DEFAULT);// passwd hash
  $connection = connect_db("localhost","root","170890","3306","pool_php_rush");//connection à la base SQL
  $sql = $connection->prepare("INSERT INTO users (username,password,email) VALUES (?,?,?)");//preparation de la requete
  $sql->execute(array($User->getUsername(),$pswdh,$User->getEmail()));//execution de la requete
  echo "<center><p style='color:green;'>"."Subscription of ".$User->getUserName()." completed"."</p>";
  unset($sql);   
  unset($connection);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Registration </title>
        <link rel="stylesheet" href="style.css" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="materialize.css" type="text/css" rel="stylesheet">
        <link href="materialize.min.css" type="text/css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    </head>

    <body background="imgs/hike.jpg" class="responsive-img">

        <main>
           <div id = "main-wrapper">
           <center><h2> Registration </h2>

             <form method="post" class="card-panel grey"> 
                <div id="textform"<label><b> Username :</b></label></div>
                     <input type="text" name="username" placeholder="Username">
                <div id="textform" <label><b> Email :</b></label></div>
                     <input type="text" name="email" placeholder="ex : name@domain.com">
                <div id="textform"<label><b> Password :</b></label></div>
                     <input type="password" name="password" placeholder="password">
                <div id="textform"<label><b> Password Confirmation :</b></label></div>
                     <input type="password" name="password_confirmation" placeholder="password"> 
                     <button class="btn waves-effect waves-light" type="submit" name="bouton_valid">Submit<i class="material-icons right">send</i></button>
    
             </form> 
            </div>
        </main>
    </body>
</html>