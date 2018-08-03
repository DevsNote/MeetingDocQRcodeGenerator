<?php

use frontend\assets\AppAsset;
use frontend\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>


        <?php $this->beginBody() ?>

      

        <section class="content">
            <?= Alert::widget() ?>
            <?= $content ?>
        </section>

      

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
