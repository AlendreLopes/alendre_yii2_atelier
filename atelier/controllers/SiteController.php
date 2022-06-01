<?php

namespace atelier\controllers;

use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\controllers\AppController;
use atelier\models\ContactForm;

/**
 * Site controller
 */
class SiteController extends AppController
{
    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $contact = new ContactForm();
        if ($contact->load(Yii::$app->request->post()) && $contact->validate()) {
            if ($contact->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        }
        return $this->render('index', ['contact' => $contact]);
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $contact = new ContactForm();
        if ($contact->load(Yii::$app->request->post()) && $contact->validate()) {
            if ($contact->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
    /**
     * Displays portfolio page.
     *
     * @return mixed
     */
    public function actionPortfolio()
    {
        return $this->render('portfolio');
    }
    /**
     * Displays videos page.
     *
     * @return mixed
     */
    public function actionVideos()
    {
        return $this->render('videos');
    }
    /**
     * Displays sponsors page.
     *
     * @return mixed
     */
    public function actionSponsors()
    {
        return $this->render('sponsors');
    }
}
