<?php
namespace user;
class User{

   public $isim = "enes";
   public $soyad = "kılıç";

   function get(){
       return [$this->isim,$this->soyad];
   }
}
