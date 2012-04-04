<?php

/**
 * This is the model class for table "{{collection}}".
 *
 * The followings are the available columns in table '{{collection}}':
 * @property integer $collect_id
 * @property integer $pd_id
 * @property integer $user_id
 * @property string $collect_date
 *
 * The followings are the available model relations:
 * @property Product $pd
 * @property User $user
 */
class Collection extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Collection the static model class
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
		return '{{collection}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pd_id, user_id', 'numerical', 'integerOnly'=>true),
			array('collect_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('collect_id, pd_id, user_id, collect_date', 'safe', 'on'=>'search'),
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
			'pd' => array(self::BELONGS_TO, 'Product', 'pd_id'),
			'user' => array(self::BELONGS_TO, 'User', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'collect_id' => 'Collect',
			'pd_id' => 'Pd',
			'user_id' => 'User',
			'collect_date' => 'Collect Date',
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

		$criteria->compare('collect_id',$this->collect_id);
		$criteria->compare('pd_id',$this->pd_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('collect_date',$this->collect_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}