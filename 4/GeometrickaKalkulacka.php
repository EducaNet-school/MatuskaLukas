<form method="post">
  <label for="input1">Zadejte první hodnotu:</label>
  <input type="text" name="input1"><br><br>
  
  <label for="input2">Zadejte druhou hodnotu:</label>
  <input type="text" name="input2"><br><br>
  
  <input type="submit" value="Odeslat" name="submit">
</form> 


<?php
class Square {
    private $side;

    public function __construct($side) {
        $this->side = $side;
    }

    public function getArea() {
        return pow($this->side, 2);
    }

    public function getPerimeter() {
        return 4 * $this->side;
    }
}

class Rectangle {
    private $length;
    private $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function getArea() {
        return $this->length * $this->width;
    }

    public function getPerimeter() {
        return 2 * ($this->length + $this->width);
    }
}

class Triangle {
    private $side1;
    private $side2;

    public function __construct($side1, $side2) {
        $this->side1 = $side1;
        $this->side2 = $side2;
    }

    public function getArea() {
        $p = ($this->side1 + $this->side2 + $this->side2) / 2;
        return sqrt($p * ($p - $this->side1) * ($p - $this->side2) * ($p - $this->side2));
    }

    public function getPerimeter() {
        return $this->side1 + $this->side2 + sqrt(pow($this->side1, 2) + pow($this->side2, 2));
    }
}
    $squareArea = 0;
    $squarePerimeter = 0;
    $rectangleArea = 0;
    $rectanglePerimeter = 0;
    $triangleArea = 0;
    $trianglePerimeter = 0;

    if (isset($_POST["submit"])) {
        $square = new Square($_POST["input1"]);
        $rectangle = new Rectangle($_POST["input1"], $_POST["input2"]);
        $triangle = new Triangle($_POST["input1"], $_POST["input2"]);
    
        $squareArea = $square->getArea();
        $rectangleArea = $rectangle->getArea();
        $triangleArea = $triangle->getArea();
    
        $squarePerimeter = $square->getPerimeter();
        $rectanglePerimeter = $rectangle->getPerimeter();
        $trianglePerimeter = $triangle->getPerimeter();

}

?>

<h2>Výsledky</h2>

        <p>Obsah čtverce: <?php echo $squareArea; ?></p>
        <p>Obvod čtverce: <?php echo $squarePerimeter; ?></p>
        
        <p>Obsah obdélníku: <?php echo $rectangleArea; ?></p>
        <p>Obvod obdélníku: <?php echo $rectanglePerimeter; ?></p>
        
        <p>Obsah trojúhelníku: <?php echo $triangleArea; ?></p>
        <p>Obvod trojúhelníku: <?php echo $trianglePerimeter; ?></p>