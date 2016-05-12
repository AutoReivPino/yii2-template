<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/13
 * Time: 2:30
 */

namespace backend\controllers;


use yii\web\Controller;

class TestController extends Controller
{
    public $layout = 'test';
    
    public function actionIndex()
    {
        return $this->render('index');
    }
}