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
    //$users=test1::find()->all();
    //$users=mysql_query("select * from new_user")
    //print($users);
    //if()
    header('Content-type: text:plain');
    //print_r($users[0]->f_name);
    // foreach ($users as $u) {
    //   // code...
    //    print_r($u->f_name);
    // }

    return $this->render('index', ['dataProvider' => $provider, 'users'=>$users,
    ]);
  }
}
