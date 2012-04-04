<?php

/**
 * This is the model class for table "{{order}}".
 *
 * The followings are the available columns in table '{{order}}':
 * @property integer $od_id
 * @property integer $pd_id
 * @property integer $user_id
 * @property string $od_date
 * @property integer $od_qty
 * @property string $od_shipping_status
 * @property string $od_shipping_name
 * @property string $od_shipping_address
 * @property integer $od_shipping_potal_code
 * @property string $od_shipping_phoneno
 * @property string $od_shipping_way
 * @property double $od_total_pay
 * @property string $od_pay_way
 * @property string $od_pay_status
 * @property integer $od_total_credits
 *
 * The followings are the available model relations:
 * @property Product $pd
 * @property User $user
 */
class Order extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Order the static model class
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
		return '{{order}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pd_id, user_id, od_qty, od_shipping_potal_code, od_total_credits', 'numerical', 'integerOnly'=>true),
			array('od_total_pay', 'numerical'),
			array('od_shipping_status, od_shipping_way, od_pay_way, od_pay_status', 'length', 'max'=>1),
			array('od_shipping_name', 'length', 'max'=>30),
			array('od_shipping_address', 'length', 'max'=>400),
			array('od_shipping_phoneno', 'length', 'max'=>20),
			array('od_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('od_id, pd_id, user_id, od_date, od_qty, od_shipping_status, od_shipping_name, od_shipping_address, od_shipping_potal_code, od_shipping_phoneno, od_shipping_way, od_total_pay, od_pay_way, od_pay_status, od_total_credits', 'safe', 'on'=>'search'),
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
			'od_id' => 'Od',
			'pd_id' => 'Pd',
			'user_id' => 'User',
			'od_date' => 'Od Date',
			'od_qty' => 'Od Qty',
			'od_shipping_status' => 'Od Shipping Status',
			'od_shipping_name' => 'Od Shipping Name',
			'od_shipping_address' => 'Od Shipping Address',
			'od_shipping_potal_code' => 'Od Shipping Potal Code',
			'od_shipping_phoneno' => 'Od Shipping Phoneno',
			'od_shipping_way' => 'Od Shipping Way',
			'od_total_pay' => 'Od Total Pay',
			'od_pay_way' => 'Od Pay Way',
			'od_pay_status' => 'Od Pay Status',
			'od_total_credits' => 'Od Total Credits',
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

		$criteria->compare('od_id',$this->od_id);
		$criteria->compare('pd_id',$this->pd_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('od_date',$this->od_date,true);
		$criteria->compare('od_qty',$this->od_qty);
		$criteria->compare('od_shipping_status',$this->od_shipping_status,true);
		$criteria->compare('od_shipping_name',$this->od_shipping_name,true);
		$criteria->compare('od_shipping_address',$this->od_shipping_address,true);
		$criteria->compare('od_shipping_potal_code',$this->od_shipping_potal_code);
		$criteria->compare('od_shipping_phoneno',$this->od_shipping_phoneno,true);
		$criteria->compare('od_shipping_way',$this->od_shipping_way,true);
		$criteria->compare('od_total_pay',$this->od_total_pay);
		$criteria->compare('od_pay_way',$this->od_pay_way,true);
		$criteria->compare('od_pay_status',$this->od_pay_status,true);
		$criteria->compare('od_total_credits',$this->od_total_credits);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}