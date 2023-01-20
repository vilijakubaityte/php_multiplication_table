<?php

$option = $_POST['option'];
$difficulty = $_POST['difficulty'];

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./lentele.css">
</head>
<body>
<div class="wrapper">
    <button class="btn-return"><a href="pagrindinis.php">Sugrįžti į pagrindinį</a></button>
    <table class="table">

        <?php $k = 2;
        for ($i=1; $i<= $option; $i++){ ?>
        <tr>
            <?php for ($j=1; $j<= $option; $j++){ ?>
                 <?php if($j==1 || $i==1){ ?>
                <td class="header">
                    <?=$i==1 ? $j : $k?>
                </td>
                    <?php $k = $i==1 ? $k : $k+1;?>
                <?php }
                    else { ?>
                <td <?=$i==1 || $j==1 ?>>
                    <?=(rand(0, 100) < $difficulty )? $j*$i :""?>
                </td>
                <?php }?>

            <?php } ?>
        </tr>
    <?php } ?>
    </table>
</div>
</body>
</html>