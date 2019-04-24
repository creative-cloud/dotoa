<center><b>
<?php
//namespace app\controllers;
use app\models\test1;
echo "I work";
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
 <br><br>

<?php
echo \yii\widgets\ListView::widget([
  'dataProvider'=> $provider,
  'layout' => "{pager}\n{items}\n{summary}",
  //'itemView'=>'_item',
  'itemView'=> function($users)
   {
    ?>
    <div class="Users list">
      <h3> <?=$users->f_name ." ". $users->l_name;?></h3>
      <p> Email : <?=$users->email ?> </p>
      <p> Marks : <?=$users->marks ?> </p>
      <p> Status : <?= ($users->status)? "Active" : "Inactive" ?> </p>
    </div>

<?php
     //return $users->l_name." ".$users->f_name;
   }
  //return $this->render('_item', ['users'=>$users,
])
?>
