<?php 
include('phpqrcode/qrlib.php');
// include 'barcode-master/barcode.php';
// require 'php-barcode-generator-3.2.0/src/BarcodeGenerator.php';
// require 'php-barcode-generator-3.2.0/src/BarcodeGeneratorPNG.php';

// require_once 'TCPDF-main/tcpdf.php';

use Picqer\Barcode\BarcodeGeneratorPNG;

session_start();

if(!isset($_SESSION['username'])) {
   header("Location: index.php");
    exit;
}


 if (isset($_POST['text-url'])) $data = $_POST['text-url'];
 else $data = "";
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/main.css?v=1.1">
    <title>ITCC5 | QR And Barcode Generator</title>
</head>
<body>
    <div class="main-container">
        <div class="exit" id="logout" title="Logout">
            <img src="images/exit.svg" width="20px" height="20px" alt="exit">
        </div>
        <div class="container">
            <div class="form-container">
                <h2 class="title">QRCode Generator</h2>
                <form action="" method="POST">
                    <label for="text-url">Enter text or URL</label>
                    <input type="text" name="text-url" id="url" value="<?=$data?>" placeholder="Enter text here...">
                    <label for="size">Select Size</label>
                    <select name="size" id="size">
                        <option value="500">Small (500x500)</option>
                        <option value="750">Medium (750x750)</option>
                        <option value="1000">Large (1000x1000)</option>
                    </select>
                    <button type="submit">Generate</button>
                </form>
                <div class="result">
                    <?php 
                        if (isset($_POST['text-url']) && !empty($_POST['text-url'])) {

                            $data = $_POST['text-url'];
                            $size = (int)$_POST['size'];
        
                            $filePath = 'qrcodes/'. uniqid(). '.png';
                            QRcode::png($data, $filePath, QR_ECLEVEL_L, $size/150);
                            echo "<h2>Here is your QR Code:</h2>";
                            echo "<img src='$filePath' alt='QRCode'><br>";
                            echo "<a href='$filePath' download>Download QR Code</a>";
                        
                        }else {
                            echo "<br>No data received!";
                        }

                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src="script/script.js"></script>
</body>
</html>