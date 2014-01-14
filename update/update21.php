    <head>
        <style>
            body{
                color: whitesmoke;
                background-color: blueviolet;
                font: 35pt magneto;
            }
        </style>
    </head>
<body>
    
<?php
/*
 * Author: Nieamiah Pasley
 * Date: January 9, 2014
 * File: update_plays.php
 * Description: Updates the "plays" field of the table "Inventory" by adding 
 * 1 each time a track is played
 */


//open a connection to MySQL database
//$con: variable to hold connection value
//$playCount: keep record of song plays for database
$con=mysqli_connect("localhost", "root", "ncp001984", "website");


if (mysqli_connect_errno())
        {
            echo "Unable to connect to MySQL: " . mysqli_connect_error();
        }
               
//make query: mysqli_query function
        mysqli_query($con, "UPDATE Inventory 
              SET plays = plays+1 WHERE id=20");
                
        
        //get the total number of plays from database, store value in "$result"        
        $result= mysqli_query($con,"SELECT * FROM Inventory
             WHERE id=20");
       
//display it
        
        
while($row=mysqli_fetch_array($result))
{
   echo $row['plays']."plays";
   

}
//close connection
        mysqli_close($con);       
?>