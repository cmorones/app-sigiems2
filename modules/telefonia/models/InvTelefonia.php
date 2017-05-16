<?php

namespace app\modules\telefonia\models;

use Yii;

/**
 * This is the model class for table "inv_telefonia".
 *
 * @property integer $id
 * @property integer $progresivo
 * @property string $serie
 * @property string $descripcion
 * @property integer $marca
 * @property integer $modelo
 * @property integer $num_ext
 * @property string $nodo
 * @property integer $tipo
 * @property integer $id_usuario
 * @property integer $estado
 * @property integer $id_plantel
 * @property integer $id_area
 */
class InvTelefonia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'inv_telefonia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['progresivo', 'marca', 'modelo', 'num_ext', 'id_usuario', 'estado', 'id_plantel', 'id_area'], 'integer'],
            [['id','progresivo','serie', 'marca','modelo','num_ext','id_usuario','estado','id_plantel','id_area','observaciones'], 'safe'],
            [['progresivo','serie', 'marca','modelo','num_ext', 'id_usuario','estado','id_area'], 'required'],
            [['serie'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'progresivo' => 'Progresivo',
            'serie' => 'Serie',
            'marca' => 'Marca',
            'modelo' => 'Modelo',
            'num_ext' => 'Num. Extensión',
            'id_usuario' => 'Usuario',
            'estado' => 'Estado',
            'id_plantel' => 'Plantel',
            'id_area' => 'Area',
            'observaciones' => 'Obervaciones',
        ];
    }
        public function getCatPlanteles()
    {
        return $this->hasOne(CatPlanteles::className(),['id'=>'id_plantel']);
    }
      public function getCatAreas()
    {
        return $this->hasOne(CatAreas::className(),['id'=>'id_area']);
    }
      public function getCatEstado()
    {
        return $this->hasOne(CatEstado::className(),['id'=>'id_estado']);
    }

}
