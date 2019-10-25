<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class TutorialController extends Controller
{

    public function actionOrders()
    {
        return $this->render('orders');
    }

}
