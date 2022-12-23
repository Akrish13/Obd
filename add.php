<?php  

 require_once("connection2.php"); 

 mysqli_query($conn, "INSERT INTO `furniture` (`id`, `name`, `customorno`, `prise`,`order_id`) VALUES (NULL, '$_POST[namefurniture]',$_POST[customorno], $_POST[prise], $_POST[order_id])"); 
 

?> 

<style> 

    body 

    { 

        background-color: #BC8F8F; 

    } 

    a 

    { 

        color: #000; 

        font-size: 40px; 

    } 

    a:hover 

    { 

        color: #ff0; 

    } 

</style> 

<p><a href="main.php"> Додано! </a></p> 