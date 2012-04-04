<?php

/**
 * This is the model class for table "{{shop_config}}".
 *
 * The followings are the available columns in table '{{shop_config}}':
 * @property integer $sc_id
 * @property string $sc_name
 * @property string $sc_address
 * @property string $sc_email
 * @property string $sc_phone
 * @property string $sc_description
 */
class ShopConfig extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ShopConfig the static model class
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
		return '{{shop_config}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sc_name, sc_phone', 'length', 'max'=>20),
			array('sc_address', 'length', 'max'=>300),
			array('sc_email', 'length', 'max'=>50),
			array('sc_description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('sc_id, sc_name, sc_address, sc_email, sc_phone, sc_description', 'safe', 'on'=>'search'),
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
			'sc_id' => 'Sc',
			'sc_name' => 'Sc Name',
			'sc_address' => 'Sc Address',
			'sc_email' => 'Sc Email',
			'sc_phone' => 'Sc Phone',
			'sc_description' => 'Sc Description',
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

		$criteria->compare('sc_id',$this->sc_id);
		$criteria->compare('sc_name',$this->sc_name,true);
		$criteria->compare('sc_address',$this->sc_address,true);
		$criteria->compare('sc_email',$this->sc_email,true);
		$criteria->compare('sc_phone',$this->sc_phone,true);
		$criteria->compare('sc_description',$this->sc_description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}