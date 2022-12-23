
<?php  

 require_once("connection2.php");  

?> 

 

 <!DOCTYPE html> 

 <html> 

 <head> 

 	<title>sergaegewgrrwgewf</title> 

 	<style> 

 		input 

 		{ 

            margin: 15px; 

            background-color: #00FFFF; 

            order-color: #000; 

            font-size: 20px; 

 		} 

 		body 

 		{ 

 			background-color: #BC8F8F; 

            color: #000; 

            font-size: 20px; 

 		} 

        select 

        { 

            margin: 15px; 

            background-color: #00FFFF; 

            order-color: #000; 

            font-size: 20px; 

        } 
        
 	</style> 

 

 </head> 

 <body> 

 	<form action="add.php" method="POST"> 

 		Назва продукту 

 		<input type="text" name="namefurniture"/><br/> 

 		Ціна 

 		<input type="number" name="prise" min="0" max="1000000000" value="10"/><br/> 

        Nomer Zamovlennya
         <select name="order_id"> 

            <?php 

                $result=mysqli_query($conn, "SELECT * FROM `orders` ORDER BY `id`");  

 

                while ($r1=mysqli_fetch_assoc($result)) 

                { 

                    echo"<option >"."$r1[id]"."</option>"; 

                } 

             ?> 

        </select><br/>  

   Кастомна чи ні 
   <select name="customorno"> 

            <?php 

                $result = mysqli_query($conn, "SELECT * FROM `furniture` "); 
 

        while ($r1=mysqli_fetch_assoc($result))  

        { 

            if ($r1['customorno'] == 0) {
                echo "Не кастомна"."</td>";
            } else {
                echo "Кастомна"."</td>";
            };

                while ($r1=mysqli_fetch_assoc($result)) 

                { 

                    echo"<option >"."$r1[customorno]"."</option>"; 

                } }

             ?> 

</select><br/> 




<input name="add" type="submit" value="Додати"/> 

 	</form> 

 </body> 

 </html> 