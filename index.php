<?php
require 'vendor/autoload.php';

$code = "081231723\n897";

// This will output the barcode as HTML output to display in the browser
// $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
// echo $generator->getBarcode($code, $generator::TYPE_CODE_128);


$generator = new Picqer\Barcode\BarcodeGeneratorPNG();
echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($code, $generator::TYPE_CODE_128)) . '">';