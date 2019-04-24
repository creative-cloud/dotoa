<center><b>
<?php
//namespace app\controllers;
use app\models\test1;
use yii\helpers\Html;
//echo "I work";
?>
<h2> <center> Display Active Users  </center> </h2>

<?php
//echo $users ->f_name .'<br>';
//echo $users ->l_name . '<br>';
// foreach ($users as $u) {
//   // code...
//    echo $u->f_name;
//    echo ' ';
//    echo $u->l_name;
//    echo ' ';echo ' ';
// }

     //echo $users->f_name;
     //echo $users->email;
     //echo 'tst';
     //echo $users ->l_name . '<br>';

$query=test1::find()
      ->where(['status' => 1,]);
$provider=new \yii\data\ActiveDataProvider([
  'query'=> $query, //all
     'pagination'=>[
    'pageSize'=>10,
  ],
  // $query->andFilterWhere([
  //       $users[0]->status => 1,
  //   ])
  //query->where([status => 1,]);
]);
?>
</b></center>

 <h2> User List </h2>
 <br>

<?php
echo \yii\widgets\ListView::widget([
  'dataProvider'=> $provider,
  'layout' => "{pager}\n{items}\n{summary}",
  //'itemView'=>'_item',
  'itemView'=> function($users)
   {
     $urll=$users->url;
     //echo $urll;
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
     //return $users->l_name." ".$users->f_name;
   }
  //return $this->render('_item', ['users'=>$users,
]);
//$source='C:\Users\Anonymous\Documents\dot\basic\images\alpha.png';
//echo '<img src="'.$source.'"/>';
//echo 'test';
//echo Html::img('@web/img/alpha.png', ['alt' => 'My logo', 'height'=>50, 'width'=>50,]);
?>


<!-- <?= Html::img('@web/img/alpha.png', ['alt' => 'My logo']) ?> -->

<!-- <img src="data:image/png;base64,<?= base64_encode('C:\Users\Anonymous\Documents\dot\basic\images\alpha.png') ?>" height="100px" width="100px" />
<img src="C:/Users/Anonymous/Documents/dot/basic/images/alpha.png" alt="test image" height="100px" width="100px"/>
<img src="{{asset('img/')}}" alt="test image" height="100px" width="100px"/> -->
<?php
//echo 'test';
//echo '<img src="'C:\Users\Anonymous\Documents\dot\basic\images\alpha.png'"/>';
