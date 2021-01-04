<?php
if (isset($_POST['order'])) {
    $era = new mysqli('localhost', 'root', '', 'food') or die("Error: " . mysqli_error($era));
    session_start();
}
?>


<h1 class="display-4 text-center">Oder Successful!!! <b><?php echo $Quantity * 1 ?>$</b> is your total price </h1>