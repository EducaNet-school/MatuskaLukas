<?php
class Auto {
    public $typ;
    public $znacka;
    function __construct($typ, $znacka) {
        $this->typ = $typ;
        $this->znacka = $znacka;
    }
    function VratInfo() {
        return "Typ: " . $this->typ . ", Značka: " . $this->znacka;
    }
}

class Nakladak extends Auto {
    public $nosnost;
    function __construct($typ, $znacka, $nosnost) {
        parent::__construct($typ, $znacka);
        $this->nosnost = $nosnost;
    }
    function VratInfo() {
        return parent::VratInfo() . ", Nosnost: " . $this->nosnost;
    }
}

class ElektrickeAuto extends Auto {
    public $dojezd;
    function __construct($typ, $znacka, $dojezd) {
        parent::__construct($typ, $znacka);
        $this->dojezd = $dojezd;
    }
    function VratInfo() {
        return parent::VratInfo() . ", Dojezd: " . $this->dojezd;
    }
}

$auta = array(new Auto("Osobní", "Škoda"), new Nakladak("Nákladní", "Volvo", 3000), new ElektrickeAuto("Elektrické", "Tesla", 400));

foreach($auta as $auto) {
    echo $auto->VratInfo() . "<br>";
}
?>