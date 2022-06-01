<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \atelier\models\ContactForm $model */
use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;

?>
<div class="container">

    <div class="row">
        <div class="col-4">
            dados
        </div>
        <div class="col-8">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                <div class="row">
                    <div class="col-4">
                        <?= $form->field($model, 'name')->textInput(['placeholder' => 'Seu nome, por favor']) ?>
                    </div>
                    <div class="col-4">
                        <?= $form->field($model, 'email')->textInput(['placeholder' => 'Informe seu e-mail']) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <?= $form->field($model, 'subject')->textInput(['placeholder' => 'Assunto']) ?>
                    </div>
                </div>
                            
                <div class="row">
                    <div class="col-8">
                        <?= $form->field($model, 'body')->textarea(['rows' => 6, 'placeholder' => 'Envie-nos uma mensagem']) ?>
                    </div>
                </div>

                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-2">{image}</div><div class="col-6">{input}</div></div>',
                ]) ?>

                <div class="row">
                    <div class="col-8 form-group">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>
