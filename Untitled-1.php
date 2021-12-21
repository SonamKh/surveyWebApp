<?php
echo "This Website is build by Khumukcham Sonam Devi(1815094)";
echo "<br><br>";
$number=empty($_POST["number"])?1:$_POST["number"];
 
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Multiplication Table of a Number</title>
</head>
<body>
    <form action="" method="post">
    <input type="text" name="number" value="<?=$number?>" placeholder="Enter a number">
    <button type="submit">Calculate</button>
    </form>
    <?php echo $number ; ?>
    
    <table border="1" width="200">
    <?php  for($i=0;$i<=10;$i++){ ?>
        <tr>
            <td><?=$i?></td>
            <td>x</td>
            <td><?=$number?></td>
            <td>=</td>
            <td><?=$i*$number?></td>
        </tr>
    <?php  } ?>
    </table>
</body>
</html>

