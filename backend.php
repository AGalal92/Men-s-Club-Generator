<?php //include 'config/connection.php';
include 'template/header.php';

if (isset($_POST['invoiceForm'])) {

    $invoice = $_POST['invoice'];
    /* $itemNumbers = $_POST['itemNumber']; */
    $sum = 0;
    $itemID[] = 0;
    $upc[] = 0;
    $unitPrice[] = 0;
    $subTotal = 0;
    $new[] = 0;
    $new1[] = 0;

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    $mysqli = mysqli_connect('localhost', 'root', '') or
        die('Unable to connect. Check your connection parameters.');
    mysqli_select_db($mysqli, 'mens') or die(mysqli_error($mysqli));

    $query = "SELECT itemID, UPC , unitPrice FROM list_of_items ORDER BY rand() LIMIT 10000 ";
    $result = $mysqli->query($query);

    while ($row = $result->fetch_array()) {
        $rows[] = $row;
    }

    foreach ($rows as $row) {

        if ($sum < $invoice && $sum <= $invoice + 1) {

            echo  $row['UPC'] . ' ====> ' . $row['unitPrice'] . '<br>';

            $sum += $row['unitPrice'];
        }
    }

    echo $sum;
}


?>

<?php include 'template/footer.php'; ?>