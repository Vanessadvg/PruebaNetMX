<?php

/**
 * This is the model class for table "tareas".
 *
 * The followings are the available columns in table 'tareas':
 * @property integer $id
 * @property string $tarea
 * @property string $descripcion
 * @property integer $id_usuario
 * @property string $estatus
 */
class Tareas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tareas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tarea, descripcion, id_usuario, estatus,prioridad', 'required'),
		
			array('tarea, estatus,prioridad', 'length', 'max'=>30),
			array('descripcion', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, estatus,prioridad', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'tarea' => 'Tarea',
			'descripcion' => 'Descripcion',
			'id_usuario' => 'Id Usuario',
			'estatus' => 'Estatus',
			'prioridad' => 'Prioridad',
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
		$id = Yii::app()->user->id;
		$criteria=new CDbCriteria;   
		$criteria->compare('estatus',$this->estatus);
		$criteria->compare('prioridad',$this->prioridad);
		$criteria->addCondition('id_usuario='.$id); 
		return new CActiveDataProvider($this, array(
		
			'criteria'=>$criteria,
		));
	}
	public function getCssClass(){
       
        $class = "";

        if($this->prioridad == "Alta"){
            return "table-success";
        }
        else if($this->prioridad == "Media"){
            return "table-warning";
        }
        
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tareas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
