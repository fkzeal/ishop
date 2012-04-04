<?php

/**
 * This is the model class for table "{{cart}}".
 *
 * The followings are the available columns in table '{{cart}}':
 * @property integer $cart_id
 * @property integer $pd_id
 * @property string $cart_session_id
 * @property integer $cart_qty
 * @property double $cart_pay
 * @property integer $cart_credits
 *
 * The followings are the available model relations:
 * @property Product $pd
 */
class Cart extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cart the static model class
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
		return '{{cart}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pd_id, cart_qty, cart_credits', 'numerical', 'integerOnly'=>true),
			array('cart_pay', 'numerical'),
			array('cart_session_id', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cart_id, pd_id, cart_session_id, cart_qty, cart_pay, cart_credits', 'safe', 'on'=>'search'),
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
			'cart_id' => 'Cart',
			'pd_id' => 'Pd',
			'cart_session_id' => 'Cart Session',
			'cart_qty' => 'Cart Qty',
			'cart_pay' => 'Cart Pay',
			'cart_credits' => 'Cart Credits',
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

		$criteria->compare('cart_id',$this->cart_id);
		$criteria->compare('pd_id',$this->pd_id);
		$criteria->compare('cart_session_id',$this->cart_session_id,true);
		$criteria->compare('cart_qty',$this->cart_qty);
		$criteria->compare('cart_pay',$this->cart_pay);
		$criteria->compare('cart_credits',$this->cart_credits);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}