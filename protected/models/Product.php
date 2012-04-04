<?php

/**
 * This is the model class for table "{{product}}".
 *
 * The followings are the available columns in table '{{product}}':
 * @property integer $pd_id
 * @property integer $cat_id
 * @property string $pd_name
 * @property string $pd_image
 * @property string $pd_description
 * @property string $pd_instructions
 * @property string $pd_place
 * @property double $pd_price
 * @property double $pd_trans_price
 * @property integer $pd_credits
 * @property integer $pd_total_qty
 * @property integer $pd_month_sales
 * @property string $pd_date
 *
 * The followings are the available model relations:
 * @property Bonus[] $bonuses
 * @property Cart[] $carts
 * @property Collection[] $collections
 * @property Comment[] $comments
 * @property Order[] $orders
 * @property Category $cat
 * @property Recommendation[] $recommendations
 */
class Product extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Product the static model class
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
		return '{{product}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cat_id, pd_credits, pd_total_qty, pd_month_sales', 'numerical', 'integerOnly'=>true),
			array('pd_price, pd_trans_price', 'numerical'),
			array('pd_name', 'length', 'max'=>150),
			array('pd_image', 'length', 'max'=>300),
			array('pd_place', 'length', 'max'=>50),
			array('pd_description, pd_instructions, pd_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('pd_id, cat_id, pd_name, pd_image, pd_description, pd_instructions, pd_place, pd_price, pd_trans_price, pd_credits, pd_total_qty, pd_month_sales, pd_date', 'safe', 'on'=>'search'),
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
			//'bonuses' => array(self::HAS_MANY, 'Bonus', 'pd_id'),
			//'carts' => array(self::HAS_MANY, 'Cart', 'pd_id'),
			//'collections' => array(self::HAS_MANY, 'Collection', 'pd_id'),
			'comments' => array(self::HAS_MANY, 'Comment', 'pd_id'),
			'orders' => array(self::HAS_MANY, 'Order', 'pd_id'),
			'cat' => array(self::BELONGS_TO, 'Category', 'cat_id'),
			//'recommendations' => array(self::HAS_MANY, 'Recommendation', 'pd_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pd_id' => 'Pd',
			'cat_id' => 'Cat',
			'pd_name' => 'Pd Name',
			'pd_image' => 'Pd Image',
			'pd_description' => 'Pd Description',
			'pd_instructions' => 'Pd Instructions',
			'pd_place' => 'Pd Place',
			'pd_price' => 'Pd Price',
			'pd_trans_price' => 'Pd Trans Price',
			'pd_credits' => 'Pd Credits',
			'pd_total_qty' => 'Pd Total Qty',
			'pd_month_sales' => 'Pd Month Sales',
			'pd_date' => 'Pd Date',
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

		$criteria->compare('pd_id',$this->pd_id);
		$criteria->compare('cat_id',$this->cat_id);
		$criteria->compare('pd_name',$this->pd_name,true);
		$criteria->compare('pd_image',$this->pd_image,true);
		$criteria->compare('pd_description',$this->pd_description,true);
		$criteria->compare('pd_instructions',$this->pd_instructions,true);
		$criteria->compare('pd_place',$this->pd_place,true);
		$criteria->compare('pd_price',$this->pd_price);
		$criteria->compare('pd_trans_price',$this->pd_trans_price);
		$criteria->compare('pd_credits',$this->pd_credits);
		$criteria->compare('pd_total_qty',$this->pd_total_qty);
		$criteria->compare('pd_month_sales',$this->pd_month_sales);
		$criteria->compare('pd_date',$this->pd_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}