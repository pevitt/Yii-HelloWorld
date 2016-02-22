<?php 

class Countries extends CActiveRecord
{

	public static function model($ClassName=__CLASS__)
	{
		return parent::model($ClassName);

	}

	public function tableName()
	{
		return "countries";
	}

	public function rules()
	{

		return array(
				array("name, status","required"),
			);

	}
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('status',$this->status,true);
		

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'status' => 'Status',
		);
	}

}

 ?>