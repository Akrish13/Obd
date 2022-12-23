
<?php  

 require_once("connection2.php"); 

 mysqli_query($conn, "UPDATE `furniture` SET `name` = '$_POST[namefurniture]', `prise` = $_POST[prise], `order_id` = $_POST[order_id] WHERE `furniture`.`id` = $_POST[delId];"); 

?> 

<style> 

    body 

    { 

        background-color: BC8F8F; 

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

<p><a href="main.php"> Відредаговано! </a></p>