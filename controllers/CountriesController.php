<?php 

class CountriesController extends Controller
{

	public function actionIndex()
	{

		/*$model=new Countries();
		//$model->name="Paraguay";
		//$model->status=1;
		//$model->save();

		$countries=Countries::model()->findAll();
		$this->render("index",array("countries"=>$countries));
		*/
		//Yii::app()->user->setFlash("error","This is message error");
		//Yii::app()->user->setFlash("info","This is message error");
		//Yii::app()->user->setFlash("success","This is message error");
		//Yii::app()->user->setFlash("info","This is message error");
		$dataProvider=new CActiveDataProvider('Countries');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));

	}

	public function actionCreate()
	{
		//var_dump($_POST);
		//Yii::app()->end(); //Equivalencia a hacer exit
		$model=new Countries();
		
		if(isset($_POST["Countries"]))
		{
			//hacerlo una vez
			$model->attributes=$_POST["Countries"];

			//hacerlo uno a uno
			//$model->name=$_POST["Countries"]["name"];
			//$model->status=$_POST["Countries"]["status"];

			if($model->save())
			{
				Yii::app()->user->setFlash("success","Country was created succefull..");
				$this->redirect(array("index"));
			}

		}
		$this->render("create",array("model"=>$model));

	}

	public function actionUpdate($id)
	{

		$model=Countries::model()->findByPk($id);
		if(isset($_POST["Countries"]))
		{
			$model->attributes=$_POST["Countries"];
			if($model->save())
			{
				Yii::app()->user->setFlash("success","Country was updated succefull..");
				$this->redirect(array("index"));

			}	

		}
		$this->render("update",array("model"=>$model));
	}

	public function actionDelete($id)
	{

		$model=Countries::model()->deleteByPk($id);
		$this->redirect(array("index"));
	}

	public function actionEnabled($id)
	{

		$model=Countries::model()->findByPk($id);
		if($model->status==1)
			$model->status=0;
		else
			$model->status=1;
		$model->save();
		$this->redirect(array("index"));

	}

	public function actionView($id)
	{

		$model=Countries::model()->findByPk($id);
		$this->render("view",array("model"=>$model));

	}


}

?>