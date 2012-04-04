<?php

/**
 * This is the model class for table "{{comment}}".
 *
 * The followings are the available columns in table '{{comment}}':
 * @property integer $com_id
 * @property integer $pd_id
 * @property integer $user_id
 * @property string $com_content
 * @property double $com_grade
 *
 * The followings are the available model relations:
 * @property Product $pd
 * @property User $user
 */
class Comment extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Comment the static model class
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
		return '{{comment}}';
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
			array('com_grade', 'numerical'),
			array('com_content', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('com_id, pd_id, user_id, com_content, com_grade', 'safe', 'on'=>'search'),
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
			'com_id' => 'Com',
			'pd_id' => 'Pd',
			'user_id' => 'User',
			'com_content' => 'Com Content',
			'com_grade' => 'Com Grade',
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

		$criteria->compare('com_id',$this->com_id);
		$criteria->compare('pd_id',$this->pd_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('com_content',$this->com_content,true);
		$criteria->compare('com_grade',$this->com_grade);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}