<form method="post">
    <input type="number" name="num1" placeholder="Enter first number">
    <input type="number" name="num2" placeholder="Enter second number">
    <input type="submit" name="submit" value="Calculate Sum">
</form>
<?php
if(isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $result = $num1 + $num2;
    echo "The sum of $num1 and $num2 is: $result";
}
?>