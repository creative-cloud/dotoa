<?php

namespace app\models;

use yii\db\ActiveRecord;

class test1 extends ActiveRecord
{
  public static function tableName()
  {
      //public $table = "new_user";
      return 'new_user';
  }
}
