<?php
function payout($amount) {
    $banknotes = array(1000, 500, 200, 100, 50, 20, 10, 5, 2, 1);
    $result = array();
    foreach ($banknotes as $banknote) {
        if ($banknote <= $amount) {
            $count = floor($amount/$banknote);
            $result[$banknote] = $count;
            $amount = $amount - ($count * $banknote);
        }
    }
    return $result;
}

$input = 1254;
$output = payout($input);
print_r($output);
?>
