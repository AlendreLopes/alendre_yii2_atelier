<?php

/** @var \yii\web\View $this */
/** @var string $content */
use atelier\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="dark">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="paraná,Paraná,curitiba,Curitiba,web,Web,Designer,designer,web designer,Web Designer,paraná curitiba web designer,ui,ux,ui designer,ux desginer,developer,full-stack,developer full-stack,freelancer" name="keywords">
    <meta content="Desenvolvimento Web Site, Intranet e Desktop, Identidade Visual, Construimos juntos a sua identidade visual, Desenvolvemos juntos o seu Aplicativo, Análise Estrutural e Tecnológica" name="description">
    <meta name="author" content="Alexandre Lopes - www.alendrelopes.eti.br">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode(Yii::$app->name) ?></title>
    <!-- Robot-->
    <meta name="robots" content="all">
    <meta name="robots" content="index, follow">
    <meta name="bingbot" content="index, follow">
    <meta name="msnbot" content="index, follow">
    <meta name="yahoobot" content="index, follow">
    <?php $this->head() ?>
</head>
<!-- <body class="d-flex flex-column h-100" data-spy="scroll" data-target="#navbar-alendre"> -->
<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>

    <header>
        <?php
        NavBar::begin([
            'brandLabel' => Yii::$app->name,
            'brandUrl' => Yii::$app->homeUrl.'/site/#atelier',
            'options' => [
                'id'    => 'navbar-alendre',
                'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
            ],
        ]);
        $menuItems = [
            ['label' => 'Atelier', 'url' => ['/site/#atelier']],
            ['label' => 'Sobre nós', 'url' => ['/site/#about']],
            ['label' => 'Nossa equipe', 'url' => ['/site/#team']],
            ['label' => 'Patrocinadores', 'url' => ['/site/#sponsors']],
            ['label' => 'Contato', 'url' => ['/site/#contact']],
            // ['label' => 'Light/Dark', 'url' => ['#'], 'class'=>'btn btn-outline-secondary switch'],
        ];
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav ml-auto'],
            'items' => $menuItems,
        ]);
        NavBar::end();
        ?>
    </header>

    <main id="fullpage" role="main" class="flex-shrink-0">
        <div class="container-fluid">
            <?= $content ?>
        </div>
    </main>

    <footer class="footer mt-auto py-3 text-muted">
        <div class="container">
            <p class="float-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>
            <p class="float-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
