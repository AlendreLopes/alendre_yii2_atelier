<?php
/** @var yii\web\View $this */
use yii\helpers\Html;
?>
<div class="container text-center">

    <div class="container">

        <div class="section-title my-5">
            <h2>Sobre nós</h2>
            <h3>Nós desenvolvemos design de apps e websites.</h3>
            <p>Nosso Atelier trabalha com a Heroku e AWS para dar total segurança ao seu website.</p>
        </div>

        <div class="row text-left">
            <div class="col-lg-6 about-image">&nbsp;</div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-6">Fazendo suas metas tangíveis.</div>
                </div>
                <div class="row">
                    <div class="col-6">Promovendo seus produtos para seus consumidores.</div>
                </div>
                <div class="row">
                    <div class="col-6">Divulgando seus serviços no Google Analytics</div>
                </div>
            </div>
        </div>

        <p>
            Venha conosco para materializar, promover e encontrar seus clientes com a nosso ajuda ...
        </p>

    </div>

</div>

<div class="container">
    <?= \talma\widgets\FullCalendar::widget([
        'googleCalendar' => true,  // If the plugin displays a Google Calendar. Default false
        'loading' => 'Carregando...', // Text for loading alert. Default 'Loading...'
        'config' => [
            // put your options and callbacks here
            // see http://arshaw.com/fullcalendar/docs/
            'lang' => 'pt-br', // optional, if empty get app language
        ],
    ]); ?>
</div>