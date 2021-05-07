<?php

function findMax($arr){
    $max = $arr[0][0];

    for ($row = 1 ; $row < count($arr[$row]); $row++){
        for ($col = 1 ; $col < count($arr[$col]) ; $col++){
            if ($arr[$row][$col] > $max){
                $max = $arr[$row][$col];
            }
        }
    }

    echo $max . ' la so lon nhat trong mang hai chieu';
}

$arr = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];

findMax($arr);