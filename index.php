<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Even / Odd Counter</title>
    </head>
    <body>
        <form method = "GET">
            <label> Enter the number :</label>
            <input type ="number"  name = "number"  required/> 
            <input type = "submit" /> 
        </form>
        
        <?php
            
            if (isset($_GET["number"]))
            {
                $number = $_GET["number"];
                if ($number < 0)
                    $number *= -1 ;
                counter_value($number);
            }

            function counter_value($number)
            {
                $even_counter= 0;
                $odd_counter = 0;
                
                while ($number)
                {
                    if ($number % 2 == 0)
                        $even_counter ++;
                    else 
                        $odd_counter ++;
                    $number --;
                }
                echo "<p> Even numbers count:  $even_counter </P>";
                echo "<p> Odd  numbers count:  $odd_counter </P>";
            }
        ?>
    </body>
</html>
