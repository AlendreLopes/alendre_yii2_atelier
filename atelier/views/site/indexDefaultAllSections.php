<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \atelier\models\ContactForm $model */
use common\widgets\Alert;
use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;

?>

<section>

    <div class="jumbotron bg-transparent my-5">

        <h1 class="display-4 text-center">
            <?= Html::img('@web/img/atelier_brand_black.png',['alt'=>'','class'=>'dark:display-block']);?>
            <!-- <?php //= Html::img('@web/img/atelier_brand_white.png',['alt'=>'','class'=>'dark:hidden']);?> -->
        </h1>
        <h3><?= Alert::widget() ?></h3>
    </div>

    <div class="body-content text-center">

        <div class="row">
            <div class="col-lg-12">

                <h2>Seja bem vindo(a) ao Atelier Alendre</h2>
                <br>
                <br>
                <h4>Nós somos um time de talentosos designers e desenvolvedores que criamos/confeccionamos websites, e-commerces e mobiles.</h4>
                <br>
                <br>
                <p><a class="btn btn-lg btn-outline-secondary" href="#team">Conheça nossa equipe</a></p>

            </div>
        </div>

    </div>

</section>

<section id="about" class="bg-gray">
    <div class="row">
        <?= $this->render('@app/views/site/about'); ?>
    </div>
</section>

<section id="portfolio">
    <div class="row">
        <?= $this->render('@app/views/site/portfolio'); ?>
    </div>
</section>

<section id="pricing">
    <div class="row">
        <?= $this->render('@app/views/site/pricing'); ?>
    </div>
</section>

<section id="videos">
    <div class="row">
        <?= $this->render('@app/views/site/videos'); ?>
    </div>
</section>

<section id="sponsors">
    <div class="row">
        <?= $this->render('@app/views/site/sponsors'); ?>
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
