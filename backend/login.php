<?php
require_once 'includes/config.php';
include 'includes/header.php';
?>

<h3>Login</h3>

<form method="post">

<table>

<tr>
    <td>Username</td>
    <td><input type="text" name="username"></td>
</tr>

<tr>
    <td>Password</td>
    <td><input type="password" name="password"></td>
</tr>

<tr>
    <td></td>
    <td><button type="submit">Login</button></td>
</tr>

</table>

</form>

<?php
include 'includes/footer.php';
?>