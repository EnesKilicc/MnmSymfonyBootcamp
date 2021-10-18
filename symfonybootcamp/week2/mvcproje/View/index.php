<?php
use test\IndexController;
$cnt = new IndexController();
$var=$cnt->index();

echo "İsim: {$var[0]} Soyad: {$var[1]}";





