<?php  

 require_once("connection2.php");  

?> 

<!DOCTYPE html> 

 <html> 

 <head> 

    <title>sergaegewgrrwgewf</title> 

    <style> 

        body 

    { 

        background-color: #BC8F8F; 

        color: #000; 

        font-size: 22px; 

 

    } 

 

    table 

    { 

        border-color: #00FFFF; 

        color: #000000; 

        font-size: 20px; 

        font-style: italic; 

 

    } 

 

    input 

    { 

        margin: 15px; 

        background-color: #00FFFF; 

        order-color: #000; 

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

     <table border="1" > 

    <?php 

        echo "<tr><td>"."id"."</td><td>"."Меблі"."</td><td>"."Ціна"."</td><td>"."Кастомні чи ні"."</td></tr>"; 

 

        $result = mysqli_query($conn, "SELECT * FROM `furniture` "); 


        while ($r1=mysqli_fetch_assoc($result))  

        { 

            echo "<tr><td>"."$r1[id]"."</td><td>"."$r1[name]"."</td><td>"."$r1[prise]₴"."</td><td>";
            if ($r1['customorno'] == 0) {
                echo "Не кастомна"."</td>";
            } else {
                echo "Кастомна"."</td>";
            };
 

            

        } 

    ?> 

</table> 

 

 

 

 

 

<form action="edit.php" method="POST">Номер меблів 

    <select name="delId"> 

        <?php 

            $result=mysqli_query($conn, "SELECT * FROM `furniture` ORDER BY `id`");  

 

            while ($r1=mysqli_fetch_assoc($result)) 

            { 

                echo"<option >"."$r1[id]"."</option>"; 

            } 

         ?> 

    </select> 

    <br> 

    іНазва меблів 

        <input type="text" name="namefurniture"/><br/> 

        ціна 

        <input type="number" name="prise" min="0" max="1000000000" value="10"/><br/> 

        Номер звмовлення 

        <select name="order_id"> 

            <?php 

                $result=mysqli_query($conn, "SELECT * FROM `orders` ORDER BY `id`");  

 

                while ($r1=mysqli_fetch_assoc($result)) 

                { 

                    echo"<option >"."$r1[id]"."</option>"; 

                } 

             ?> 

        </select><br/> 
 

        <input name="edit" type="submit" value="редагувати"/> 

 

</form> 

 

 </body> 