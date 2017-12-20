<?php
include __DIR__ . './vendor/autoload.php';

use OOExercise\SelfException\FileOpenException;
use OOExercise\SelfException\FileLockException;
use OOExercise\SelfException\FileWriteException;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

//////////////////////////////////
$tireqty      = (int) $_REQUEST['tireqty'];
$oilqty       = (int) $_REQUEST['oilqty'];
$sparkqty     = (int) $_REQUEST['sparkqty'];
$address      = $_REQUEST['address'];
$documentRoot = $_SERVER['DOCUMENT_ROOT'];
$date         = date('H:i, jS F Y');

$totalqty    = 0;
$totalamount = 0.0;
$totalamountTax = 0.0;
$taxrate = 0.10;

const TREPRICE   = 100;
const OILPRICE   = 10;
const SPARKPRICE = 4;

$totalqty = $tireqty + $oilqty + $sparkqty;
$totalamount = $tireqty * TREPRICE + $oilqty * OILPRICE + $sparkqty * SPARKPRICE;
$totalamountTax = $totalamount * $taxrate;

$outputString = $date . "\t" . $tireqty . " tires \t" . $oilqty . " oil\t" . $sparkqty . " spark plugs\t\$" . $totalamountTax . "\t" . $address . "\n"  ;
$message = "";
$logger = null;
try {
    if (!($fp = @fopen("$documentRoot/../orders.txt", 'ab'))) {
        throw new FileOpenException();
    }

    if (!flock($fp, LOCK_EX)) {
        throw new FileLockException();
    }

    if (!fwrite($fp, $outputString)) {
        throw new FileWriteException();
    }

    flock($fp, LOCK_UN);
    fclose($fp);
    $message = "Order written.";
} catch (FileOpenException $foe) {
    $logger = new Logger("FileOpenException");
    $logger->pushHandler(new StreamHandler(__DIR__.'/logs/wuminghsueh.log', Logger::ERROR));
    $logger->error($foe."");
    $message = "Orders file could not be opened.\n Please contact our webmaster for help.";
} catch (FileLockException $fwe) {
    $logger = new Logger("FileLockException");
    $logger->pushHandler(new StreamHandler(__DIR__.'/logs/wuminghsueh.log', Logger::ERROR));
    $logger->error($fwe."");
    $message = "Orders file could not be use.\n Please contact our webmaster for help.";
} catch (FileWriteException $fle) {
    $logger = new Logger("FileWriteException");
    $logger->pushHandler(new StreamHandler(__DIR__.'/logs/wuminghsueh.log', Logger::ERROR));
    $logger->error($fle."");
    $message = "Orders file could not be write.\n Please contact our webmaster for help.";
} catch (Exception $e) {
    $logger = new Logger("Exception");
    $logger->pushHandler(new StreamHandler(__DIR__.'/logs/wuminghsueh.log', Logger::ERROR));
    $logger->error($e."");
    $message = "Your order could not be processed at this time. \n please contact our webmaster for help.";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Bob's Auto Parts</h1>
    <h2>Order Results</h2>
    <p>Order processed at <?=htmlspecialchars($date);?></p>
    <p>Your order is as follows: </p>
    <p>
        Items ordered: <?= htmlspecialchars($totalqty);?> <br>
        <?php if ($totalqty == 0): ?>
            Your did not order anything on the previous page! <br>
        <?php else:?>
            <?php if($tireqty > 0):?>
                <?= htmlspecialchars($tireqty);?> tries <br>
            <?php endif;?>

            <?php if($oilqty > 0):?>
                <?= htmlspecialchars($oilqty);?> bottles of  oil <br>
            <?php endif;?>
            
            <?php if($sparkqty > 0):?>
                <?= htmlspecialchars($sparkqty);?> spark plugs <br>
            <?php endif;?>
        <?php endif;?>
        Subtotal: $<?= htmlspecialchars(number_format($totalamount, 2));?> <br>
        Total includeing tax: $<?= htmlspecialchars(number_format($totalamountTax, 2))?> <br>
    </p>
    <p>Address to ship to  is <?= htmlspecialchars($address);?></p>
    <p><strong><?= nl2br($message)?></strong></p>

</body>
</html>