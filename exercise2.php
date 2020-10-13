<?php
    echo "<h1> Calculate Total Price </h1>";
    $hamburguer=4.95;
    $shake=1.95;
    $soda=0.85;
    $tax_rate=0.075;
    $tip_rate=0.16;

    
    $subtotal = ($hamburguer * 2) + $shake + $soda;
    $tax = $subtotal * $tax_rate;
    $tip = $subtotal * $tip_rate;
    $total = $subtotal + $tip + $tax;

    
    echo "Total = $ $total";
?>


<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?php
    echo "<h1>Homework 2</h1>";
    $cities = array(
    "New York, NY" => 8175133,
    "Los Angeles, CA" => 3792621,
    "Chicago, IL" => 2695598,
    "Houston, TX" => 2100263,
    "Philadelphia, PA" => 1526006,
    "Phoenix, AZ" => 1445632,
    "San Antonio, TX" => 1327407,
    "San Diego, CA" => 1307402,
    "Dallas, TX" => 1197816,
    "San Jose" => 945942
    );
?>

<table border="1" cellspacing="0" cellpadding="4">
<tr>
<th>City</th>
<th>Population</th>
</tr>
<?php foreach ($cities as $key=>$value) {
echo "<tr><td>$key</td><td>".number_format($value)."</td></tr>";
}
echo "<tr><th>Total Population</th><th>".number_format(array_sum($cities))."</th></tr>";
?>
</table>
</body>
</html>


