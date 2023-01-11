<form method="post">
  <h1>Kontrola formuláře</h1>
  <label for="name">Jméno a příjmení:</label>
  <input type="text" name="name">
  <br>
  <label for="address">Adresa:</label>
  <input type="text" name="address">
  <br>
  <input type="submit" value="Odeslat" name="submit">
</form>

<?php
function validateForm() {
    if (isset($_POST['name']) && isset($_POST['address'])) {
        $name = $_POST['name'];
        $address = $_POST['address'];

        if (empty($name)) {
            echo "<p style='color: red;'>Jméno a příjmení musí být vyplněno!</p>";
        } else if(str_word_count($name) < 2) {
            echo "<p style='color: red;'>Zadejte prosím jméno i příjmení</p>";
        } 

        else if (strlen($address) < 10) {
            echo "<p style='color: red;'>Adresa musí obsahovat alespoň 10 znaků!</p>";
        } 
        else {
            echo "Jméno: " . $name . "<br>";
            echo "Adresa: " . $address;
        }
    }
}

if(isset($_POST["submit"])){
    validateForm();
}
?>
