<?php
/**
 * Created by PhpStorm.
 * User: tarel
 * Date: 11-9-2017
 * Time: 09:52
 */
?>
    <form action="">
        <input type="text" name="l">
    </form>
    <br><br>

<?php
$leeftijd = $_GET['l'];
$kost = 10;
if ($leeftijd < 13 || $leeftijd > 64){$kost=$kost/2;}
else {$kost = $kost;}
echo  $kost;
?>