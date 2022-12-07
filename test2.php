<?php
function hitungKata($arr){
    $split = explode(" ", $arr);
    $result = [];
    foreach($split as $s){
        if(!preg_match('/[^a-z.,\-?]/i', $s)){
            $result[] = $s;
        }
    }
    return count($result);
}

echo hitungKata("Saat meng*ecat tembok, Agung dib_antu oleh Raihan.");
echo "<br>";
echo hitungKata("Berapa u(mur minimal[ untuk !mengurus ktp?");
echo "<br>";
echo hitungKata("Masing-masing anak mendap(atkan uang jajan ya=ng be&rbeda.");
?>