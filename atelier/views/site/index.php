<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \atelier\models\ContactForm $model */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;

?>

<section>

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">
            <?= Html::img('@web/img/atelier_brand_black.png',['alt'=>'','class'=>'dark:display-block']);?>
            <?= Html::img('@web/img/atelier_brand_white.png',['alt'=>'','class'=>'dark:hidden']);?>
        </h1>

        <p class="lead">We are team of talented designers making websites with Bootstrap</p>

        <p><a class="btn btn-lg btn-success" href="#about">Get started</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</section>

<section id="about">
    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">About</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>


    <div class="row">
        <?= $this->render('@app/views/site/about'); ?>
    </div>
</section>

<section id="portfolio">
    <div class="row">
        <?= $this->render('@app/views/site/portfolio'); ?>
    </div>
</section>

<section id="portfolio">
    <div class="row">
        <?= $this->render('@app/views/site/pricing'); ?>
    </div>
</section>

<section id="videos">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">VIDEOS</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <?= $this->render('@app/views/site/videos'); ?>
        </div>

    </div>
</section>

<section id="sponsors">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">SPONSORS</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <?= $this->render('@app/views/site/sponsors'); ?>
        </div>

    </div>
</section>

<section id="contact">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">CONTATO</h1>

        <p class="lead">If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.</p>

    </div>

    <div class="row">
        <?= $this->render('@app/views/site/contact', ['model' => $contact]); ?>
    </div>

</section>
