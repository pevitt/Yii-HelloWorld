<?php 
class HolaController extends Controller
{

	public function actionIndex($value='')
	{
		$model=Users::model()->findAll();
		$twitter="@vito1986";
		$this->render("index",array("model"=>$model,"twitter"=>$twitter));
	}
		

}

?>