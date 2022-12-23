
<?php  

     require_once("connection2.php"); 

     mysqli_query($conn, "DELETE FROM furniture WHERE `furniture`.`id` = $_POST[delId]"); 

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

<p><a href="main.php"> Видалено! </a></p> 