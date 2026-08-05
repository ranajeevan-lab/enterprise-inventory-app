<?php
require_once 'includes/config.php';
require_once 'includes/db.php';

$result = mysqli_query(
    $conn,
    'SELECT id, product_name, quantity, price FROM products ORDER BY id'
);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Products - <?php echo APP_NAME; ?></title>
</head>
<body>

<h1>Products</h1>

<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Product</th>
        <th>Quantity</th>
        <th>Price</th>
    </tr>

    <?php while ($product = mysqli_fetch_assoc($result)): ?>
    <tr>
        <td><?php echo $product['id']; ?></td>
        <td><?php echo htmlspecialchars($product['product_name']); ?></td>
        <td><?php echo $product['quantity']; ?></td>
        <td><?php echo number_format((float) $product['price'], 2); ?></td>
    </tr>
    <?php endwhile; ?>
</table>

</body>
</html>