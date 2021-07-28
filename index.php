<?php
if (isset($_GET['submit'])) {
    $input = $_GET['input'];
    $sourceCurrency = $_GET['sourceCurrency'];

    if ($sourceCurrency == 'euros') {
        $output = $input * 117.49;
    } else if ($sourceCurrency == 'dollars') {
        $output = $input * 99.51;
    } else if ($sourceCurrency == 'pounds') {
        $output = $input * 138.08;
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Currency converter</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<div class="bigWrapper">
    <h1 class="title"> Currency Converter </h1>
    <form action="" method="get">
        <div class="sourceWrapper">
            <label for="sourceCurrency">From:</label>
            <select name="sourceCurrency" id="sourceCurrency">
                <option value="pounds">UK Pounds</option>
                <option value="dollars">US Dollars</option>
                <option value="euros">Euros</option>
            </select>
            <input type="number" name="input">
        </div>
        <div class="submitWrapper">
            <input class="submitButton" type="submit" name="submit" value="Convert to Serbian Dinars  🇷🇸">
        </div>
        <div class="resultWrapper">
            <div class="result"> <?php echo number_format($output, 2) . 'RSD'; ?> </div>
        </div>
    </form>
</div>
</body>
</html>

