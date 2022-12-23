<!DOCTYPE html> 

<html> 

<head> 

    <?php  

        $servername = "localhost"; 

        $database = "furniture_salon"; 

        $username = "root"; 

        $password = ""; 

 

 

        $conn = mysqli_connect("$servername", $username, $password, $database); 

 

        if (!$conn)  

        { 

            die("Connection failed: " . mysqli_connect_error()); 

        }  

 

    ?> 

 

<title>aslkgowihf</title> 

 

    <style> 

        body 

        { 

            background-color:#BC8F8F; 

        } 

 

        .container 

        { 

 

            display: flex; 

            flex-direction: row; 

            justify-content: flex-start; 

 

            margin-left: 10%; 

            margin-top: 10px; 

            padding-top: 10px; 

 

        } 

 

        #con1 

        { 

            width: auto; 

            height: auto; 

            font-style: italic; 

            align-self: center; 

            margin-right: 10%; 

 

        } 

        #con2 

        { 

            width: auto; 

            height: auto; 

            font-style: italic; 

 

 

        } 

        table 

        { 

            border-color: #00FFFF; 

            color: #000000; 

            font-size: 20px; 

        } 

 

        input 

        { 

            background-color: #00FFFF; 

            width: 100%; 

            font-size: 20px; 

        } 
        input:hover 
        {
            background-color: #FF1493;
        }

    </style> 

</head> 

    <body> 

        <div class="container"> 

            <div id="con1"> 

                <table border="1"> 

                    <?php 

                        echo "<tr><td>"."Iмя"."</td><td>"."Nомер Tелефону"."</td><td>"."Ціна замовлення"."</td></tr>"; 

 

                        $result = mysqli_query($conn, "SELECT * FROM `client`; "); 

 

                        while ($r1=mysqli_fetch_assoc($result))  

                        { 

                            $suma=mysqli_query($conn,"SELECT SUM(`furniture`.`prise`) FROM `furniture` WHERE `furniture`.`order_id` IN (SELECT `orders`.`id`FROM `orders` WHERE `orders`.`client_id`=$r1[id]);"); 

                            $sum=mysqli_fetch_array($suma)[0]; 

                            if($sum==NULL) 

                            { 

                                $sum=0; 

                            } 

 

                            echo "<tr><td>"."$r1[name]"."</td><td>"."+$r1[mobilenumber]"."</td><td>".$sum."</td></tr>";  

                        } 

 

                    ?> 

                </table> 

            </div> 

 

            <div id="con2"> 

                <table border="1"> 

                <?php 

                    echo "<tr><td>"."Продукт"."</td><td>"."Ціна"."</td><td>"."Кастомна чи ні"."</td></tr>"; 

 

                    $result = mysqli_query($conn, "SELECT * FROM `furniture` "); 

                  

 

                    while ($r1=mysqli_fetch_assoc($result))  

                    { 
                        

                        echo "<tr><td>"."$r1[name]"."</td><td>"."$r1[prise]₴"."</td><td>"; 
                        if ($r1['customorno'] == 0) {
                echo "Не кастомна"."</td>";
            } else {
                echo "Кастомна"."</td>";
            }; 
             $master = mysqli_query($conn, "SELECT * FROM `master` WHERE `master`.`furniture_id`=$r1[id]"); 

 

                  
 

                        $master = mysqli_fetch_assoc($master); 

                       

                    } 

                ?> 

                    <tr> 

                        <td> 

                            <form action="dodavanya.php"> 

                                <input name="baton" type="submit" value="Додати"/> 

                            </form> 

                        </td> 

                        <td> 

                            <form action="vidalennya.php"> 

                                <input type="submit" name="baton2"value="Видалити"/> 

                            </form> 

                        </td> 

                        <td> 

                            <form action="redact.php"> 

                                <input name="baton" type="submit" value="Змінити"/> 

                            </form> 

                        </td> 

                    </tr> 

                </table> 

            </div> 

        </div> 

    </body> 

</html> 