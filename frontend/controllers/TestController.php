<?php

namespace frontend\controllers;

class TestController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionTest1()
    {
        echo 'ทดสอบ 1';
     }//end test1

     public function actionTest2($name=null,$lname=null){
       $info = "Your name is $name $lname";
       return $this->render('test2',['info'=>$info]);
     }
}