<?php
require_once 'bentuk2d.php';

class persegi_panjang extends Bentuk2D {
    public $lebar;
    public $panjang;
    
    public function __construct($lebar, $panjang){
    $this->lebar = $lebar;
    $this->panjang = $panjang;
    }
    public function namabidang(){
        return 'Pesegi panjang';
    }
    public function luasBidang(){
        return $this->lebar * $this->panjang;
    }
    public function kelilingBidang() {
        return 2 * ($this->panjang + $this->lebar);
    }
        
    }


?>