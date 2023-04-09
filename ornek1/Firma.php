<?php

class Firma{
    public $firma;
    public $adres;
    private $firma_ID;
    public function __construct(){}
    public function __destruct(){}

    public function firmaEkle($adres,$firma){
        return $adres." ".$firma;
    }
    public function Bul($id){
        return $id;
    }
}