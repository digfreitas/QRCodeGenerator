<?php 

require 'vendor/autoload.php';

use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeMargin;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\Encoding\Encoding;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $texto = $_POST['texto'];

    $logoPath = __DIR__ . '/logo.png';

    $result = Builder::create()
        ->writer(new PngWriter())
        ->data($texto)
        ->size(300) // Tamanho do QR Code em pixels
        ->margin(10) // Margem ao redor do QR Code
        ->build();

    // Salve o QR Code como um arquivo
    $result->saveToFile(__DIR__.'/qrcode.png');

    // Ou exiba diretamente na página
    header('Content-Type: '.$result->getMimeType());
    echo $result->getString();
}
    
