<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
$this->title = 'My Yii Application';?>

<?php
$route1 = Yii::$app->urlManager->createUrl('test/test1');
?>
<a href="<?=$route1?>">ไปที่ test1</a>
<br>

<?php
$route2 = Yii::$app->urlManager->createUrl(['test/test2','name'=>'Ausawin','lname'=>'Ieamsaard']);
?>
<a href="<?=$route2?>">ไปที่ test2</a>
<br>


<?=
Html::a('ลิงค์แบบที่ 3', ['Test/test1']);
?>


<?=
yii\helpers\Url::to('test/test1');

?>