<form method="post">
    <input type="number" name="radius" placeholder="Enter Radius for calculate Circle">
    <input type="submit" name="submit" value="Area of Circle">
</form>
<?php
if(isset($_POST['submit'])) {
    $r = $_POST['radius'];
    $pai = 3.14;
    $area = $pai *($r*$r);
    echo "The area of Circle is $area ";
}
?>