<?php
abstract class Vehicle{
    public $plakaNo;
    public $model;
    public $marka;
    public $tekerlekSayisi;
    public $kanatAcikligi;
    function __construct($marka,$model){
        $this->marka =$marka;
        $this->model = $model;
    }
    public abstract function bilgileriGoster();
}

class Araba extends Vehicle{
    function __construct($marka,$model,$plakaNo,$tekerlekSayisi){
        parent::__construct($marka,$model);
        $this->plakaNo=$plakaNo;
        $this->tekerlekSayisi=$tekerlekSayisi;
    }
    public function bilgileriGoster(){
        echo "Araba bilgileri şu şekildedir:
        Plaka No: {$this->plakaNo}
        Marka: {$this->marka} 
        Model:  {$this->model}
        Tekerlek Sayısı: {$this->tekerlekSayisi}\n";
    }
}
class Motorsiklet  extends Vehicle{
    function __construct($marka,$model,$plakaNo,$tekerlekSayisi){
        parent::__construct($marka,$model);
        $this->plakaNo=$plakaNo;
        $this->tekerlekSayisi=$tekerlekSayisi;
    } 
    public function bilgileriGoster(){
        echo "Motorsiklet bilgileri şu şekildedir:
        Plaka No: {$this->plakaNo}
        Marka: {$this->marka}
        Model:  {$this->model}
        Tekerlek Sayısı: {$this->tekerlekSayisi}\n";
    }
}
class Ucak extends Vehicle{
    function __construct($marka,$model,$kanatAcikligi){
        parent::__construct($marka,$model);
        $this->kanatAcikligi=$kanatAcikligi;
    }
     public function bilgileriGoster(){
        echo "Uçak bilgileri şu şekildedir:
        Marka: {$this->marka}
        Model:  {$this->model}
        Kanat Açıklığı: {$this->kanatAcikligi}\n";
    }
}

$araba = new Araba("Audi","A3","12314","4");
$motor = new Motorsiklet("Yamaha","R25","533634","2");
$ucak = new Ucak("Airbus","F256","90");

$araba->bilgileriGoster();
$motor->bilgileriGoster();
$ucak->bilgileriGoster();

?>
