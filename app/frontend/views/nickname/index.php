<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;

?>

<h5>这里是View展示层</h5>

<img src="<?= $avatar ?>">
<h3>你好呀<font color="green"><?= $gender . $name ?></font>，现在是<?= $now ?>!</h3>