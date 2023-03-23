<?php
  class Artikl {
    private $id;
    private $naziv;
    private $url;
    private $cijena;

    function __construct (string $id, string $naziv, string $url, string $cijena){
      $this->id=$id;
      $this->naziv=$naziv;
      $this->url=$url;
      $this->cijena=floatval($cijena);
    }

    function get_id(){
      return $this->id;
    }

    function get_naziv(){
      return $this->naziv;
    }

    function get_url(){
      return $this->url;
    }

    function get_cijena(){
      return $this->cijena;
    }
    function ispis_cijene(){
      return strval(number_format($this->cijena,2,',','.'))." kn";
    }
  }

  $artikli=array();
  $artikli['1']=new Artikl ("1", "Fifa2333","./slike/fifa23.jpg", "150"); 
  $artikli['2']=new Artikl ("2", "CTR","./slike/ctr.png", "120");
  $artikli['3']=new Artikl ("3", "Sackboy","./slike/sackboy.jpg", "120");
  $artikli['4']=new Artikl ("4", "CSGO","./slike/csgo.jpg", "120");
  $artikli['5']=new Artikl ("5", "GOW", "./slike/gow.jpg", "170");

 
  
?>