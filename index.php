<?php include 'config/connection.php';
include 'template/header.php';
?>

<form action="backend.php" method="post">
    <input class="form-control py-3 my-2" type="number" name="invoice" placeholder="Desired Total">
    <!-- <input class="form-control py-3 my-2" type="number" name="itemNumber" placeholder="Number Of Items"> -->
    <button class="form-control py-3 my-2" type="submit" name="invoiceForm">Generate</button>
</form>
<?php include 'template/header.php'; ?>