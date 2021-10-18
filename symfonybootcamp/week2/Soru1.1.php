<?php
// Call By Value  ile fonksiyona  değişkenin değerini gönderir fonksiyonun içindeki yapılan işlemler gönderilen değişkenin değerini değiştirmez.   
// Call By Reference ile fonksyionun parametrelerine değişkenlerin bellekteki tutulan referans değerleri gönderilir. Fonksiyonun içindeki yapılan işlemler değişkenlerin değerini de değiştirir.
function DegistirByValue($a,$b){
$a=10;
$b=20;
}
$degisken1 = 100;
$degisken2 = 200;

DegistirByValue($degisken1,$degisken2);

echo "degisken1  değeri:  {$degisken1}  degisken2 değeri:  {$degisken2} \n";

function DegistirByRef(&$a,&$b){
    $a=10;
    $b=20;
}

DegistirByRef($degisken1,$degisken2);

echo "degisken1 değeri:  {$degisken1}  degisken2 değeri:  {$degisken2}";

/*
degisken1 değeri:  100  degisken2 değeri:  200 
degisken1 değeri:  10  degisken2 değeri:  20
*/
?>
