
<?php  

 require_once("connection2.php"); 

?> 

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

<table border="1" > 

    <?php 

        echo "<tr><td>"."id"."</td><td>"."Продукт"."</td><td>"."Ціна"."</td><td>"."Кастомна чи ні"."</td></tr>"; 

 

        $result = mysqli_query($conn, "SELECT * FROM `furniture` "); 
 



        while ($r1=mysqli_fetch_assoc($result))  

        { 

            echo "<tr><td>"."$r1[id]"."</td><td>"."$r1[name]"."</td><td>"."$r1[prise]₴"."</td><td>";
            if ($r1['customorno'] == 0) {
                echo "Не кастомна"."</td>";
            } else {
                echo "Кастомна"."</td>";
            };

 

            $master = mysqli_query($conn, "SELECT * FROM `master` WHERE `master`.`furniture_id`=$r1[id]"); 

 

            $master = mysqli_fetch_assoc($master); 

           

        } 

    ?> 

</table> 

 

<form action="Del.php" method="POST">Номер меблів 

 

    <select name="delId"> 

        <?php 

            $result=mysqli_query($conn, "SELECT * FROM `furniture` ORDER BY `id`");  

 

            while ($r1=mysqli_fetch_assoc($result)) 

            { 

                echo"<option >"."$r1[id]"."</option>"; 

            } 

         ?> 

    </select> 

 

    <br><input name="del" type="submit" value="видалити"/> 

 

</form> 