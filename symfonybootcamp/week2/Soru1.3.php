<?php
class staticTest{
   public static $staticName;
   public $name;
    public static function printName(){
        echo "StaticName değeri sonucu: " . staticTest::$staticName;
        
    }
}

$var1 = new staticTest();
$var2 = new staticTest();

$var1::$staticName="Ahmet";
$var1->name= "Ahmet";

$var2::$staticName= "ENES";
$var2->name= "ENES";

//static değişkeni bir nesnede değiştirince diğer nesnelerdeki değeri de değişti.
echo "var1 static name: ". $var1::$staticName . "   var1 name:   " . $var1->name . "\n";

echo "var2 static name: ". $var2::$staticName . "   var2 name:   " . $var2->name . "\n";

// yeni bir class nesnesi oluşturmadan  içindeki static fonksiyonu kullanabiliyoruz.
staticTest::printName();

/*
var1 static name: ENES   var1 name:   Ahmet
var2 static name: ENES   var2 name:   ENES
StaticName değeri sonucu: ENES
*/

?>



