<?php

class PhoneController extends Controller
{
	public $defaultAction = 'view';
	public function actionAdd()
	{
		$model=new Phone;

		if(isset($_POST['Phone']))
		{
			$model->attributes=$_POST['Phone'];
			if($model->validate())
			{
				$model->save();
				$this->redirect("view/$model->id");
			}
		}
		$this->render('add',array('model'=>$model));
	}


	public function actionUpdate()
	{
		$model=Phone::model()->findByPK($_GET['id']);
		if(isset($_POST['Phone'])){
				$model->attributes=$_POST['Phone'];
				if($model->validate())
				{
					$model->save();
					$this->redirect(array('view','id'=>$model->id));
				}
		}
		if(isset($_GET['id'])){
			$this->render('update',array('model'=>$model));
		}	
	}
	
	public function actionView()
	{
		if(isset($_GET['id'])){
			$id=$_GET['id'];
			$phone=Phone::model()->findByPK($id);
			$this->render('view',array('phone'=>$phone));
		}
		else{
			$phones=Phone::model()->findAll();
			$this->render('view-all',array('phones'=>$phones));
		}
	}
	public function actionShow()
	{
		if(isset($_GET['name'])){
			$name=$_GET['name'];
			$name=implode(' ',explode('-',$name));
			$phone=Phone::model()->find('name=:name',array(':name'=>$name));
			if($phone==null)
				throw new CHttpException(404,'Page Not Found');
			$this->render('view',array('phone'=>$phone));
		}
		else
			throw new CHttpException(404,'Page Not Found');
	}
}