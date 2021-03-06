<?php

/**
 * This is the model class for table "dots".
 *
 * The followings are the available columns in table 'dots':
 * @property string $path_id
 * @property string $user_id
 * @property string $value
 * @property integer $state
 * @property string $comment
 *
 * The followings are the available model relations:
 * @property Path $path
 * @property User $user
 */
class Dots extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'dots';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('path_id, user_id', 'required'),
			array('state', 'numerical', 'integerOnly'=>true),
			array('path_id, user_id', 'length', 'max'=>10),
			array('value, comment', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('path_id, user_id, value, state, comment', 'safe', 'on'=>'search'),
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
			'path' => array(self::BELONGS_TO, 'Path', 'path_id'),
			'user' => array(self::BELONGS_TO, 'User', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'path_id' => 'Path',
			'user_id' => 'User',
			'value' => 'Value',
			'state' => 'State',
			'comment' => 'Comment',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('path_id',$this->path_id,true);
		$criteria->compare('user_id',$this->user_id,true);
		$criteria->compare('value',$this->value,true);
		$criteria->compare('state',$this->state);
		$criteria->compare('comment',$this->comment,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Dots the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
