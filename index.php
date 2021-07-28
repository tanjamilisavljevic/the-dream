<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Currency converter</title>
</head>
<body>
<form action="" method="get">
    <label for="sourceCurrency">From:</label>
    <select name="sourceCurrency" id="sourceCurrency">
        <option value="pounds">UK Pounds</option>
        <option value="dollars">US Dollars</option>
        <option value="euros">Euros</option>
    </select>
    <input type="number" name="input">
    <input type="submit" name="submit" value="To Serbian Dinars">
</form>
</body>
</html>

<?php
if (isset($_GET['submit'])) {
    $input = $_GET['input'];
    $sourceCurrency = $_GET['sourceCurrency'];

    if ($sourceCurrency == 'euros') {
        $output = $input * 117.49;
        echo number_format($output, 2) . 'RSD';
    }
    else if ($sourceCurrency == 'dollars'){
        $output = $input * 99.51;
        echo number_format($output, 2) . 'RSD';
    }
    else if ($sourceCurrency == 'pounds'){
        $output = $input * 138.08;
        echo number_format($output, 2) . 'RSD';
    }
}
?>
