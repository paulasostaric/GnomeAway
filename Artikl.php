<?php 
class Artikl {
    private $id;
    private $naziv;
    private $url;
    private $cijena;
    public $counter;

    function __construct(string $id, string $naziv, string $url, string $cijena) {
        $this -> id = $id;
        $this -> naziv = $naziv;
        $this -> url = $url;
        $this -> cijena = floatval($cijena);
        $this -> counter = 1;
    }

    function get_id() {
        return $this -> id;
    }

    function get_naziv() {
        return $this -> naziv;
    }

    function get_url() {
        return $this -> url;
    }

    function get_cijena() {
        return $this -> cijena;
    }

    function get_counter() {
        return $this -> counter;
    }

    function counter_up() {
        return $this -> counter++;
    }

    function ispis_cijena() {
        return strval(number_format($this -> cijena, 2, ',', '.')). " kn";
    }
}

$artikli = array();

$artikli["1"] = new Artikl("1", "CS-GO", "./slike/csgo.jpg", "400");
$artikli["2"] = new Artikl("2", "God of War", "./slike/gow.jpg", "150");
$artikli["3"] = new Artikl("3", "FIFA 23", "./slike/fifa23.jpg", "300");
$artikli["4"] = new Artikl("4", "Sackboy", "./slike/sackboy.jpg", "100");
//$artikli["5"] = new Artikl("5", "CTR", "./slike/ctr.png", "100");

$xml = simplexml_load_file('igrica.xml');

foreach($xml as $x) {
    $artikli[".$x->id."] = 
        new Artikl(strval($x->id), strval($x->name), strval($x->url), strval($x->price));
}


?>