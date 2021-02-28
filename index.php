<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lentele.css">
    <title>Multiplication table</title>
</head>
<body>

    <!-- <tr>
        <td>0</td>
        <td>1</td>
        <td>2</td>
        <td>3</td>
        <td>4</td>    SU HTML paprasta lentele
        <td>5</td>
        <td>6</td>
        <td>7</td>
        <td>8</td>
        <td>9</td>
    </tr> -->
    <table border="1">

<?php

    // $i = 0;

    // while($i<100) {
    //     if($i%10 == 0) {
    //         echo "<tr>".PHP_EOL;
   //                                             PHP paprasta lentele
    //     }
    //     echo "<td>".$i."</td>".PHP_EOL;
    //     $i++;
    //     if($i%10==0) {
    //         echo "</tr>".PHP_EOL;
    //     }

    // }
        
        for ($a = 1; $a < 11; $a++) {
            echo "<tr>";
            
                for($b=1; $b<11; $b++)
                {
                ($a==$b) ? $bg = "gray" : $bg = "white";
                echo "<td class='$bg'><a href='#' title='$a x $b = ". $a * $b . " ' >" . $a*$b . " </a></td>";                }
                echo "</tr>";
            }
            ?>
    </table>
        



</body>
</html>