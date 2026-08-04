<?php
require_once 'includes/config.php';
require_once 'includes/db.php';
include 'includes/header.php';
?>

<h3>Add Product</h3>

<form method="post">

<table>

<tr>
    <td>Product Name</td>
    <td><input type="text" name="product_name"></td>
</tr>

<tr>
    <td>Description</td>
    <td><input type="text" name="description"></td>
</tr>

<tr>
    <td>Quantity</td>
    <td><input type="number" name="quantity"></td>
</tr>

<tr>
    <td>Price</td>
    <td><input type="number" step="0.01" name="price"></td>
</tr>

<tr>
    <td></td>
    <td><button type="submit">Save</button></td>
</tr>

</table>

</form>

<?php
include 'includes/footer.php';
?>