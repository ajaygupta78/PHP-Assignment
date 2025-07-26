<form method="post">
    <input type="number" name="num1" placeholder="Enter first number">
    <input type="number" name="num2" placeholder="Enter second number">
    <input type="submit" name="submit" value="For Swapp">
</form>
<?php
if(isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num1 = $num1+$num2;
    $num2 = $num1-$num2;
    $num1 = $num1-$num2;
    echo "The sum of First-Number = $num1 and Second-Number = $num2";
}
?>

<!-- Second Way For solve the question
<?php
$num1=22;
$num2=11;
$num3=0;
$num3=$num2;
$num2=$num1;
$num1=$num3;
echo "Num1=$num1 Num2=$num2"
?> -->