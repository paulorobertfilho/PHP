<?php
$var = array(1,2,3,4,5);

#força print com indice
echo 'Print_R: ';
print_r($var);

echo '<br>foreach: ';
foreach($var as $v){
    echo $v;
}

$var2 = array("A"=>"VAR A", "B" => "VAR B", "C"=> "VAR C");
echo '<br>Print_R: ';
print_r($var2);

echo '<br>foreach: ';
foreach($var2 as $v){
    echo $v;
};
#print posição
echo $var[1];
echo $var2["A"];

