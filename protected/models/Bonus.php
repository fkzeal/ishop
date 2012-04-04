<?php

/**
 * This is the model class for table "{{bonus}}".
 *
 * The followings are the available columns in table '{{bonus}}':
 * @property integer $bonus_id
 * @property integer $pd_id
 * @property double $bonus_price
 * @property integer $bonus_credits
 *
 * The followings are the available model relations:
 * @property Product $pd
 */
class Bonus extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Bonus the static model class
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
		return '{{bonus}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pd_id, bonus_credits', 'numerical', 'integerOnly'=>true),
			array('bonus_price', 'numerical'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('bonus_id, pd_id, bonus_price, bonus_credits', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'bonus_id' => 'Bonus',
			'pd_id' => 'Pd',
			'bonus_price' => 'Bonus Price',
			'bonus_credits' => 'Bonus Credits',
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

		$criteria->compare('bonus_id',$this->bonus_id);
		$criteria->compare('pd_id',$this->pd_id);
		$criteria->compare('bonus_price',$this->bonus_price);
		$criteria->compare('bonus_credits',$this->bonus_credits);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}