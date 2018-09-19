<?php
const ERROR_LOG_FILE="errors.log";
function connect_db($host,$username,$passwd,$port,$db)
{
    try 
    {
        $conn = new PDO("mysql:host=$host;dbname=$db;port=$port", $username, $passwd);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        return $conn; 
    } 
    catch (PDOexception $e)
    {
        file_put_contents(ERROR_LOG_FILE, $e->getMessage(), FILE_APPEND);//je verifie si le fichier existe
        die ("PDO ERROR : ".$e->getMessage()." storage in ".ERROR_LOG_FILE."\n");
    }
}