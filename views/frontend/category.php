<?php
use yii\helpers\Html;
use BumaKRG\shop\widgets\Buy;

/* @var $this yii\web\View */
?>

<h1><?=$catName?></h1>

<table border="1" width="100%">
    <tr>
        <td align="center"><b>Товар</b></td>
        <td width='60'  align="center"><b>Цена</b></td>
        <td width='30'  align="center">&nbsp;</td>
    </tr>
<?php

foreach ($products as $product){
    echo "<tr><td>".$product->name."</td><td align='right'>".$product->cost."</td><td>".Buy::widget(['model' => $product])."</td></tr>";
}

?>

</table>

