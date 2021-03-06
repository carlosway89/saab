<?php

/**
 * This is the model class for table "cotizacion".
 *
 * The followings are the available columns in table 'cotizacion':
 * @property integer $IDCOTIZACION
 * @property integer $COT_buenaPro
 * @property integer $IDREQUERIMIENTO
 *
 * The followings are the available model relations:
 * @property Requerimiento $iDREQUERIMIENTO
 * @property Proveedor[] $proveedors
 */
class Cotizacion extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cotizacion the static model class
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
		return 'cotizacion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('COT_buenaPro, IDREQUERIMIENTO', 'required'),
			array('COT_buenaPro, IDREQUERIMIENTO', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('IDCOTIZACION, COT_buenaPro, IDREQUERIMIENTO', 'safe', 'on'=>'search'),
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
			'iDREQUERIMIENTO' => array(self::BELONGS_TO, 'Requerimiento', 'IDREQUERIMIENTO'),
			'proveedors' => array(self::MANY_MANY, 'Proveedor', 'cotizacion_proveedor(IDCOTIZACION, IDPROVEEDOR)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDCOTIZACION' => 'Idcotizacion',
			'COT_buenaPro' => 'Cot Buena Pro',
			'IDREQUERIMIENTO' => 'Idrequerimiento',
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

		$criteria->compare('IDCOTIZACION',$this->IDCOTIZACION);
		$criteria->compare('COT_buenaPro',$this->COT_buenaPro);
		$criteria->compare('IDREQUERIMIENTO',$this->IDREQUERIMIENTO);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}