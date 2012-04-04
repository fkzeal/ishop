<?php

/**
 * This is the model class for table "{{user}}".
 *
 * The followings are the available columns in table '{{user}}':
 * @property integer $user_id
 * @property string $user_name
 * @property string $user_password
 * @property string $user_email
 * @property string $user_phone
 * @property integer $user_credits
 * @property string $user_level
 *
 * The followings are the available model relations:
 * @property Collection[] $collections
 * @property Comment[] $comments
 * @property Order[] $orders
 * @property Usermsg[] $usermsgs
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
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
		return '{{user}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_credits', 'numerical', 'integerOnly'=>true),
			array('user_name, user_password', 'length', 'max'=>30),
			array('user_email', 'length', 'max'=>50),
			array('user_phone', 'length', 'max'=>20),
			array('user_level', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('user_id, user_name, user_password, user_email, user_phone, user_credits, user_level', 'safe', 'on'=>'search'),
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
			'collections' => array(self::HAS_MANY, 'Collection', 'user_id'),
			'comments' => array(self::HAS_MANY, 'Comment', 'user_id'),
			'orders' => array(self::HAS_MANY, 'Order', 'user_id'),
			'usermsgs' => array(self::HAS_MANY, 'Usermsg', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'user_id' => 'User',
			'user_name' => 'User Name',
			'user_password' => 'User Password',
			'user_email' => 'User Email',
			'user_phone' => 'User Phone',
			'user_credits' => 'User Credits',
			'user_level' => 'User Level',
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

		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('user_name',$this->user_name,true);
		$criteria->compare('user_password',$this->user_password,true);
		$criteria->compare('user_email',$this->user_email,true);
		$criteria->compare('user_phone',$this->user_phone,true);
		$criteria->compare('user_credits',$this->user_credits);
		$criteria->compare('user_level',$this->user_level,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	
	
	
}