<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Weather';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Please write the name of your city to get weather information in it.
    </p>

    <input type="text" class="form-control mb-3" placeholder="CITY" />
    <button class="btn btn-danger">GO</button>


    function ($onClick) {
    // $event is an object of yii\base\Event or a child class
    echo "click me again"
    } 

    $component->attachEventHandler('onClick', function($event){
    echo "Click!";
    });
</div>