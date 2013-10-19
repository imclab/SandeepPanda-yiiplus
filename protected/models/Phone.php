<?php
class Phone extends CActiveRecord
{
	
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'phone';
	}

	public function rules()
	{
		return array(
			array('name, price, memory, camera, screen_size, os', 'required'),
			array('price', 'numerical', 'integerOnly'=>true),
			array('name, memory, camera, screen_size, os', 'length', 'max'=>65),
			array('id, name, price, memory, camera, screen_size, os', 'safe', 'on'=>'insert'),
		);
	}

	public function relations()
	{
		return array(
		);
	}
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'price' => 'Price',
			'memory' => 'Memory',
			'camera' => 'Camera',
			'screen_size' => 'Screen Size',
			'os' => 'Os',
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('price',$this->price);
		$criteria->compare('memory',$this->memory,true);
		$criteria->compare('camera',$this->camera,true);
		$criteria->compare('screen_size',$this->screen_size,true);
		$criteria->compare('os',$this->os,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}