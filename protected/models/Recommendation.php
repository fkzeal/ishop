<?php

/**
 * This is the model class for table "{{recommendation}}".
 *
 * The followings are the available columns in table '{{recommendation}}':
 * @property integer $rem_id
 * @property integer $pd_id
 * @property string $rem_date
 * @property string $rem_reason
 *
 * The followings are the available model relations:
 * @property Product $pd
 */
class Recommendation extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Recommendation the static model class
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
		return '{{recommendation}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pd_id', 'numerical', 'integerOnly'=>true),
			array('rem_reason', 'length', 'max'=>500),
			array('rem_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('rem_id, pd_id, rem_date, rem_reason', 'safe', 'on'=>'search'),
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
			'rem_id' => 'Rem',
			'pd_id' => 'Pd',
			'rem_date' => 'Rem Date',
			'rem_reason' => 'Rem Reason',
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

		$criteria->compare('rem_id',$this->rem_id);
		$criteria->compare('pd_id',$this->pd_id);
		$criteria->compare('rem_date',$this->rem_date,true);
		$criteria->compare('rem_reason',$this->rem_reason,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}