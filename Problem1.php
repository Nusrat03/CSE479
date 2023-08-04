<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>problem1</title>
</head>
<body>
<?php
    $sum=0;
    for($i=1000; $i<=3000; $i++)
    {
        $cnt=0;
        for($j=2; $j<=$i-1; $j++)
        {
            if($i%$j==0){
                $cnt++;
            }

        }
        if($cnt==0){
            $sum+=$i;
        }
    }
    echo $sum;


    ?>
</body>