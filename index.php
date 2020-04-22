<?php
$array = [2, 3, 2, 5, 6, 1, -2, 3, 14, 12,0];

function bubbleSort($list)
{
    $check = false;
    for ($i = 0; $i < count($list) - 2; $i++) {
        for ($j = 0; $j < count($list) - 1 - $i; $j++) {
            if ($list[$j] > $list[$j + 1]) {
                $temp = $list[$j];
                $list[$j] = $list[$j + 1];
                $list[$j + 1] = $temp;
                $check = true;
            }
        }
        if (!$check) {
            break;
        }
    }
    return $list;
}

echo "Original Array:<br>";
echo implode(", ", $array);
echo "<br>Sorted Array: <br>";
echo implode(", ", bubbleSort($array));