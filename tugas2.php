<?php

class rizal{
var $nama="rizal";
function rizal($n){
$this->nama=$n;
}
function Hallo(){
echo "Saya, Rizal Ardianto $this->nama<br>";
}
function Hallo2(){
echo "UNWIDHA,	Klaten $this->nama<br>";
}
function Hallo3(){
echo "Alamat,	wedi $this->nama<br>";
}
}
class anak extends arya{
}
$test = new Anak("Kelas Manajemen Informatika");
$test->Hallo();
$test = new Anak("Semester 5");
$test->Hallo2();
$test = new Anak("Klaten");
$test->Hallo3();
?>