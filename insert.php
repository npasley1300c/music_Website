<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <style>
            body{
                background-color: #9933ff;
                color: whitesmoke;
                font: 35pt magneto;
                text-align: center;
            }
            form{
                text-align: center;
            }
            
        </style>


<?php
#Nieamiah Pasley
#January 8, 2014
#insert.php
#takes form data for information about clients and inserts it into MySQL database


     //create connection
        $con= mysqli_connect("localhost", "root", "ncp001984","website");
        if (mysqli_connect_errno())
        {
            echo "Unable to connect to MySQL: " . mysqli_connect_error();
        }
        $sql="INSERT INTO Clients(client, email, availability, requests)
              VALUES
              ('$_POST[client]','$_POST[email]','$_POST[availability]','$_POST[requests]')";
        
        if(!mysqli_query($con, $sql))
        {
            die('Error: ' .mysql_error($con));
        }
        echo "Thank You! I will be contacting you shortly.";
        //close connection
        mysqli_close($con);
?>
