<?php

    require_once "firma.php";

    $firma = new Firma();
    $firma->firmaEkle("aa","aa");
    $id = 1;
    $firma->bul($id);