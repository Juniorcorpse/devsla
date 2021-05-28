<?php
$linha = 0;
//for($linha=0;$linha<10;$linha+1){
while ($linha < 10) {
    for ($i = 1; $i <= 10; $i++) {
        echo "-";
    }
    echo "<br/>";
    $linha += 1;
}

for($i=0;$i<20;$i++){
    for($j=0;$j<$i;$j++){
      echo '-';
    }
echo $i.'<br>';
}
