<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\test1;
use yii\data\ActiveDataProvider;
use yii\db\Query;

class DisplayController extends Controller
{
  public function actionIndex()
  {
     $provider=new \yii\data\ActiveDataProvider([
       'query'=> test1::find(), //all
          'pagination'=>[
         'pageSize'=>5,
       ],
     ]);
    $users=$provider->getModels();

    header('Content-type: text:plain');
  
    return $this->render('index', ['dataProvider' => $provider, 'users'=>$users,
    ]);
  }
}
