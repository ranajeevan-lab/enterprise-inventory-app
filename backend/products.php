<?php
require_once 'includes/config.php';
require_once 'includes/db.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Products - <?php echo APP_NAME; ?></title>
</head>
<body>

<h1>Products</h1>

<p>Product list will be displayed here.</p>

<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Product</th>
        <th>Quantity</th>
        <th>Price</th>
    </tr>
</table>

</body>
</html>