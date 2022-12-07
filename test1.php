<?php
function duplicateAngka($arr){
    $arrCount = array_count_values($arr);
    $result = 0;
    foreach($arrCount as $i => $v){
        $cekPair = floor($v / 2);
        if($cekPair > 0){
            $result += $cekPair; 
        }
    }

    return $result;
}

echo duplicateAngka([10, 20, 20, 10, 10, 30, 50, 10, 20]);
echo "<br>";
echo duplicateAngka([6, 5, 2, 3, 5, 2, 2, 1, 1, 5, 1, 3, 3, 3, 5]);
echo "<br>";
echo duplicateAngka([1, 1, 3, 1, 2, 1, 3, 3, 3, 3]);
?>