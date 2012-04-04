<?php

/**
 * This is the model class for table "{{announce}}".
 *
 * The followings are the available columns in table '{{announce}}':
 * @property integer $ann_id
 * @property string $ann_date
 * @property string $ann_title
 * @property string $ann_content
 */
class Announce extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Announce the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{announce}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ann_title', 'length', 'max'=>100),
			array('ann_date, ann_content', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ann_id, ann_date, ann_title, ann_content', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ann_id' => 'Ann',
			'ann_date' => 'Ann Date',
			'ann_title' => 'Ann Title',
			'ann_content' => 'Ann Content',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('ann_id',$this->ann_id);
		$criteria->compare('ann_date',$this->ann_date,true);
		$criteria->compare('ann_title',$this->ann_title,true);
		$criteria->compare('ann_content',$this->ann_content,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}