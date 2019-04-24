<center><b>
<?php
//namespace app\controllers;
use app\models\test1;
use yii\helpers\Html;
//echo "I work";
?>
<h2> <center> Display Active Users  </center> </h2>

<?php

$query=test1::find()
      ->where(['status' => 1,]);
$provider=new \yii\data\ActiveDataProvider([
  'query'=> $query, //all
     'pagination'=>[
    'pageSize'=>10,
  ],

]);
?>
</b></center>

 <h2> User List </h2>
 <br>

<?php
echo \yii\widgets\ListView::widget([
  'dataProvider'=> $provider,
  'layout' => "{pager}\n{items}\n{summary}",

  'itemView'=> function($users)
   {
     $urll=$users->url;
    ?>
    <div class="Users list">
      <h3 style="float:left"> <?=$users->f_name ." ". $users->l_name;?></h3>
      <!-- <input type="text" name="urll" id="urll" value="<?= $urll ?>"> -->
      <p > <?= Html::img("$urll", ['alt' => 'My logo', 'height'=>50, 'width'=>50,])?> </p>
      <!-- <p > <?= Html::img('@web/img/alpha.png', ['alt' => 'My logo', 'height'=>50, 'width'=>50,])?> </p> -->
      <p> Email : <?=$users->email ?> </p>
      <p> Marks : <?=$users->marks ?> </p>
      <p> Status : <?= ($users->status)? "Active" : "Inactive" ?> </p>

    </div>

<?php

   }

]);
?>
