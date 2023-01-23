<?php
class GeometryCalculator {
    private $shape;

    public function setShape($shape) {
        $this->shape = $shape;
    }

    public function calculateArea() {
        if ($this->shape == "ctverec") {
            return pow($_POST['side'], 2);
        } else if ($this->shape == "obdelnik") {
            return $_POST['length'] * $_POST['width'];
        } else if ($this->shape == "trojuhelnik") {
            if(isset($_POST['side1']) && isset($_POST['side2'])) {
                if($_POST['side1'] > $_POST['side2'] OR $_POST['side1'] == $_POST['side2']) {
                    $p = ($_POST['side1'] + $_POST['side2'] + $_POST['side2']) / 2;
                    return sqrt($p * ($p - $_POST['side1']) * ($p - $_POST['side2']) * ($p - $_POST['side2']));
                } else {
                    $p = ($_POST['side1'] + $_POST['side2'] + $_POST['side2']) / 2;
                    return sqrt($p * ($p - $_POST['side1']) * ($p - $_POST['side2']) * ($p - $_POST['side2']));
            }
        }
    }
}
    public function calculatePerimeter() {
        if ($this->shape == "ctverec") {
            return 4 * $_POST['side'];
        } else if ($this->shape == "obdelnik") {
            return 2 * ($_POST['length'] + $_POST['width']);
        } else if ($this->shape == "trojuhelnik") {
            if(isset($_POST['side1']) && isset($_POST['side2']))
                if($_POST['side1'] > $_POST['side2'] OR $_POST['side1'] == $_POST['side2']) {
                    return 2 * $_POST['side1'] + $_POST['side2'];
                } else {
                    return 2 * $_POST['side2'] + $_POST['side1'];
                }
        }
    }

}

$calculator = new GeometryCalculator();

if (isset($_POST['shape'])) {
    $calculator->setShape($_POST['shape']);
    $area = $calculator->calculateArea();
    $perimeter = $calculator->calculatePerimeter();
}
?>
<form method="post">
    <input type="radio" name="shape" value="ctverec" onclick="showCtverecForm()"> čtverec
    <input type="radio" name="shape" value="obdelnik" onclick="showObdelnikForm()"> obdelník
    <input type="radio" name="shape" value="trojuhelnik" onclick="showTrojuhelnikForm()"> trojúhelník
    <br>
    <br>
    <div id="ctverec-form" style="display:none;">
        Strana: <input type="text" name="side">
    </div>
    <div id="obdelnik-form" style="display:none;">
        Délka: <input type="text" name="length">
        Šířka: <input type="text" name="width">
    </div>
    <div id="trojuhelnik-form" style="display:none;">
        Strana 1: <input type="text" name="side1">
        Strana 2: <input type="text" name="side2">
    </div>
    <br>
    <input type="submit" value="Vypočítej">
</form>
<script>
    function showCtverecForm() {
        document.getElementById("ctverec-form").style.display = "block";
        document.getElementById("obdelnik-form").style.display = "none";
        document.getElementById("trojuhelnik-form").style.display = "none";
    }

    function showObdelnikForm() {
    document.getElementById("ctverec-form").style.display = "none";
    document.getElementById("obdelnik-form").style.display = "block";
    document.getElementById("trojuhelnik-form").style.display = "none";
    }

    function showTrojuhelnikForm() {
        document.getElementById("ctverec-form").style.display = "none";
        document.getElementById("obdelnik-form").style.display = "none";
        document.getElementById("trojuhelnik-form").style.display = "block";
    }

</script>

<?php

    if (isset($area)) {
        echo "Obsah: " . $area . "<br>";
    }
    if (isset($perimeter)) {
        echo "Obvod: " . $perimeter;
    }

?>